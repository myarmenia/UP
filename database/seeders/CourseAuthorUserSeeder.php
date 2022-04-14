<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CourseAuthorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'CourseAuthor',
            'email' => 'CourseAuthor@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create(['name' => 'CourseAuthor']);


        $user->assignRole([$role->id]);
    }
}
