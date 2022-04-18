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
                                <select name="role" class="@error('name')is-invalid @enderror" >
                                    <option selected value="" disabled>Выберите ученика</option>
                                    <option value="CourseAuthor">автор курса</option>
                                    {{-- <option value="">Категория №2</option>
                                    <option value="">Категория №3</option> --}}
                                </select>
                            </label>
                            @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="login__row">
                                <span class="text">Ваша фотография</span>
                                <div class="login__col _photo">
                                    <label class="login__photo">
                                        <input type="file" name="avatar">
                                        <span></span>
                                    </label>
                                </div>
                                <div class="login__col">
                                    <label class="login__input input mb-0">
                                        <input type="text" placeholder="ФИО" name="name" class="@error('name')is-invalid @enderror" id="nametext" value="{{ old('name') }}">
                                    </label>
                                    @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                    <label class="login__input input mb-0">
                                        <input type="text" placeholder="E-mail" name="email" class="@error('email')is-invalid @enderror" value="{{ old('email') }}">
                                    </label>
                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                    <label class="login__input input mb-0">
                                        <input type="password" placeholder="Пароль" name="password" class="@error('password')is-invalid @enderror" >
                                    </label>
                                    @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>


                            <label class="login__input input mb-0">
                                <textarea placeholder="Расскажите о себе или своем проекте" name="description" class="@error('description')is-invalid @enderror" >{{ old('description') }}</textarea>
                            </label>
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror


                            <label class="login__dropdown dropdown">
                                <select name="criterion">
                                    <option selected value="">Выбор критерия для подбора наставника</option>
                                    <option value="Категория №1">Категория №1</option>
                                    <option value="Категория №2">Категория №2</option>
                                    <option value="Категория №3">Категория №3</option>
                                </select>
                            </label>

                            <label class="login__checkbox">
                                <input type="checkbox" name="personal_data" class="checkboxes @error('t')is-invalid @enderror" value="{{ old('personal_data') }}">
                                <span>Согласен(а) на обработку <a href="#">персональных данных</a></span>

                            </label>
                            @error('personal_data')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="login__checkbox">
                                <input type="checkbox" name="user_agreement" class="checkboxes @error('t')is-invalid @enderror" value="{{ old('user_agreement') }}">
                                <span>Я принимаю условия <a href="#">пользовательского соглашения</a></span>
                            </label>
                            @error('user_agreement')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


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
<script src="js/checkebox.js"></script>
@endsection

