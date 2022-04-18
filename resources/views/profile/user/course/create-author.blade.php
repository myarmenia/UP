@extends('profile.user.layouts.app')

@section('title')
Вверх | Личный кабинет | Создать курс
@endsection

@section('content')

<main class="main">
    <div class="cabinet__header">
        <form action="{{ route('authorStore',['id' =>1]) }}" method="POST" enctype="multipart/form-data">
         @csrf
            <!-- Бургер кнопка -->
         <div class="burger__menu _open">
             <img src="img/icons/header-menu-open.svg" alt="menu-open">
         </div>
         <!-- Бургер кнопка - END -->
         <div class="intro__logo"><img src="img/logo-cabinet.png" alt="logo"></div>
     </div>
     <h2 class="cabinet__title title-block"></h2>

     <div class="course-create__body">
        @extends('message')
         <div class="course-create__left">
             <div class="course-create__cover">
                 <div class="course-create__cover-image"><img src="img/courses-slider-img.jpg" alt="image"></div>
                 <label class="course-create__cover-file">
                     <input type="file" name="file">
                     <span class="text">Выберите файл для загрузки или перетащите его в этот блок</span>
                 </label>
             </div>
         </div>
         <div class="course-create__right">

         </div>
     </div>
     <div class="course-create__body">
         <div class="course-create__left">
             <div class="course-create__row">
                 <div class="course-create__label">
                     <span>Название курса</span>
                     <div class="course-create__characters">Осталось <span>70</span> символов</div>
                 </div>
                 <label class="course-create__input input">
                     <input type="text" placeholder="Введите текст" name="name" value="{{ old('name') ?? null }}">
                 </label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
             <div class="course-create__row">
                 <div class="course-create__label">
                     <span>Категория курса</span>
                 </div>
                 <label class="course-create__input dropdown">
                     <select name="category_name">
                         <option value="" selected disabled>База знаний</option>
                         <option value="1">База знаний 1</option>
                         <option value="2">База знаний 2</option>
                         <option value="3">База знаний 3</option>
                         <option value="4">База знаний 4</option>
                     </select>
                 </label>
                 @error('category_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
             <div class="course-create__row">
                 <div class="course-create__label">
                     <span>Название модуля</span>
                 </div>
                 <label class="course-create__input input">
                     <input type="text" placeholder="Введите текст" name="module_name" value="{{ old('module_name') ?? null }}">
                 </label>
                 @error('module_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
             <div class="course-create__row _small">
                 <div class="course-create__label">
                     <span>Краткое описание курса</span>
                     <div class="course-create__characters">Осталось <span>284</span> символов</div>
                 </div>
                 <label class="course-create__input textarea input">
                     <textarea placeholder="Введите текст" name="description">
                        {{ old('description') ?? null }}
                     </textarea>
                 </label>
                 @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
             <div class="course-create__row _big">
                 <div class="course-create__label">
                     <span>Развернутое описание курса</span>
                     <div class="course-create__characters">Осталось <span>770</span> символов</div>
                 </div>
                 <label class="course-create__input textarea input">
                     <textarea placeholder="Введите текст" name="extended_desc"></textarea>
                 </label>
                 @error('extended_desc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>

             <button  class="btn-blue _cabinet-btn">Сохранить курс</button>
         </div>
         <div class="course-create__right">
             <div class="course-create__row">
                 <div class="course-create__label">
                     <span>Имя автора</span>
                 </div>
                 <label class="course-create__input input">
                     <input type="text" placeholder="Введите текст">
                 </label>
             </div>
             <div class="course-create__row _about-author">
                 <div class="course-create__label">
                     <span>Информация об авторе</span>
                     <div class="course-create__characters">Осталось <span>770</span> символов</div>
                 </div>
                 <label class="course-create__input textarea input">
                     <textarea placeholder="Введите текст"></textarea>
                 </label>
             </div>
         </div>
        </form>
     </div>
 </main>
@endsection


