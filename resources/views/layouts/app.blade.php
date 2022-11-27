<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="/assets/css/preloader.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl-carousel.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="/assets/css/backtotop.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="/assets/flaticon/flaticon.css">
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>
<body>
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="first_object"></div>
            <div class="object" id="second_object"></div>
            <div class="object" id="third_object"></div>
        </div>
    </div>
</div>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<header>
    <div class="header__area">
        <div class="header__middle header__border d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-8">
                        <div class="header__social">
                            <ul>
                                <li><a href="tel:1234-5678-90"><i class="fal fa-headphones"></i>  +7 (924) 544-71-74</a>
                                </li>
                                <li><a href="mailto:info@company.com"><i class="fal fa-envelope"></i>
                                        elina.mebel.irkutsk@yandex.ru</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-4 col-md-4">
                        <div class="header__middle-right d-flex align-items-center justify-content-end">
                            <div class="main-menu main-menu-border main-menu-4">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown">
                                            <a>Навигация</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="{{route('about')}}">О нас</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('cart')}}">Корзина</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('cart-checkout') }}">Оформить заказ</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('index') }}">Главная</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop') }}">Каталог</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-6">
                        <div class="logo">
                            <a href="/">
                                <img width="40%" src="/assets/img/logo/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-8 d-none d-lg-block">
                        <div class="category__menu d-flex align-items-center">
                            <div class="category__btn mr-20">
                                <button class="cat-btn" type="button"><i class="far fa-bars"></i>Категории</button>
                                <div class="side-submenu transition-3">
                                    <nav>
                                        <ul>
                                            <li class="has-dropdown">
                                                <a href="{{route('shop')}}">
                                                    <i class="fal fa-all"></i>
                                                    Все
                                                </a>
                                                <ul class="mega-menu">
                                                    @foreach($categories as $cat)
                                                        <li>
                                                            <a href="{{route('shop',$cat->code."=on")}}">{{$cat->name}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @foreach($categories as $cat)
                                                <li class="">
                                                    <a href="{{route('shop',$cat->code."=on")}}">
                                                        <i class="fal {{$cat->fa_code}}"></i>
                                                        {{$cat->name}}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <nav>
                                <ul>
                                    @foreach($categories as $cat)
                                        <li>
                                            <a href="{{route('shop',$cat->code."=on")}}">{{$cat->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-1 col-6">
                        <div class="header__bottom-right-wrapper d-flex justify-content-end align-items-center">
                            <div class="header__bottom-right d-none d-xl-flex align-items-center justify-content-end">
                                <div class="header__search">
                                    <form action="{{route('search')}}" method="POST">
                                        <div class="header__search-input">
                                                <input name="name" class="form-control" id="search_product" type="text" placeholder="Поиск...">
                                                <button type="submit"><i class="far fa-search"></i></button>
                                                @csrf
                                        </div>
                                    </form>
                                </div>
                                <div class="header__action ml-30">
                                    <ul>
                                        @guest
                                            @if (Route::has('login'))
                                                <li>
                                                    <a href="{{route('login')}}"><i class="fal fa-user-circle"></i></a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="" class="dropdown-toggle" style="font-size: 16px" href="#"
                                                   role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end"
                                                     aria-labelledby="navbarDropdown">
                                                    @if(Auth::user()->role_as == 1)
                                                        <a class="dropdown-item" style="font-size: 16px"
                                                           href="{{ route('admin') }}">
                                                            Панель администратора
                                                        </a>
                                                    @endif
                                                    <a class="dropdown-item" style="font-size: 16px"
                                                       href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Выйти') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                          class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                        @endguest
                                        <li>
                                            <a href="{{ route('cart') }}">
                                                <i href="{{ route('cart') }}" class="fal fa-shopping-basket"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-bar ml-20 d-xl-none">
                                <button type="button" class="header-bar-btn" data-bs-toggle="modal"
                                        data-bs-target="#offCanvasModal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="body-overlay"></div>

<section class="offcanvas__area">
    <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                        <div class="logo">
                            <a href="/">
                                <img width="75%" src="/assets/img/logo/logo1.png" alt="logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button class="offcanvas__close-btn" data-bs-dismiss="modal"
                                    data-bs-target="#offCanvasModal">
                                <svg viewBox="0 0 22 22">
                                    <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                                            s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                                            C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="sidebar__search mb-25">
                        <form action="{{route('search')}}" method="POST">
                            <input name="name" class="form-control" id="search_product" type="text" placeholder="Поиск...">
                            <button type="submit"><i class="far fa-search"></i></button>
                            @csrf
                        </form>
                    </div>
                    <div class="offcanvas__content p-relative z-index-1">
                        <div class="canvas__menu">
                            <div class="mobile-menu fix"></div>
                        </div>
                        <div class="offcanvas__action mt-40 mb-15">
                            @guest
                                @if (Route::has('login'))
                                    <li>
                                        <a href="{{route('login')}}">Войти</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="" class="dropdown-toggle" style="font-size: 16px" href="#" role="button"
                                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        @if(Auth::user()->role_as == 1)
                                            <a class="dropdown-item" style="font-size: 16px"
                                               href="{{ route('admin') }}">
                                                Панель администратора
                                            </a>
                                        @endif
                                        <a class="dropdown-item" style="font-size: 16px" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Выйти') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    @endguest
                                    <a href="{{ route('cart') }}" class="has-tag">
                                        <i class="far fa-shopping-bag"></i>
                                    </a>
                        </div>
                        <div class="offcanvas__social mt-15">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-vk"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('content')
<footer>
    <div class="footer__area footer-bg">
        <div class="footer__top footer__top-space pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="footer__widget pb-30">
                            <h3 class="footer__widget-title footer__widget-title-3">Свяжитесь с нами</h3>
                            <div class="footer__widget-content">
                                <div class="footer__contact">
                                    <h3 class="footer__contact-phone"><a href="tel:1234-5678-90"> +7 (924) 544-71-74</a>
                                    </h3>
                                    <div class="footer__opening mb-15">
                                        <p>Понедельник - Суббота: 10:00-20:00</p>
                                        <p>Воскресенье: 10:00-20:00</p>
                                    </div>
                                    <div class="footer__contact-email footer__contact-email-2">
                                        <p><a href="mailto:balckwood@support.com">elina.mebel.irkutsk@yandex.ru</a></p>
                                    </div>
                                    <div class="footer__social footer__social-3">
                                        <ul>
                                            <li>
                                                <a href="https://vk.com/public216293577">
                                                    <i class="fab fa-vk"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="footer__widget footer-col-3 pb-30">
                            <h3 class="footer__widget-title footer__widget-title-3">Навигация</h3>
                            <div class="footer__widget-content">
                                <div class="footer__links footer__links-2">
                                    <ul>
                                        <li>
                                            <a href="{{route('index')}}">Главная</a>
                                        </li>
                                        <li>
                                            <a href="{{route('shop')}}">Каталог</a>
                                        </li>
                                        <li>
                                            <a href="{{route('about')}}">О нас</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('cart-checkout') }}">Оформить заказ</a>
                                        </li>
                                        <li>
                                            <a href="{{route('cart')}}">Корзина</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="footer__widget footer-col-4 pb-30">
                            <h3 class="footer__widget-title footer__widget-title-3">Сообщества</h3>
                            <div class="footer__widget-content">
                                <div class="footer__links footer__links-2">
                                    <ul>
                                        <li>
                                            <a href="https://vk.com/public216293577">Вконтакте</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="footer__widget footer-col-5 pb-30">
                            <h3 class="footer__widget-title footer__widget-title-3">Помощь</h3>
                            <div class="footer__widget-content">
                                <div class="footer__links footer__links-2">
                                    <ul>
                                        <li>
                                            <a href="{{route('about')}}">FAQ</a>
                                        </li>
                                        <li>
                                            <a>+7 (924) 544-71-74</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__offer">
            <div class="container">
                <div class="footer__offer-inner footer__offer-inner-2">
                    <div class="row align-items-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="footer__bottom-wrapper text-center">
                            <div class="footer__copyright">
                                <p>Copyright ©2022 <a href="{{route('index')}}">e-elina-mebel.ru</a> Все права защищены</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/assets/js/vendor/jquery.js"></script>
<script src="/assets/js/vendor/waypoints.js"></script>
<script src="/assets/js/bootstrap-bundle.js"></script>
<script src="/assets/js/meanmenu.js"></script>
<script src="/assets/js/swiper-bundle.js"></script>
<script src="/assets/js/owl-carousel.js"></script>
<script src="/assets/js/jquery-ui-slider-range.js"></script>
<script src="/assets/js/magnific-popup.js"></script>
<script src="/assets/js/parallax.js"></script>
<script src="/assets/js/backtotop.js"></script>
<script src="/assets/js/nice-select.js"></script>
<script src="/assets/js/counterup.js"></script>
<script src="/assets/js/countdown.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/isotope-pkgd.js"></script>
<script src="/assets/js/imagesloaded-pkgd.js"></script>
<script src="/assets/js/ajax-form.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="/assets/js/magnific-popup.js"></script>
<script>

    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "/product/list",

        success: function(response){
            startAutoComplete(response)
        }
    })
    function startAutoComplete(availableTags){
        $("#search_product").autocomplete({
            source: availableTags
        });
    }

</script>
<script type="text/javascript">
    var delay_popup = 10;
    setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
</script>
</body>
</html>




