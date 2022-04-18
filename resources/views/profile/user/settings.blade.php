@extends('profile.user.layouts.app')

@section('title')
Вверх | Личный кабинет
@endsection

@section('content')

<main class="main">
    <div class="cabinet__header">
        <!-- Бургер кнопка -->
        <div class="burger__menu _open">
            <img src="img/icons/header-menu-open.svg" alt="menu-open">
        </div>
        <!-- Бургер кнопка - END -->
        <div class="intro__logo"><img src="img/logo-cabinet.png" alt="logo"></div>
    </div>

    <h2 class="cabinet__title title-block">Настройка профиля</h2>

    <div class="cabinet-settings__body cabinet-tabs">
        <div class="cabinet-tabs__nav">
            <a href="#tab1" class="cabinet-tabs__nav-link _active">Редактировать информацию</a>
            <a href="#tab2" class="cabinet-tabs__nav-link">Изменить пароль</a>
        </div>
        <div class="cabinet-tabs__content">
            <form action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data" >
                @method('put')
                @csrf
                <div id="tab1" class="cabinet-tabs__content-inner _active">
                    <div class="cabinet-settings__left">

                        <h3 class="cabinet-settings__subtitle text">Данные профиля</h3>

                        <div class="cabinet-settings__photo">
                            <div class="cabinet-settings__photo-inner"><img src="{{ route('get_file',['path'=>Auth::user()->avatar]) }}"
                                    alt="user"></div>
                            <label class="cabinet-settings__photo-file text">
                                <input type="file" name="avatar" class="@error('avatar')is-invalid @enderror">
                                <span>Выберите файл для загрузки</span>
                            </label>
                        </div>
                        @error('avatar')
                                <p class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                        <label class="cabinet-settings__input input">
                            <input type="text" placeholder="ФИО" value="{{ Auth::user()->name }}" name="name" class="@error('name')is-invalid @enderror">
                        </label>
                        @error('name')
                                <p class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                        <label class="cabinet-settings__input input">
                            <input type="text" placeholder="Email" value="{{ Auth::user()->email }}" class="@error('email')is-invalid @enderror" name="email">
                        </label>
                        @error('email')
                                <p class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                        <label class="cabinet-settings__input input">
                            <input type="text" placeholder="Телефонvalue" value="{{ Auth::user()->phone_number ? Auth::user()->phone_number : '' }}" name="phone_number">
                        </label>
                        @php
                            $arr=['instagram', 'tiktok', 'vk', 'facebook', 'ok'];
                            $val='';
                        @endphp

                        @foreach ($arr as $item)
                             @php $val = '' @endphp
                             @foreach (Auth::user()->user_social_link as $key => $value)

                                @if ($value->type == $item)
                                    @php $val = $value->url @endphp
                                @endif
                             @endforeach
                            <div class="cabinet-settings__social-input">
                                <div class="cabinet-settings__social-icon social-link">
                                    <svg>
                                        <use xlink:href="#_icon-{{$item=='instagram' ? 'inst' : $item}}"></use>
                                    </svg>
                                </div>
                                <label class="cabinet-settings__social-name">
                                    <input type="text" class="inp" placeholder="Имя пользователя" value={{$val}} >
                                </label>
                                <input type="hidden" name="" class="hidden-inp">
                                <div class="cabinet-settings__social-btns">
                                    <a href="#" class="cabinet-settings__link-add link-add" data-type="{{$item}}">Добавить</a>
                                    <div class="cabinet-settings__btn-add"></div>
                                </div>
                            </div>
                            <div class='error'></div>
                        @endforeach
                        {{-- <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-inst"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя" name="social_link[inst]">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div> --}}
                        {{-- <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-tiktok"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя" name="social_link[tiktok]">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div> --}}
                        {{-- <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-vk"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя" name="social_link[vk]">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div> --}}
                        {{-- <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-facebook"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя" name="social_link[facebook]">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div> --}}
                        {{-- <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-ok"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя" name="social_link[ok]" value="{{Auth::user()->user_social_link[0]->url}}">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div> --}}

                        <label class="cabinet-settings__dropdown dropdown">
                            <select name="criterion">
                                <option value="">Критерий для подбора наставника</option>
                                @if (Auth::user()->criterion != null)
                                    <option value="1 вариант" {{Auth::user()->criterion=='1 вариант' ? 'selected' : ''}}>1 вариант</option>
                                    <option value="2 вариант" {{Auth::user()->criterion=='2 вариант' ? 'selected' : ''}}>2 вариант</option>
                                    <option value="3 вариант" {{Auth::user()->criterion=='3 вариант' ? 'selected' : ''}}>3 вариант</option>
                                @else
                                    <option value="1 вариант">1 вариант</option>
                                    <option value="2 вариант">2 вариант</option>
                                    <option value="3 вариант">3 вариант</option>
                                @endif
                            </select>
                        </label>

                        <button class="btn-blue _cabinet-btn" data-da=".cabinet-settings__right, 991, last">Сохранить</button>
                    </div>
                    <div class="cabinet-settings__right">
                        <h3 class="cabinet-settings__subtitle text">Информация о вас или вашем проекте</h3>
                        @error('description')
                                <p class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                        <label class="cabinet-settings__textarea input">
                            <textarea name="description" class="@error('description')is-invalid @enderror">{{ Auth::user()->description }}</textarea>
                        </label>
                    </div>

                </div>
            </form>
            <div id="tab2" class="cabinet-tabs__content-inner">
                    <form  method="post" class="cabinet-settings__form" name="chp" id="changePassword">

                        @csrf
                        <label class="cabinet-settings__input input">
                            <input type="password" placeholder="Старый пароль" name="old_password" >
                            <span class="password-toggle"><img src="img/icons/eye.svg" alt=""></span>
                        </label>

                            <span class="invalid-feedback" role="alert" id="old_password">
                                <strong></strong>
                            </span>

                        <a href="{{ route('password.request') }}" class="cabinet-settings__link-recovery">Забыли пароль?</a>

                        <label class="cabinet-settings__input input">
                            <input type="password" placeholder="Новый пароль" name="password" >
                            <span class="password-toggle"><img src="img/icons/eye.svg" alt=""></span>
                        </label>

                            <span class="invalid-feedback" role="alert" id="password">
                                <strong></strong>
                            </span>

                        <label class="cabinet-settings__input input">
                            <input type="password" placeholder="Повторите пароль" name="new_password" >
                            <span class="password-toggle"><img src="img/icons/eye.svg" alt=""></span>
                        </label>

                            <span class="invalid-feedback" role="alert" id="new_password">
                                <strong></strong>
                            </span>
