@extends('profile.user.layouts.app')

@section('title')
Вверх | Личный кабинет
@endsection

@section('content')

    <main class="main cabinet-user">
        <div class="cabinet__header">
            <!-- Бургер кнопка -->
            <div class="burger__menu _open">
                <img src="img/icons/header-menu-open.svg" alt="menu-open">
            </div>
            <!-- Бургер кнопка - END -->
            <div class="intro__logo"><img src="img/logo-cabinet.png" alt="logo"></div>
        </div>

        <h2 class="cabinet__title title-block">Личный кабинет</h2>

        <div class="cabinet-user__wrap">
            <div class="cabinet-user__body">
                <div class="cabinet-user__body-top">
                    <div class="cabinet-user__photo">
                        <img src="{{ route('get_file',['path'=>Auth::user()->avatar]) }}" alt="photo">
                    </div>
                    <div class="cabinet-user__content">
                        <div class="cabinet-user__row">
                            Статус: <span>
                                {{ __(Auth::user()->roles[0]->name) }}
                            </span>
                        </div>
                        <div class="cabinet-user__row">
                            ФИО: <span>
                                {{ Auth::user()->name }}
                            </span>
                        </div>
                        <div class="cabinet-user__row">
                            E-mail: <span>
                                {{ Auth::user()->email }}
                            </span>
                        </div>
                        <div class="cabinet-user__row">
                            Телефон: <span>
                                {{ Auth::user()->phone_number ?? null}}
                            </span>
                        </div>

                        <div class="cabinet-user__social">
                            <span>Социальные сети:</span>
                            <div class="cabinet-user__social-inner">
                                <a href="#" class="social-link">
                                    <svg>
                                        <use xlink:href="#_icon-inst"></use>
                                    </svg>
                                </a>
                                <a href="#" class="social-link">
                                    <svg>
                                        <use xlink:href="#_icon-tiktok"></use>
                                    </svg>
                                </a>
                                <a href="#" class="social-link">
                                    <svg>
                                        <use xlink:href="#_icon-vk"></use>
                                    </svg>
                                </a>
                                <a href="#" class="social-link">
                                    <svg>
                                        <use xlink:href="#_icon-facebook"></use>
                                    </svg>
                                </a>
                                <a href="#" class="social-link">
                                    <svg>
                                        <use xlink:href="#_icon-ok"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cabinet-user__content">
                    <h3 class="cabinet-user__subtitle">Информация о вас или о вашем курсе</h3>
                    <div class="cabine-user__about text">
                        {{ Auth::user()->description }}
                    </div>
                    <a href="{{ route('profileSettings')}}" class="btn-blue _cabinet-btn">
                        <svg viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.4407 3.40798L17.5771 0.54194C16.8556 -0.180184 15.6004 -0.181571 14.8761 0.543327L2.04764 13.4984C1.99077 13.5558 1.94974 13.6262 1.92737 13.7036L0.0183185 20.3911C-0.0292445 20.5577 0.0173789 20.7373 0.139978 20.86C0.230853 20.9509 0.352512 20.9999 0.477437 20.9999C0.521242 20.9999 0.565538 20.9938 0.608403 20.9817L7.29017 19.071C7.36753 19.0486 7.43791 19.0075 7.49523 18.9506L20.4407 6.10985C20.8015 5.74881 21 5.26924 21 4.75893C21 4.24863 20.8015 3.76902 20.4407 3.40798ZM12.7963 4.01511L14.5532 5.77194L5.38081 14.9443L4.72253 13.6273C4.64141 13.4656 4.47644 13.3635 4.29558 13.3635H3.53126L12.7963 4.01511ZM1.17236 19.8277L1.79403 17.6514L3.34853 19.2059L1.17236 19.8277ZM6.68192 18.2537L4.3984 18.906L2.09395 16.6016L2.74627 14.3181H4.0005L4.82312 15.9633C4.86925 16.0556 4.94428 16.1307 5.03659 16.1768L6.68187 16.9994V18.2537H6.68192ZM7.63649 17.4688V16.7044C7.63649 16.5236 7.53443 16.3586 7.37268 16.2775L6.05568 15.6192L15.228 6.44686L16.9849 8.20369L7.63649 17.4688ZM19.7672 5.44616L17.6628 7.53181L13.4682 3.33719L15.5524 1.23418C15.9132 0.873404 16.5415 0.873404 16.9022 1.23418L19.7658 4.0978C19.9462 4.27816 20.0455 4.51772 20.0455 4.77267C20.0455 5.02762 19.9462 5.26718 19.7672 5.44616Z" />
                        </svg>
                        Редактировать
                    </a>
                </div>

                <!-- сертификаты -->
                <div class="cabinet-certificates">
                    <h3 class="cabinet-user__subtitle">Полученные сертификаты</h3>
                    <!-- Заглушка -->
                    <div class="plug">
                        <span>У вас пока нет сертификатов.<br>
                            Завершите один курс, чтобы получить диплом.</span>
                    </div>

                    <div class="cabinet-certificates__slider-wrap">
                        <div class="cabinet-certificates__slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"><img src="img/courses-slider-img.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="img/courses-slider-img.jpg" alt=""></div>
                                <div class="swiper-slide"><img src="img/courses-slider-img.jpg" alt=""></div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="section-index__btn-next cabinet__slider-btn"></div>
                    </div>
                </div>


            </div>
            <div class="cabinet-user__my-courses">
                <h3 class="cabinet-user__subtitle">Ваши курсы</h3>
                <a href="#" class="cabinet-user__course-create">Создать курс</a>
                <!-- Заглушка -->
                <div class="plug _courses">
                    <span>Вы пока не начали проходить ни один курс</span>
                    <a href="#" class="btn-white">Найти курс</a>
                </div>
                <!-- Заглушка - end -->
                <div class="cabinet-user__courses-inner">
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>
                    <div class="cabinet-user__courses-item">
                        <div class="user-courses__item-img"><img src="img/courses-slider-img.jpg" alt=""></div>
                        <h3 class="cabinet-courses__item-title">заголовок Название курса для предпринимателей</h3>
                    </div>

                </div>
            </div>
        </div>

    </main>

@endsection

