@extends('layouts.app')
@section('title' , 'Элина мебель || Оформить заказ')
@section('content')
<main>
    <section class="page__title p-relative d-flex align-items-center" data-background="/assets/img/slider/dfa63f_e82405b76a404ceeab16280bbfbc7291.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1 class="text-white">Оформить заказ</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item text-white-50"><a href="{{route('index')}}">Главная</a></li>
                                    <li class="breadcrumb-item active text-white-50" aria-current="page">Оформить заказ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="coupon-area pt-120 pb-30">
    </section>
    <section class="checkout-area pb-85">
        <div class="container">
            <form action="{{route('checkout-confirm')}}" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkbox-form">
                            <h3>Введите ваши данные</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Имя <span class="required">*</span></label>
                                        <input name="name" type="text" placeholder="" class="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Фамилия <span class="required">*</span></label>
                                        <input name="firstName" type="text" placeholder="" class="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Отчество</label>
                                        <input name="secondName" type="text" placeholder="" class="required">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email адрес <span class="required">*</span></label>
                                        <input name="email" type="email" placeholder="" class="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Телефон <span class="required">*</span></label>
                                        <input name="phone" type="text" placeholder="" class="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="your-order mb-30 ">
                            <h3>Ваш заказ</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="product-name">Товары</th>
                                        <th class="product-total">Цена</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($order->productPivot as $prod_det)
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            {{$prod_det->name}} <strong class="product-quantity"> × {{$prod_det->pivot->count}}</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">{{$prod_det->getPriceForCount()}}рублей</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Товаров на сумму:</th>
                                        <td><span class="amount">{{$order->getFullPrice()}} рублей</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Всего: </th>
                                        <td><strong><span class="amount">{{$order->getFullPrice()}} рублей</span></strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="payment-method">
                                <div class="order-button-payment mt-20">
                                    <button type="submit" class="btn-tp">Оформить заказ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </section>
</main>

@endsection
