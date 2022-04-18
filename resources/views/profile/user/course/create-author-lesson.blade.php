@extends('profile.user.layouts.app')

@section('title')
Вверх | Личный кабинет | Создать курс - урок
@endsection

@section('content')
<main class="main create-course cabinet-single-course">
    <div class="cabinet__header">
        <!-- Бургер кнопка -->
        <div class="burger__menu _open">
            <img src="img/icons/header-menu-open.svg" alt="menu-open">
        </div>
        <!-- Бургер кнопка - END -->
        <div class="intro__logo"><img src="img/logo-cabinet.png" alt="logo"></div>
    </div>

    <h2 class="cabinet__title title-block"></h2>


    <div class="cabinet-course__body">
        <div class="cabinet-course__lessons">
            <div class="cabinet-course__lessons-list">

                <div class="cabinet-course__lessons-module _author">
                    <span>Модуль 2</span>
                    <div class="cabinet-course__lessons-item">
                        <div class="cabinet-course__lessons-row _top">
                            <span class="cabinet-course__lessons-check"></span>
                            <div class="cabinet-course__lessons-content">
                                <h3 class="cabinet-course__lessons-title text">Урок 1</h3>
                                <div class="cabinet-course__lessons-text">Название урока таким образом
                                    консультация широким название урока таким консультация образом широким</div>
                            </div>
                        </div>
                        <div class="cabinet-course__lessons-row _bottom">
                            <span class="cabinet-course__lessons-line"></span>
                            <div class="cabinet-course__lessons-label text">Задание к уроку</div>
                        </div>
                    </div>
                    <div class="cabinet-course__lessons-item _edited">
                        <div class="cabinet-course__lessons-row _top _active">
                            <span class="cabinet-course__lessons-check"></span>
                            <div class="cabinet-course__lessons-content">
                                <h3 class="cabinet-course__lessons-title text">Урок 1</h3>
                                <div class="cabinet-course__lessons-text">Название урока таким образом
                                    консультация широким название урока таким консультация образом широким</div>
                            </div>
                        </div>
                        <div class="cabinet-course__lessons-row _bottom">
                            <span class="cabinet-course__lessons-line"></span>
                            <div class="cabinet-course__lessons-label text">Задание к уроку</div>
                        </div>
                    </div>
                </div>

                <a href="#" class="course-create__button-add _module btn-white">Добавить новый модуль</a>
                <a href="#" class="course-create__button-add _test">Добавить финальный тест</a>
                <a href="#" class="course-create__button-save btn-blue _cabinet-btn">Сохранить курс</a>
            </div>
        </div>


        <div class="cabinet-course__content">
            <form action="{{ route('authorLessonStore',['id'=>1]) }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="course-create__row">
                <div class="course-create__label">
                    <span>Название урока</span>
                </div>
                <label class="course-create__input input">
                    <input type="text" placeholder="Введите текст" name="name">
                </label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Статус видимости урока</span>
                </div>
                <label class="course-create__input dropdown">
                    <select name="status">
                        <option value="">Черновик</option>
                        <option value="1">База знаний 1</option>
                        <option value="2">База знаний 2</option>
                        <option value="3">База знаний 3</option>
                        <option value="4">База знаний 4</option>
                    </select>
                </label>
                @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Имя спикера</span>
                </div>
                <label class="course-create__input input">
                    <input type="text" placeholder="Введите имя" name="speaker_name">
                </label>
                @error('speaker_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="course-create__row _small">
                <div class="course-create__label">
                    <span>Краткое информация о спикере</span>
                </div>
                <label class="course-create__input textarea input">
                    <textarea placeholder="Введите текст" name="speaker_desc"></textarea>
                </label>
                @error('speaker_desc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Вид источника</span>
                </div>
                <label class="course-create__input dropdown">
                    <select name="source_type">
                        <option value="YouTube">YouTube</option>
                        <option value="1">База знаний 1</option>
                        <option value="2">База знаний 2</option>
                        <option value="3">База знаний 3</option>
                        <option value="4">База знаний 4</option>
                    </select>
                </label>
                @error('source_type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Ссылка на видео</span>
                </div>
                <label class="course-create__input input">
                    <input type="text" placeholder="Вставьте ссылку" name="video_path">
                </label>
                @error('video_path')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Код для вставки видео</span>
                </div>
                <label class="course-create__input input">
                    <input type="text" placeholder="Вставьте код" name="video_code">
                </label>
                @error('video_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--  -->
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Материалы к уроку</span>
                </div>
                <label class="course-create__input file">
                    <input type="file" name="file">
                    <span>Выберите один или несколько файлов</span>
                </label>
            </div>


            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Инвайт ссылка для <span class="author">автора</span></span>
                </div>
                <label class="course-create__input input link">
                    <input type="text" placeholder="https://123.123/213erere" name="invite_link_author">
                    <a href="#" class="course-create__input-btn _copy"><img src="{{ asset('img/icons/cabinet-course-copy-link.svg') }}" alt="copy"></a>
                    <a href="#" class="course-create__input-btn _reload"><img src="{{ asset('img/icons/cabinet-course-reload-link.svg') }}" alt="reload"></a>
                </label>
            </div>
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Инвайт ссылка для <span class="mentor">наставника</span></span>
                </div>
                <label class="course-create__input input link">
                    <input type="text" placeholder="https://123.123/213erere" name="invite_link_mentor">
                    <a href="#" class="course-create__input-btn _copy"><img src="{{ asset('img/icons/cabinet-course-copy-link.svg') }}" alt="copy"></a>
                    <a href="#" class="course-create__input-btn _reload"><img src="{{ asset('img/icons/cabinet-course-reload-link.svg') }}" alt="reload"></a>
                </label>
            </div>
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Инвайт ссылка для <span class="student">обучающегося</span></span>
                </div>
                <label class="course-create__input input link">
                    <input type="text" placeholder="https://123.123/213erere" name="invite_link_student">
                    <a href="#" class="course-create__input-btn _copy"><img src="{{ asset('img/icons/cabinet-course-copy-link.svg') }}" alt="copy"></a>
                    <a href="#" class="course-create__input-btn _reload"><img src="{{ asset('img/icons/cabinet-course-reload-link.svg') }}" alt="reload"></a>
                </label>
            </div>

            <button  class="btn-blue _cabinet-btn">Сохранить урок</button>

        </div>


        <div class="cabinet-course__sidebar-right" data-da=".cabinet-course__content, 991, 11">
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Дата публикации видео</span>
                </div>
                <label class="course-create__input input">
                    <input type="time" placeholder="Введите дату" name="publish_date_video">
                </label>
                @error('publish_date_video')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Время публикации видео (по МСК)</span>
                </div>
                <label class="course-create__input input">
                    <input type="time" placeholder="ЧЧ:ММ" name="publish_date_video_MSK">
                </label>
                @error('publish_date_video_MSK')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Тип видео</span>
                </div>
                <label class="course-create__input radio">
                    <input type="radio"  name="video_type" value="Запись урока">
                    <span>Запись урока</span>
                </label>
                <label class="course-create__input radio">
                    <input type="radio"  name="video_type" value="Автовебинар(запись вебинара)">
                    <span>Автовебинар(запись вебинара)</span>
                </label>
                <label class="course-create__input radio">
                    <input type="radio"  name="video_type" value="Онлайн вебинар">
                    <span>Онлайн вебинар</span>
                </label>
                @error('video_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="course-create__row">
                <div class="course-create__label">
                    <span>Шаблон сертификата</span>
                </div>
                <label class="course-create__input file _small">
                    <input type="file" name="file_2">
                    <span>Выберите один или несколько файлов</span>
                </label>
            </div>
        </form>
        </div>
    </div>


</main>

@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('._copy').click(function(){
        let a = $(this).parent().parent().find("input");

        navigator.clipboard.writeText(a.val())

        $(this).parent().parent().append('<span class="valid-feedback"><strong>Скопировано</strong></span>')

        setTimeout(() => {
            $('.valid-feedback').remove()
        }, 1000);

    });
    });

    $(document).ready(function(){
        $('._reload').click(function(){
        $(this).parent().parent().find("input").val('');

    });
    });

</script>
@endsection
