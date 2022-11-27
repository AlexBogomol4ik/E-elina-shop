@extends('layouts.app')
@section('title' , 'Элина мебель || Зарегистрироваться')
@section('content')
<main>
        <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/Elite-1920x768.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1 class="text-white">Зарегистрироваться</h1>
                            <div class="page__title-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item text-white-50"><a href="{{route('index')}}">Главная</a></li>
                                        <li class="breadcrumb-item active text-white-50" aria-current="page">Зарегистрироваться</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="signup__area po-rel-z1 pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="sign__wrapper white-bg">
                            <div class="sign__form">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Ваше имя</h5>
                                        <div class="sign__input">
                                            <input placeholder="Имя" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                            <i class="fal fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Ваш email адрес</h5>
                                        <div class="sign__input">
                                            <input placeholder="E-mail адрес" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Пароль</h5>
                                        <div class="sign__input">
                                            <input placeholder="Пароль" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                            <i class="fal fa-lock"></i>
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-10">
                                        <h5>Повторите пароль</h5>
                                        <div class="sign__input">
                                            <input placeholder="Подтвердите пароль" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            <i class="fal fa-lock"></i>
                                        </div>
                                    </div>
                                    <button class="btn-tp w-100 mt-15"> <span></span> Зарегистрироваться</button>
                                    <div class="sign__new text-center mt-20">
                                        <p>Уже есть аккаунт? <a href="{{route('login')}}"> Войти</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
