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
            <form action="" class="">
                <div id="tab1" class="cabinet-tabs__content-inner _active">
                    <div class="cabinet-settings__left">
                        <h3 class="cabinet-settings__subtitle text">Данные профиля</h3>

                        <div class="cabinet-settings__photo">
                            <div class="cabinet-settings__photo-inner"><img src="img/cabinet-user-photo.jpg"
                                    alt="user"></div>
                            <label class="cabinet-settings__photo-file text">
                                <input type="file">
                                <span>Выберите файл для загрузки</span>
                            </label>
                        </div>
                        <label class="cabinet-settings__input input">
                            <input type="text" placeholder="ФИО" value="{{ Auth::user()->name }}">
                        </label>
                        <label class="cabinet-settings__input input">
                            <input type="text" placeholder="Email" value="{{ Auth::user()->email }}">
                        </label>
                        <label class="cabinet-settings__input input">
                            <input type="text" placeholder="Телефон" value="{{ Auth::user()->phone_number ? Auth::user()->phone_number : '' }}">
                        </label>

                        <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-inst"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div>
                        <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-tiktok"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div>
                        <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-vk"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div>
                        <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-facebook"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div>
                        <div class="cabinet-settings__social-input">
                            <div class="cabinet-settings__social-icon social-link">
                                <svg>
                                    <use xlink:href="#_icon-ok"></use>
                                </svg>
                            </div>
                            <label class="cabinet-settings__social-name">
                                <input type="text" placeholder="Имя пользователя">
                            </label>
                            <div class="cabinet-settings__social-btns">
                                <a href="#" class="cabinet-settings__link-add">Добавить</a>
                                <div class="cabinet-settings__btn-add"></div>
                            </div>
                        </div>

                        <label class="cabinet-settings__dropdown dropdown">
                            <select>
                                <option value="">Критерий для подбора наставника</option>
                                <option value="">1 вариант</option>
                                <option value="">2 вариант</option>
                                <option value="">3 вариант</option>
                            </select>
                        </label>

                        <a href="#" class="btn-blue _cabinet-btn" data-da=".cabinet-settings__right, 991, last">Сохранить</a>
                    </div>
                    <div class="cabinet-settings__right">
                        <h3 class="cabinet-settings__subtitle text">Информация о вас или вашем проекте</h3>
                        <label class="cabinet-settings__textarea input">
                            <textarea>{{ Auth::user()->description }}</textarea>
                        </label>
                    </div>
                </div>

                <div id="tab2" class="cabinet-tabs__content-inner">
                    {{-- <form action="" class="cabinet-settings__form"> --}}
                        <label class="cabinet-settings__input input">
                            <input type="password" placeholder="Старый пароль">
                            <span class="password-toggle"><img src="img/icons/eye.svg" alt=""></span>
                        </label>
                        <a href="#" class="cabinet-settings__link-recovery">Забыли пароль?</a>

                        <label class="cabinet-settings__input input">
                            <input type="password" placeholder="Новый пароль">
                            <span class="password-toggle"><img src="img/icons/eye.svg" alt=""></span>
                        </label>
                        <label class="cabinet-settings__input input">
                            <input type="password" placeholder="Повторите пароль">
                            <span class="password-toggle"><img src="img/icons/eye.svg" alt=""></span>
                        </label>
                        <a href="#" class="btn-blue _cabinet-btn" data-modal-link="saved">Сохранить</a>
                    {{-- </form> --}}

                    <!--  -->
                </div>
            </form>
        </div>
    </div>
</main>

@endsection
