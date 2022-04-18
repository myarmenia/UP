@extends('profile.user.layouts.app')

@section('title')
Вверх | Личный кабинет | Создать курс - Задания
@endsection

@section('content')
<main class="main create-course cabinet-single-course task">
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
                        <div class="cabinet-course__lessons-row _top">
                            <span class="cabinet-course__lessons-check"></span>
                            <div class="cabinet-course__lessons-content">
                                <h3 class="cabinet-course__lessons-title text">Урок 1</h3>
                                <div class="cabinet-course__lessons-text">Название урока таким образом
                                    консультация широким название урока таким консультация образом широким</div>
                            </div>
                        </div>
                        <div class="cabinet-course__lessons-row _bottom _active">
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


        <div class="cabinet-course__content cabinet-tabs">
            <a href="#" class="cabinet__btn-back">Назад</a>
            <div class="cabinet-tabs__nav">
                <a href="#tab1" class="cabinet-tabs__nav-link _active">Добавить задание</a>
                <a href="#tab2" class="cabinet-tabs__nav-link">Добавить тест</a>
            </div>
            <div class="cabinet-tabs__content">

                <div id="tab1" class="cabinet-tabs__content-inner _active">
                    <form action="{{ route('AuthorTaskStore',['id' =>  5]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="course-create__row">
                        <div class="course-create__label">
                            <span>Название задания</span>
                        </div>
                        <label class="course-create__input input">
                            <input type="text" placeholder="Введите текст" name="name">
                        </label>
                    </div>
                    <div class="course-create__row">
                        <div class="course-create__label">
                            <span>Описание задания</span>
                        </div>
                        <div class="course-create__editor">
                            <!-- тут редактор -->
                            <label class="course-create__input textarea input">
                                <textarea placeholder="Введите текст" name="description"></textarea>
                            </label>
                        </div>
                    </div>
                    <div class="course-create__row">
                        <div class="course-create__label">
                            <span>Материалы к уроку</span>
                        </div>
                        <label class="course-create__input file">
                            <input type="file" name="file">
                            <span>Выберите один или несколько файлов</span>
                        </label>
                    </div>
                    <button class="btn-blue _cabinet-btn">Сохранить задание</button>
                    </form>
                </div>

                <div id="tab2" class="cabinet-tabs__content-inner">
                    <form action="{{ route('authorTestStore',['id'=>1]) }}" method="POST">
                        @csrf
                    <div class="course-create__row-wrap">
                        <div class="course-create__row">
                            <div class="course-create__label">
                                <span>Название теста</span>
                            </div>
                            <label class="course-create__input input">
                                <input type="text" placeholder="Введите текст" name="name">
                            </label>
                        </div>
                        <div class="course-create__row _time">
                            <div class="course-create__label">
                                <span>Ограничения времени на повторную сдачу</span>
                            </div>
                            <label class="course-create__input input">
                                <input type="time" placeholder="ММ:СС" name="time_limit">
                            </label>
                        </div>
                    </div>
                    <div class="course-create__row _big">
                        <div class="course-create__label">
                            <span>Описание теста</span>
                        </div>
                        <label class="course-create__input textarea input">
                            <textarea placeholder="Введите текст" name="description"></textarea>
                        </label>
                    </div>

                    <div class="course-create__test">
                        <div class="course-create__test-item">
                            <div class="course-create__label _number"><span>1</span> Вопрос</div>
                            <div class="course-create__row _small">
                                <label class="course-create__input textarea input">
                                    <textarea placeholder="Введите текст"></textarea>
                                </label>
                            </div>

                            <div class="course-create__row">
                                <div class="course-create__label">
                                    <span>Варианты ответа</span> <span>Правильный ответ</span>
                                </div>
                                <div class="course-create__test-variant">
                                    <label class="course-create__input input">
                                        <input type="text" placeholder="Введите текст">
                                        <a href="#" class="course-create__input-close"></a>
                                    </label>
                                    <label class="course-create__test-checkbox">
                                        <input type="checkbox">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="course-create__test-variant">
                                    <label class="course-create__input input">
                                        <input type="text" placeholder="Введите текст">
                                        <a href="#" class="course-create__input-close"></a>
                                    </label>
                                    <label class="course-create__test-checkbox">
                                        <input type="checkbox">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="course-create__test-variant">
                                    <label class="course-create__input input">
                                        <input type="text" placeholder="Введите текст">
                                        <a href="#" class="course-create__input-close"></a>
                                    </label>
                                    <label class="course-create__test-checkbox">
                                        <input type="checkbox">
                                        <span></span>
                                    </label>
                                </div>

                                <a href="#" class="btn-white">Добавить вариант ответа</a>
                            </div>
                        </div>
                        <div class="course-create__test-bottom">
                            <a href="#" class="btn-white">Добавить вопрос</a>
                            <button class="btn-blue _cabinet-btn">Сохранить тест</button>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>

    </div>


</main>

@endsection
