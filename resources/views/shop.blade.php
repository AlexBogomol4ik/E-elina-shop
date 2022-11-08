@section('title' , 'Элина мебель || Каталог')
@include('defualt_heder');
<main>
    <section class="shop-details pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-4">
                    <div class="pproduct-sidebar-area mr-60">
                        <div class="product-widget mb-30">
                            <h5 class="pt-title mb-20">Категории товаров</h5>
                            <div class="widget-category-list">
                                <form action="#">

                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-1" name="cat-item">
                                        <label for="cat-item-1">Clothing &amp; Apparel <span>(12)</span></label>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="product-widget mb-30">
                            <div class="single-widget">
                                <h5 class="pt-title pb-20">Сортировать по цене</h5>
                                <form action="#">


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
                                                        <input type="text" id="amount" readonly="">
                                                    </p>
                                                </div>
                                                <div class="col-3">
                                                    <div class="text-end">
                                                        <a href="#" class="sm-filter-title">Ок</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                        <div class="product-widget mb-30">
                            <div class="single-widget">
                                <h5 class="pt-title mb-20">Сортировать по цвету</h5>
                                <div class="widget-color-list widget-color-box scroll-box-default">
                                    <form action="#">


                                        <div class="single-widget-category">
                                            <input type="checkbox" id="color-item-1" name="cat-item">
                                            <label for="color-item-1" class="color-black-bg">Black
                                                <span>(12)</span></label>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8">
                    <div class="shop-top-area mb-20">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-2 col-md-3 col-sm-3">
                                <div class="shop-top-left">
                                    <span class="label mr-15">Формат отображения:</span>
                                    <div class="nav d-inline-block tab-btn-group" id="nav-tab" role="tablist">
                                        <button class="active" data-bs-toggle="tab" data-bs-target="#tab1"
                                                type="button"><i class="fas fa-border-none"></i></button>
                                        <button data-bs-toggle="tab" data-bs-target="#tab2" type="button" class=""><i
                                                class="fas fa-list"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-md-6 col-sm-6">
                                <p class="show-total-result text-sm-center">Всего товаров: {{$product->count()}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="shop-main-area mb-40">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="tab1">
                                <div class="row">

                                    @foreach($product as $prod_det)
                                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                            <div class="product__item mb-20">
                                                <div class="product__thumb w-img fix">
                                                    <a href="product-details.html">
                                                        <img src="/assets/img/products/product-2/product-1.jpg"
                                                             alt="">
                                                    </a>
                                                    <div class="product__flash-4">
                                                        <span>20%</span>
                                                    </div>
                                                    <div class="product__action transition-3">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void({{$prod_det->id}})"
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#productModalId">
                                                                    <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"></path>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">{{$prod_det->product_category()->name}}</a>
                                                            </span>
                                                    </div>
                                                    <h3 class="product__title">
                                                        <a href="product-details.html">{{$prod_det->name}}</a>
                                                    </h3>
                                                    <div class="product__price product__price-4 mb-10">
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                    <div class="product__select-button">
                                                        <button type="submit" role="button" class="select-btn w-100">
                                                            Подробнее
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="row">
                                    <div class="productwrap">

                                        @foreach($product as $prod_det)
                                            <form action="{{route('cart-add', $prod_det)}}" method="post">
                                                <div class="single-product mb-30 wood-list-product-wrap">
                                                    <div class="row align-items-xl-center">
                                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                            <div class="product-thumb mr-30 product-thumb-list w-img">
                                                                <img src="assets/img/products/2/product-2.jpg" alt="#">
                                                                <img src="assets/img/products/2/product-6.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                                                            <div class="wood-product-content wood-product-list-content">
                                                                <h4 class="pro-title pro-title-1"><a
                                                                        href="product-details.html">{{$prod_det->name}}</a>
                                                                </h4>
                                                                <div class="pro-price">
                                                                    <span>Цена: {{$prod_det->price}} рублей</span>
                                                                </div>
                                                                <p>{{$prod_det->description}}</p>
                                                                <div class="wood-shop-product-actions">
                                                                    <button type="submit" href="cart.html" class="wood-cart-btn">В корзину</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @csrf
                                            </form>
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
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product__modal" role="document">
            <div class="modal-content">
                <div class="product__modal-wrapper p-relative">
                    <div class="product__modal-close p-absolute">
                        <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="product__modal-inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-box">
                                    <div class="tab-content" id="modalTabContent">

                                        <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                             aria-labelledby="nav1-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-1.jpg" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <ul class="nav nav-tabs" id="modalTab" role="tablist">


                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1"
                                                    aria-selected="true">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-1.jpg" alt="">
                                            </button>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4 class="product__modal-title"><a
                                            href="product-details.html">{{$prod_det->name}}</a></h4>
                                    <div class="product__modal-des mb-40">
                                        <p>{{$prod_det->id}} </p>
                                    </div>
                                    <div class="product__modal-stock">
                                        <span>Наличие :</span>
                                        <span>{{$prod_det->count}}</span>
                                    </div>
                                    <div class="product__modal-stock sku mb-30">
                                        <span>SKU:</span>
                                        <span>Samsung C49J89: £875, Debenhams Plus</span>
                                    </div>
                                    <div class="product__modal-price">
                                        <span>Цена: {{$prod_det->price}}</span>
                                    </div>
                                    <div class="product__modal-form mb-30">
                                        <form action="{{route('cart-add',$prod_det->id)}}" method="post">
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text"
                                                                                                   value="1"/></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <button type="submit" class="add-to-cart-btn">В корзину</button>
                                                </div>
                                            </div>
                                            @csrf
                                        </form>

                                    </div>
                                    <div class="product__modal-links">
                                        <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                            </li>
                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('defualt_footer');
