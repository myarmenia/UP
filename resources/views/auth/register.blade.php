@extends('layouts.app')

@section('title')
Вверх | Регистрация
@endsection

@section('style')
<link rel="stylesheet" href="">
@endsection

@section('content')
<div class="page _register">

    <main class="main register">
        <section class="login _right">
            <div class="container">
                <div class="login__inner">
                    <div class="login__left">
                        <form action="{{ route('register') }}" class="login__form _register" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h2 class="login__title title-block">Регистрация</h2>
                            <label class="login__dropdown dropdown">
                                <span class="text">Зарегистрироваться как</span>
                                <select name="role">
                                    <option selected value="" disabled>Выберите ученика</option>
                                    <option value="CourseAuthor">автор курса</option>
                                    {{-- <option value="">Категория №2</option>
                                    <option value="">Категория №3</option> --}}
                                </select>
                            </label>



                            <div class="login__row">
                                <span class="text">Ваша фотография</span>
                                <div class="login__col _photo">
                                    <label class="login__photo">
                                        <input type="file" name="avatar">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="login__col">
                                    <label class="login__input input">
                                        <input type="text" placeholder="ФИО" name="name">
                                    </label>
                                    <label class="login__input input">
                                        <input type="text" placeholder="E-mail" name="email">
                                    </label>
                                    <label class="login__input input">
                                        <input type="password" placeholder="Пароль" name="password">
                                    </label>
                                </div>
                            </div>


                            <label class="login__input input">
                                <textarea placeholder="Расскажите о себе или своем проекте" name="description"></textarea>
                            </label>


                            <label class="login__dropdown dropdown">
                                <select>
                                    <option selected value="">Выбор критерия для подбора наставника</option>
                                    <option value="">Категория №1</option>
                                    <option value="">Категория №2</option>
                                    <option value="">Категория №3</option>
                                </select>
                            </label>

                            <label class="login__checkbox">
                                <input type="checkbox">
                                <span>Согласен(а) на обработку <a href="#">персональных данных</a></span>
                            </label>
                            <label class="login__checkbox">
                                <input type="checkbox">
                                <span>Я принимаю условия <a href="#">пользовательского соглашения</a></span>
                            </label>


                            <button type="submit" class="login__btn btn-blue _cabinet-btn">Зарегистрироваться</button>
                        </form>
                    </div>
                    <div class="login__right">
                        <h2 class="title-block login-subtitle">Если у  вас уже есть зарегистрированный аккаунт, просто войдите в него.</h2>
                        <a href="{{ route('login') }}" class="btn-white _hover">Войти</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection


@section('script')
<script src="js/main.js"></script>
@endsection

