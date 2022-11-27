@extends('layouts.app')
@section('title' , 'Элина мебель || Каталог')
@section('content')
<main>
    <section class="page__title p-relative d-flex align-items-center" data-background="/assets/img/slider/Laminat_Loft_4V_Italienischer_Nussbaum_535372_Int01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1 class="text-white">Каталог</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item text-white-50"><a href="{{route('index')}}">Главная</a></li>
                                    <li class="breadcrumb-item active text-white-50" aria-current="page">Каталог</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-details pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-4">
                    <form action="{{route('shop')}}" method="GET">
                    <div class="pproduct-sidebar-area mr-60">
                        <div class="product-widget mb-30">
                            <h5 class="pt-title mb-20">Категории</h5>
                            <div class="widget-category-list">

                                    @foreach($categories as $cat)
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="{{$cat->code}}" name="{{$cat->code}}" @if(request()->has($cat->code))checked @endif>
                                        <label for="{{$cat->code}}">{{$cat->name}} <span>({{$cat->products->count()}})</span></label>
                                    </div>
                                    @endforeach
                            </div>
                        </div>
                        <div class="product-widget mb-30">
                            <div class="single-widget">
                                <h5 class="pt-title pb-20">Сортировать по цене</h5>
                                    <div class="ui-price-slider">
                                        <div class="slider-range">
                                            <div id="slider-range"
                                                 class="mb-20 ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                                <span tabindex="0"
                                                      class="ui-slider-handle ui-corner-all ui-state-default"></span><span
                                                    tabindex="0"
                                                    class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <p>
                                                        <label for="amount">От и до :</label>
                                                        <input name="price" type="text" id="amount" readonly="" value="{{request()->price}}">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <button class="wood-cart-btn">Сортировать</button>
                        </div>
                    </div>

                </form>
                </div>
                <div class="col-xxl-9 col-xl-8">
                    <div class="shop-top-area mb-20">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-2 col-md-3 col-sm-3">
                                <div class="shop-top-left">
                                    <span class="label mr-15">Вариант отображения:</span>
                                    <div class="nav d-inline-block tab-btn-group" id="nav-tab" role="tablist">
                                        <button class="active" data-bs-toggle="tab" data-bs-target="#tab1"
                                                type="button"><i class="fas fa-border-none"></i></button>
                                        <button data-bs-toggle="tab" data-bs-target="#tab2" type="button" class=""><i
                                                class="fas fa-list"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-main-area mb-40">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="tab1">
                                <div class="row">
                                    @foreach($products as $prod_det)
                                            <form class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="{{route('product-details',$prod_det)}}">
                                                            <img src="{{Storage::url($prod_det->firstImage)}}"
                                                                 alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            @if($prod_det->isSalary())
                                                                <span>{{$prod_det->getSalaryPrice()}} %</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <h3 class="product__title">
                                                            <a href="{{route('product-details',$prod_det)}}">{{$prod_det->name}}</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            @if($prod_det->isSalary())
                                                                <h6 class="price old-price">{{$prod_det->price}} рублей</h6>
                                                                <h6 class="price new-price">{{$prod_det->salaryPrice}} рублей</h6>
                                                            @else
                                                                <h6 class="price">{{$prod_det->price}} рублей</h6>
                                                            @endif
                                                        </div>
                                                        <div  class="product__select-button">
                                                            <a href="{{route('product-details',$prod_det)}}" class="select-btn w-100">Подробнее</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="row">
                                    <div class="productwrap">

                                        @foreach($products as $prod_det)
                                        <div class="single-product mb-30 wood-list-product-wrap">
                                            <div class="row align-items-xl-center">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="product-thumb mr-30 product-thumb-list w-img">
                                                        <img src="{{Storage::url($prod_det->firstImage)}}">
                                                        <div class="product__flash-4">
                                                            @if($prod_det->isSalary())
                                                                <span>{{$prod_det->getSalaryPrice()}} %</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                                                    <div class="wood-product-content wood-product-list-content">
                                                        <h4 class="pro-title pro-title-1"><a
                                                                href="{{route('product-details',$prod_det)}}">{{$prod_det->name}}</a></h4>
                                                        <div class="pro-price product__price">
                                                            @if($prod_det->isSalary())
                                                                <span class="price old-price">{{$prod_det->price}} рублей</span>
                                                                <span class="price new-price">{{$prod_det->salaryPrice}} рублей</span>
                                                            @else
                                                                <span class="price">{{$prod_det->price}} рублей</span>
                                                            @endif
                                                        </div>
                                                        <p>{{$prod_det->description}}</p>
                                                        <form action="{{route('cart-add', $prod_det)}}" method="POST">
                                                            @csrf
                                                            <div class="wood-shop-product-actions">
                                                                <button type="submit" class="wood-cart-btn">В корзину</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-pagination">
                        <div>
                            {{$products->links('vendor.pagination.bootstrap-5')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
