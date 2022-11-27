@extends('layouts.app')
@section('title' , 'Элина мебель || Войти')
@section('content')
    <main>
        <section class="page__title p-relative d-flex align-items-center"
                 data-background="assets/img/bg/02-leicht-02.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1 class="text-white">Войти</h1>
                            <div class="page__title-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item text-white-50"><a href="{{route('index')}}">Главная</a></li>
                                        <li class="breadcrumb-item active text-white-50" aria-current="page">Войти</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="signin__area po-rel-z1 pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="sign__wrapper white-bg">
                            <div class="sign__form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Ваш email адрес</h5>
                                        <div class="sign__input">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                                   autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-10">
                                        <h5>Пароль</h5>
                                        <div class="sign__input">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                                   required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                            <i class="fal fa-lock"></i>
                                        </div>
                                    </div>
                                    <div class="sign__action d-sm-flex justify-content-between mb-30">
                                        <div class="sign__agree d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Запомнить меня') }}
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-tp w-100">
                                        {{ __('Войти') }}
                                    </button>
                                    <div class="sign__new text-center mt-20">
                                        <p>Нету аккаунта? <a href="{{ route('register') }}">Зарегистрироваться</a></p>
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
