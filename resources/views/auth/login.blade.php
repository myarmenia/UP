@extends('layouts.app')

@section('title')
Вверх | Вход
@endsection

@section('style')
<link rel="stylesheet" href="">
@endsection

@section('content')
<div class="page _login">
    <main class="main">
       <section class="login _left">
           <div class="container">
               <div class="login__inner">
                   <div class="login__left">
                        <h2 class="login__title title-block">Впервые здесь?</h2>
                        <div class="login__text text">Зарегистрируйтесь на нашем сайте и проходите или создавайте курсы!</div>
                        <a href="{{ route('register') }}" class="btn-white _hover">Зарегистрироваться</a>
                    </div>
                   <div class="login__right">
                        <form action="{{ route('login') }}" class="login__form _login" method="POST">
                            @csrf
                            <h2 class="login__title title-block">Вход в кабинет</h2>
                            <label class="login__input input ">
                                <input type="text" placeholder="E-mail" class="@error('email')is-invalid @enderror" value="{{ old('email') }}" name="email">
                            </label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <p></p>
                            <p></p>

                            <label class="login__input input">
                                <input type="password" placeholder="Пароль" class="@error('password')is-invalid @enderror" name="password">
                                <span class="password-toggle"><img src="img/icons/eye.svg" alt=""></span>
                            </label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="login__btn btn-blue _cabinet-btn">Войти</button>
                            <a href="{{ route('password.request') }}" class="login__link text">Забыли пароль?</a>
                        </form>
                   </div>
               </div>
           </div>
       </section>

    </main>
</div>
@endsection


@section('script')
<script src="{{ asset('js/main.js') }}"></script>
@endsection


