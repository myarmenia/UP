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
                            <input type="text" placeholder="Введите текст" name="name" @error('name')is-invalid @enderror value="{{ old('name') ?? null }}">
                        </label>
                    </div>
                    <div class="course-create__row">
                        <div class="course-create__label">
                            <span>Описание задания</span>
                        </div>
                        <div class="course-create__editor">
                            <!-- тут редактор -->
                            <label class="course-create__input textarea input">
                                <textarea placeholder="Введите текст" name="description" @error('description')is-invalid @enderror>
                                   {{ old('description') ?? null }}
                                </textarea>
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
                    <form action="{{ route('authorTestStore',['id'=>5]) }}" method="POST">
                        @csrf
                    <div class="course-create__row-wrap">
                        <div class="course-create__row">
                            <div class="course-create__label">
                                <span>Название теста</span>
                            </div>
                            <label class="course-create__input input">
                                <input type="text" placeholder="Введите текст" name="name" @error('name')is-invalid @enderror>
                            </label>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="course-create__row _time">
                            <div class="course-create__label">
                                <span>Ограничения времени на повторную сдачу</span>
                            </div>
                            <label class="course-create__input input">
                                <input type="time" placeholder="ММ:СС" name="time_limit" value="{{ old('time_limit') ?? null }}">
                            </label>
                            @error('time_limit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="course-create__row _big">
                        <div class="course-create__label">
                            <span>Описание теста</span>
                        </div>
                        <label class="course-create__input textarea input">
                            <textarea placeholder="Введите текст" name="description"></textarea>
                        </label>
                        @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                    <div class="answ_quests">
                        <div class="course-create__test">
                            <div class="course-create__test-item">
                                <div class="course-create__label _number"><span>1</span> Вопрос</div>
                                <div class="course-create__row _small">
                                    <label class="course-create__input textarea input">
                                        <textarea placeholder="Введите текст" name="q_name[0]"></textarea>
                                    </label>
                                </div>

                                <div class="course-create__row answer_0">
                                    <div class="course-create__label">
                                        <span>Варианты ответа</span> <span>Правильный ответ</span>
                                    </div>
                                    <div class="course-create__test-variant">
                                        <label class="course-create__input input">
                                            <input type="text" placeholder="Введите текст" name="a_name[01]">
                                            <button type="button" onclick="removeAnswer(this)" class="course-create__input-close"></button>
                                        </label>
                                        <label class="course-create__test-checkbox">
                                            <input type="checkbox" name="a_status[01]">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="course-create__test-variant">
                                        <label class="course-create__input input">
                                            <input type="text" placeholder="Введите текст" name="a_name[02]">
                                            <button type="button" onclick="removeAnswer(this)" class="course-create__input-close"></button>
                                        </label>
                                        <label class="course-create__test-checkbox">
                                            <input type="checkbox" name="a_status[02]">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="course-create__test-variant">
                                        <label class="course-create__input input">
                                            <input type="text" placeholder="Введите текст" name="a_name[03]">
                                            <button type="button" onclick="removeAnswer(this)" class="course-create__input-close"></button>
                                        </label>
                                        <label class="course-create__test-checkbox">
                                            <input type="checkbox" name="a_status[03]">
                                            <span></span>
                                        </label>
                                    </div>

                                </div>
                                <button type="button" class="btn-white" onclick="addAnswer(0)">
                                    Добавить вариант ответа
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="course-create__test-bottom">
                        <button type="button" class="btn-white" onclick="addQuest()">Добавить вопрос</button>
                        <button class="btn-blue _cabinet-btn">Сохранить тест</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>

    </div>


</main>

@endsection

@section('script')

<script>

    function removeAnswer(t)
    {
        t.parentNode.parentNode.remove()
    }
    function addAnswer(x)
    {
        let matched = $(".answer_0 .course-create__test-variant");
        let count  = x.toString() + ++matched.length
        $('.answer_' + x).append(`<div class="course-create__test-variant">
                                        <label class="course-create__input input">
                                            <input type="text" placeholder="Введите текст" name="a_name[${count}]">
                                            <button type="button" onclick="removeAnswer(this)" class="course-create__input-close"></button>
                                        </label>
                                        <label class="course-create__test-checkbox">
                                            <input type="checkbox" name="a_status[${count}]">
                                            <span></span>
                                        </label>
                                    </div>`)
    }

    function addQuest()
    {
        let count = $('.answ_quests .course-create__test').length
        $('.answ_quests').append(`<div class="course-create__test">
                            <div class="course-create__test-item">
                                <div class="course-create__label _number"><span>${++count}</span> Вопрос</div>
                                <div class="course-create__row _small">
                                    <label class="course-create__input textarea input">
                                        <textarea placeholder="Введите текст" name="q_name[${count}]"></textarea>
                                    </label>
                                </div>

                                <div class="course-create__row answer_${count}">
                                    <div class="course-create__label">
                                        <span>Варианты ответа</span> <span>Правильный ответ</span>
                                    </div>
                                    <div class="course-create__test-variant">
                                        <label class="course-create__input input">
                                            <input type="text" placeholder="Введите текст" name="a_name[${count + count.toString()}]">
                                            <button type="button" onclick="removeAnswer(this)" class="course-create__input-close"></button>
                                        </label>
                                        <label class="course-create__test-checkbox">
                                            <input type="checkbox" name="a_status[${count + count.toString()}]">
                                            <span></span>
                                        </label>
                                    </div>

                                </div>
                                <button type="button" class="btn-white" onclick="addAnswer(${count})">
                                    Добавить вариант ответа
                                </button>
                            </div>
                        </div>`)

    }
</script>
@endsection