<input type='submit' value="Сохранить" class="btn-blue _cabinet-btn">
                    </form>
                    <div id='error'></div>
            </div>

        </div>
    </div>
</main>

@endsection
@section('script')
    <script src="{{ asset('js/settings.js') }}"></script>
    <script>
        // var form = document.forms.namedItem("chp");
        var form = document.getElementById('changePassword')
        form.addEventListener('submit', function(ev) {
            ev.preventDefault();
            csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                var formData = new FormData(form)
                console.log(formData)
                document.getElementById('old_password').innerHTML=''
                document.getElementById('password').innerHTML=''
                document.getElementById('new_password').innerHTML=''

                fetch("{{route('updatePassword')}}",{
      method: 'POST',
      headers: {
        
        'X-CSRF-TOKEN':csrf
         },

         body: formData
       }).then(async response => {
console.log(response)
// response.headers.set("Content-Type", "application/json")
// console.log(response.headers.get("Content-Type"))
         if (!response.ok) {

         const validation = await response.json();

      
         for (const key in validation.errors) {
             if (validation.errors.hasOwnProperty.call(validation.errors, key)) {
                document.getElementById(key+'').innerHTML=''
                 const element = validation.errors[key][0];
                 document.getElementById(key+'').innerHTML=element

             }
         }
       }else{
        console.log('else');
        // document.getElementById('error').innerHTML=element
       }
    })

        }, false)

     </script>
@endsection
