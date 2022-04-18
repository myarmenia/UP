<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserSocialLink;
use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.user.index');
    }

    public function settings()
    {
        return view('profile.user.settings');
    }

    public function updateProfile(Request $request )
    {
        $user = Auth::user();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'description' => ['required','min:8'],

        ]);
        if($request->has('avatar')){
            $request->validate([
                'avatar' => ['required','image']
            ]);
            Storage::delete(Auth::user()->avatar);
            $path = FileUploadService::upload($request->avatar,'avatar/'.$user['id']);
            $user->avatar = $path;
            $user->save();
        }
        $update=[
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'description' => $request->description,
            'criterion' => $request->criterion
        ];

        if($request->social_link){
            foreach ($request->social_link as $key => $value) {
                $soc_link=UserSocialLink::where(['user_id' => $user->id, 'type' => $key]);

                if($soc_link->first() != null){
                    if($value!=null){
                        $soc_link->update(['url'=> "https://$key.com/$value"]);
                    }
                    else{
                        $soc_link->delete();
                    }
                }
                else{
                    if($value!=null){
                        UserSocialLink::create([
                            'user_id' => $user->id,
                            'type' => $key,
                            'url' => "https://$key.com/$value"
                        ]);
                    }
                }
            }
        }
        $data = User::where('id', Auth::user()->id)->update($update);
    }

    public function updatePassword(Request $request){

        $validator = Validator::make($request->all(), [
            'old_password' => ['required'],
            'new_password' => ['required', 'string', 'min:8','confirmed']
        ]);
        if ($validator->fails()){
            return response()->json(['errors'=>$validator->errors()], 404);
        }
       
        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->old_password , $hashedPassword )) {

            if (!Hash::check($request->new_password , $hashedPassword)) {

               $user =user::find(Auth::user()->id);
               $user->password = bcrypt($request->new_password);
               user::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $user->password));
               return response()->json(['success'=>'Пароль успешно обновлен'], 200);

            }
            else{
                return response()->json(['errors'=>['new_password'=>['Новый пароль не может быть старым паролем']]], 404);
            }

        }
        else{
                return response()->json(['errors'=>['old_password'=>['Cтарый пароль неверный']]], 404);
        }
    }

    public function createAuthor()
    {
        return view('profile/user/course/create-author');
    }

    public function createAuthorTask()
    {
        return view('profile/user/course/create-author-task');
    }

    public function createAuthorLesson()
    {
        return view('profile/user/course/create-author-lesson');
    }


}
