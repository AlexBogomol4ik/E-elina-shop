@extends('layouts.app')
@section('title' , 'Элина мебель || Главная')
@section('content')
    <main>
        @if(session()->has('success'))
            <div id="overlay">
                <div class="popup">
                    <h3>Уведомление</h3>
                    <p>{{session()->get('success')}}</p>
                    <h3 class="fal fa-alarm-clock"></h3>
                    <button class="close" title="Закрыть"
                            onclick="document.getElementById('overlay').style.display='none';"></button>
                </div>
            </div>
        @endif
        <section class="slider__area">
            <div class="slider__active swiper-container">
                <div class="swiper-wrapper">
                    <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg"
                         data-background="assets/img/slider/banner3.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-5">
                                    <div class="slider__content p-relative z-index-11">
                                        <span data-animation="fadeInUp"
                                              data-delay=".3s">Последнее поступление ‘22</span>
                                        <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">
                                            Многообразие вариантов</h3>
                                        <div class="slider__btn" data-animation="fadeInUp" data-delay=".4s">
                                            <a href="{{route('shop')}}" class="slider-btn">Подробнее <i
                                                    class="fal fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg"
                         data-background="assets/img/slider/vmesto-divana.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-5">
                                    <div class="slider__content p-relative z-index-11">
                                        <span data-animation="fadeInUp" data-delay=".3s">Новинки ‘22</span>
                                        <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">
                                            Качественная мебель</h3>
                                        <div class="slider__btn" data-animation="fadeInUp" data-delay=".4s">
                                            <a href="{{route('shop')}}" class="slider-btn">Подробнее <i
                                                    class="fal fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-pagination">
                    <button class="main-slider-button-prev"><i class="fal fa-angle-left"></i></button>
                    <button class="main-slider-button-next"><i class="fal fa-angle-right"></i></button>
                </div>
            </div>
        </section>

        <section class="category__area pt-40 grey-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper section__title-line mb-40">
                            <h3 class="section__title">Популярные категории</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($categories as $cat)
                        <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="category__item mb-30 grey-bg-3">
                                <div class="category__thumb w-img ">
                                    <a href="{{route('shop',$cat->code."=on")}}">
                                        <img style="width: 100%; min-height: 200px;" src="{{Storage::url($cat->image)}}"
                                             alt="">
                                    </a>
                                </div>
                                <div class="category__content text-center">
                                    <h3 class="category__title">
                                        <a href="{{route('shop',$cat->code."=on")}}">{{$cat->name}}</a>
                                    </h3>
                                    <span class="category__quantity"></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="product__area pt-95 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class="product__sale-wrapper">
                            <div class="section__title-wrapper mb-20">
                                <h3 class="section__title-2">Товары со скидкой</h3>
                            </div>
                            <div class="product__sale-slider common-nav owl-carousel">
                                @foreach($product as $prod)
                                    @if($prod->isSalary())
                                        <div class="product__sale-item p-relative">
                                            <div class="product__sale-thumb w-img fix">
                                                <a href="{{route('product-details',$prod)}}">
                                                    <img src="{{Storage::url($prod->firstImage)}}" alt="">
                                                </a>
                                                <div class="product__sale-flash">
                                                    <span>{{$prod->getSalaryPrice()}} %</span>
                                                </div>
                                            </div>
                                            <div class="product__sale-content text-center">
                                            <span class="product__sale-tag">
                                                <a href="#">{{$prod->category->name}}</a>
                                            </span>
                                                <h3 class="product__sale-title">
                                                    <a href="{{route('product-details',$prod)}}">{{$prod->name}}</a>
                                                </h3>
                                                <div class="product__sale-price">
                                                    <span class="price old-price">{{$prod->price}} рублей</span>
                                                    <span class="price new-price">{{$prod->salaryPrice}} рублей</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6">
                        <div class="product__item-wrapper pt-15">
                            <div class="product__top section__title-line d-sm-flex align-items-start mb-35">
                                <div class="section__title-wrapper mr-30">
                                    <h3 class="section__title">Последнее поступление</h3>
                                </div>
                            </div>
                            <div class="product__tab-content">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="new" role="tabpanel"
                                         aria-labelledby="new-tab">
                                        <div class="product__item-slider common-nav owl-carousel">
                                            @foreach($product as $prod)
                                                @if($prod->isNew())
                                                    <div class="product_item-single">
                                                        <div class="product__item mb-20">
                                                            <div class="product__thumb w-img ">
                                                                <a href="{{route('product-details',$prod)}}">
                                                                    <img src="{{Storage::url($prod->firstImage)}}"
                                                                         alt="">
                                                                </a>
                                                                @if($prod->isSalary())
                                                                    <div class="product__sale-flash">
                                                                        <span>{{$prod->getSalaryPrice()}} %</span>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="product__content text-center">
                                                                <div class="product__tag">
                                                                <span>
                                                                    <a>{{$prod->category->name}}</a>
                                                                </span>
                                                                </div>
                                                                <h3 class="product__title">
                                                                    <a>{{$prod->name}}</a>
                                                                </h3>
                                                                @if($prod->isSalary())
                                                                    <div class="product__sale-price">
                                                                        <h6 class="price old-price">{{$prod->price}}
                                                                            рублей</h6>
                                                                        <h6 class="price new-price">{{$prod->salaryPrice}}
                                                                            рублей</h6>
                                                                    </div>
                                                                @else
                                                                    <div class="product__price">
                                                                        <h6 class="price">{{$prod->price}} рублей</h6>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner__area pb-100">
            <div class="container">
                <div class="row gx-0">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="banner__thumb-big w-img">
                            <img src="/assets/img/products/Prodvizhenie_dizaynerskoy_mebeli_v_Instagram.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4" >
                        @foreach($product->take(1) as $prod)
                                <div class="banner__content text-center grey-bg-4">
                                    <div class="banner__top">
                                        <h3 class="banner__title">Популярное</h3>
                                    </div>
                                    <div class="banner__thumb w-img" >
                                        <img src="{{Storage::url($prod->firstImage)}}" alt="">
                                    </div>
                                    <div class="product__tag-2">
                                        <span>
                                            <a href="#">{{$prod->category->name}}</a>
                                        </span>
                                    </div>
                                    <h3 class="product__title-2">
                                        <a href="{{route('product-details',$prod)}}">{{$prod->name}}</a>
                                    </h3>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <section class="features__area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="features__item text-center mb-30 features__item-border">
                            <div class="features__icon">
                                <i class="flaticon-truck"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title">Доставка</h3>
                                <p>Доставка по городу</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="features__item text-center mb-30 features__item-border">
                            <div class="features__icon">
                                <i class="flaticon-credit-card"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title">Оплата</h3>
                                <p>Оплата любым удобным для вас способом</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="features__item text-center mb-30 features__item-border">
                            <div class="features__icon">
                                <i class="flaticon-shopping-cart"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title">Цены</h3>
                                <p>Лучшие цены! Каждый день!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="features__item text-center mb-30">
                            <div class="features__icon">
                                <i class="flaticon-call-center-agent"></i>
                            </div>
                            <div class="features__content">
                                <h3 class="features__title">Бесплатная консультация</h3>
                                <p>+7 (924) 544-71-74</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="product__area-trending pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__item-wrapper">
                            <div class="product__top section__title-line d-sm-flex align-items-start mb-35">
                                <div class="section__title-wrapper mr-30">
                                    <h3 class="section__title">Подборка</h3>
                                </div>
                                <div class="product__tab">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="new-3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#new-3" type="button" role="tab"
                                                    aria-controls="new-3"
                                                    aria-selected="true">Новинки
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="featured-3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#featured-3" type="button" role="tab"
                                                    aria-controls="featured-3" aria-selected="false">Скидки
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="top-3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#top-3" type="button" role="tab"
                                                    aria-controls="top-3"
                                                    aria-selected="false">Популярное
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__tab-content">
                            <div class="tab-content" id="myTab2Content">
                                <div class="tab-pane fade show active" id="new-3" role="tabpanel"
                                     aria-labelledby="new-3-tab">
                                    <div class="product__item-trending-slider common-nav owl-carousel">
                                        @foreach($product as $prod)
                                            @if($prod->isNew())
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="{{route('product-details',$prod)}}">
                                                            <img src="{{Storage::url($prod->firstImage)}}" alt="">
                                                        </a>
                                                        @if($prod->isSalary())
                                                            <div class="product__sale-flash">
                                                                <span>{{$prod->getSalaryPrice()}} %</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="product__tag">
                                                        <span>
                                                            <a href="#">{{$prod->category->name}}</a>
                                                        </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="{{route('product-details',$prod)}}">{{$prod->name}}</a>
                                                        </h3>
                                                        <div class="product__price">
                                                            @if($prod->isSalary())
                                                                <span
                                                                    class="price old-price">{{$prod->price}} рублей</span>
                                                                <span class="price new-price">{{$prod->salaryPrice}} рублей</span>
                                                            @else
                                                                <span class="price">{{$prod->price}} рублей</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="featured-3" role="tabpanel"
                                     aria-labelledby="featured-3-tab">
                                    <div class="product__item-trending-slider common-nav owl-carousel">
                                        @foreach($product as $prod)
                                            @if($prod->isSalary())
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="{{route('product-details',$prod)}}">
                                                            <img src="{{Storage::url($prod->firstImage)}}" alt="">
                                                        </a>
                                                        @if($prod->isSalary())
                                                            <div class="product__sale-flash">
                                                                <span>{{$prod->getSalaryPrice()}} %</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="product__tag">
                                                        <span>
                                                            <a href="#">{{$prod->category->name}}</a>
                                                        </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="{{route('product-details',$prod)}}">{{$prod->name}}</a>
                                                        </h3>
                                                        <div class="product__price">
                                                            @if($prod->isSalary())
                                                                <span
                                                                    class="price old-price">{{$prod->price}} рублей</span>
                                                                <span class="price new-price">{{$prod->salaryPrice}} рублей</span>
                                                            @else
                                                                <span class="price">{{$prod->price}} рублей</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="top-3" role="tabpanel" aria-labelledby="top-3-tab">
                                    <div class="product__item-trending-slider common-nav owl-carousel">
                                        @foreach($product as $prod)
                                            @if($prod->isHit())
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="{{route('product-details',$prod)}}">
                                                            <img src="{{Storage::url($prod->firstImage)}}" alt="">
                                                        </a>
                                                        @if($prod->isSalary())
                                                            <div class="product__sale-flash">
                                                                <span>{{$prod->getSalaryPrice()}} %</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="product__content text-center">
                                                        <div class="product__tag">
                                                        <span>
                                                            <a href="#">{{$prod->category->name}}</a>
                                                        </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="{{route('product-details',$prod)}}">{{$prod->name}}</a>
                                                        </h3>
                                                        <div class="product__price">
                                                            @if($prod->isSalary())
                                                                <span
                                                                    class="price old-price">{{$prod->price}} рублей</span>
                                                                <span class="price new-price">{{$prod->salaryPrice}} рублей</span>
                                                            @else
                                                                <span class="price">{{$prod->price}} рублей</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
