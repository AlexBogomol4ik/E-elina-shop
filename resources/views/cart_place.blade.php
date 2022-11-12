@extends('layouts.master')
@section('title' , 'Элина мебель || Корзина')
@section('content')
<main>
    <section class="page__title p-relative d-flex align-items-center" data-background="/assets/img/bg/page-title-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Your Cart</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Корзина</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cart-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="product-thumbnail">Изображение</th>
                                <th class="cart-product-name">Название</th>
                                <th class="product-price">Ценна</th>
                                <th class="product-quantity">Количество</th>
                                <th class="product-subtotal">Всего</th>
                                <th class="product-remove">Удалить</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->products as $prod_det)
                                <tr>
                                    <td class="product-thumbnail"><a href="product-details.html"><img
                                                src="assets/img/cart/cart-1.jpg" alt=""></a></td>
                                    <td class="product-name"><a href="product-details.html">{{$prod_det->name}}</a>
                                    </td>
                                    <td class="product-price"><span class="amount">{{$prod_det->price}}</span></td>
                                    <td class="product-quantity">
                                        <div>
                                            <form action="{{route('cart-remove', $prod_det)}}" method="POST">
                                                <button type="submit"><i class="fa fa-minus"></i></button>
                                                @csrf
                                            </form>
                                            <h4>{{$prod_det->pivot->count}}</h4>
                                            <form action="{{route('cart-add', $prod_det)}}" method="POST">
                                                <button type="submit"><i class="fa fa-plus"></i></button>
                                                @csrf
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">{{$prod_det->getPriceForCount()}}</span></td>
                                        <td class="product-remove">
                                            <form action="{{route('cart-removeAllRow', $prod_det)}}" method="POST">
                                            <button type="submit"><i class="fa fa-times"></i></button>
                                                @csrf
                                            </form>
                                        </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon2">
                                    <button class="btn-tp-2" name="update_cart" type="submit">Очистить корзину</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-5">
                            <div class="cart-page-total">
                                <h2>Всего: </h2>
                                <ul class="mb-20">
                                    <li>Итог <span>{{$order->getFullPrice()}} рублей</span></li>
                                </ul>
                                <a class="btn-tp-2" href="{{route('cart-checkout')}}">Оформить заказ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart-area end -->

</main>
@endsection
