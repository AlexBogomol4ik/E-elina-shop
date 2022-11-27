@extends('layouts.app')
@section('title' , 'Элина мебель ||  ' . $product_id->name)
@section('content')
    <main>
        <!-- page__title-start -->
        <section class="page__title p-relative d-flex align-items-center"
                 data-background="/assets/img/slider/haro-parquet-wood-flooringall-you-need-to-know-about-the-construction-and-warranty-of-haro-3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1 class="text-white">{{$product_id->name}}</h1>
                            <div class="page__title-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item text-white-50"><a href="#">Главная</a></li>
                                        <li class="breadcrumb-item active text-white-50" aria-current="page">{{$product_id->name}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-details pt-90 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="product__modal-box d-flex">
                            <div class="product__modal-nav mr-20">
                                <nav>
                                    <div class="nav nav-tabs" id="product-details" role="tablist">
                                        @if(!$product_id->firstImage == 0)
                                            <a class="nav-item nav-link active" id="pro-one-tab" data-bs-toggle="tab"
                                               href="#pro-one" role="tab" aria-controls="pro-one" aria-selected="true">
                                                <div class="product__nav-img w-img">
                                                    <img style="max-width: 90px; max-height: 115px;" src="{{Storage::url($product_id->firstImage)}}" alt="">
                                                </div>
                                            </a>
                                        @endif
                                        @if(!$product_id->secondImage == 0)
                                            <a class="nav-item nav-link" id="pro-two-tab" data-bs-toggle="tab"
                                               href="#pro-two" role="tab" aria-controls="pro-two" aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img style="max-width: 90px; max-height: 115px;" src="{{Storage::url($product_id->secondImage)}}" alt="">
                                                </div>
                                            </a>
                                        @endif
                                        @if(!$product_id->thirdImage == 0)
                                            <a class="nav-item nav-link" id="pro-three-tab" data-bs-toggle="tab"
                                               href="#pro-three" role="tab" aria-controls="pro-three"
                                               aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img style="max-width: 90px; max-height: 115px;" src="{{Storage::url($product_id->thirdImage)}}" alt="">
                                                </div>
                                            </a>
                                        @endif
                                        @if(!$product_id->fourthImage == 0)
                                            <a class="nav-item nav-link" id="pro-four-tab" data-bs-toggle="tab"
                                               href="#pro-four" role="tab" aria-controls="pro-four"
                                               aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img style="max-width: 90px; max-height: 115px;" src="{{Storage::url($product_id->fourthImage)}}" alt="">
                                                </div>
                                            </a>
                                        @endif
                                        @if(!$product_id->fivethImage == 0)
                                            <a class="nav-item nav-link" id="pro-five-tab" data-bs-toggle="tab"
                                               href="#pro-five" role="tab" aria-controls="pro-five"
                                               aria-selected="false">
                                                <div class="product__nav-img w-img">
                                                    <img style="max-width: 90px; max-height: 115px;" src="{{Storage::url($product_id->fivethImage)}}" alt="">
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </nav>
                            </div>
                            <div class="tab-content mb-20" id="product-detailsContent">
                                @if(!$product_id->firstImage == 0)
                                    <div class="tab-pane fade active show" id="pro-one" role="tabpanel"
                                         aria-labelledby="pro-one-tab">
                                        <div class="product__modal-img product__thumb w-img">
                                            <img style="max-width: 470px; max-height: 600px;"
                                                 src="{{Storage::url($product_id->firstImage)}}" alt="">
                                            <div class="product__sale ">
                                                @if($product_id->isSalary())
                                                    <span class="new">Скидка</span>
                                                    <span class="percent">{{$product_id->getSalaryPrice()}}%</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(!$product_id->secondImage == 0)
                                    <div class="tab-pane fade" id="pro-two" role="tabpanel"
                                         aria-labelledby="pro-two-tab">
                                        <div class="product__modal-img product__thumb w-img">
                                            <img style="max-width: 470px; max-height: 600px;"
                                                 src="{{Storage::url($product_id->secondImage)}}" alt="">
                                            <div class="product__sale ">
                                                @if($product_id->isSalary())
                                                    <span class="new">Скидка</span>
                                                    <span class="percent">{{$product_id->getSalaryPrice()}}%</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(!$product_id->thirdImage == 0)
                                    <div class="tab-pane fade" id="pro-three" role="tabpanel"
                                         aria-labelledby="pro-three-tab">
                                        <div class="product__modal-img product__thumb w-img">
                                            <img style="max-width: 470px; max-height: 600px;"
                                                 src="{{Storage::url($product_id->thirdImage)}}" alt="">
                                            <div class="product__sale ">
                                                @if($product_id->isSalary())
                                                    <span class="new">Скидка</span>
                                                    <span class="percent">{{$product_id->getSalaryPrice()}}%</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(!$product_id->fourthImage == 0)
                                    <div class="tab-pane fade" id="pro-four" role="tabpanel"
                                         aria-labelledby="pro-three-tab">
                                        <div class="product__modal-img product__thumb w-img">
                                            <img style="max-width: 470px; max-height: 600px;"
                                                 src="{{Storage::url($product_id->fourthImage)}}" alt="">
                                            <div class="product__sale ">
                                                @if($product_id->isSalary())
                                                    <span class="new">Скидка</span>
                                                    <span class="percent">{{$product_id->getSalaryPrice()}}%</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(!$product_id->fivethImage == 0)
                                    <div class="tab-pane fade" id="pro-five" role="tabpanel"
                                         aria-labelledby="pro-three-tab">
                                        <div class="product__modal-img product__thumb w-img">
                                            <img style="max-width: 470px; max-height: 600px;"
                                                 src="{{Storage::url($product_id->fivethImage)}}" alt="">
                                            <div class="product__sale ">
                                                @if($product_id->isSalary())
                                                <span class="new">Скидка</span>
                                                <span class="percent">{{$product_id->getSalaryPrice()}}%</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="product__modal-content-2">
                            <h4><a>{{$product_id->name}}</a></h4>
                            <div class="product__price mb-25">
                                @if($product_id->isSalary())
                                    <span class="price old-price">{{$product_id->price}} рублей</span>
                                    <span class="price new-price">{{$product_id->salaryPrice}} рублей</span>
                                @else
                                    <span class="price">{{$product_id->price}} рублей</span>
                                @endif
                            </div>
                            <div class="product__modal-des mb-30" contenteditable="true">
                                <textarea style="height: 500px; width: 100%; box-sizing: border-box; border: none; background: transparent; resize: none; " readonly disabled="disabled">{{$product_id->description}}</textarea>
                            </div>
                            <div class="pro-quan-area d-sm-flex align-items-center">
                                <div class="pro-cart-btn">
                                    <form action="{{route('cart-add', $product_id)}}" method="POST">
                                        <button class="add-cart-btn mb-20"> В корзину</button>
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="product__tag mb-25">
                                <span class="ct mr-20">Категория:</span>
                                <span><a
                                        href="{{route('shop',$product_id->category->code."=on")}}">{{$product_id->category->name}}</a></span>
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
                                            <div class="tab-pane fade" id="nav2" role="tabpanel"
                                                 aria-labelledby="nav2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/products/quick-view/quick-view-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel"
                                                 aria-labelledby="nav3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/products/quick-view/quick-view-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel"
                                                 aria-labelledby="nav4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/products/quick-view/quick-view-4.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav1" type="button" role="tab"
                                                        aria-controls="nav1"
                                                        aria-selected="true">
                                                    <img src="assets/img/products/quick-view/nav/quick-nav-1.jpg"
                                                         alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav2-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav2" type="button" role="tab"
                                                        aria-controls="nav2"
                                                        aria-selected="false">
                                                    <img src="assets/img/products/quick-view/nav/quick-nav-2.jpg"
                                                         alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav3-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav3" type="button" role="tab"
                                                        aria-controls="nav3"
                                                        aria-selected="false">
                                                    <img src="assets/img/products/quick-view/nav/quick-nav-3.jpg"
                                                         alt="">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="nav4-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav4" type="button" role="tab"
                                                        aria-controls="nav4"
                                                        aria-selected="false">
                                                    <img src="assets/img/products/quick-view/nav/quick-nav-4.jpg"
                                                         alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4 class="product__modal-title"><a href="product-details.html">Samsung C49J89:
                                                £875, Debenhams Plus</a></h4>
                                        <div class="product__modal-des mb-40">
                                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                eorum
                                                claritatem. Investigationes demonstraverunt </p>
                                        </div>
                                        <div class="product__modal-stock">
                                            <span>Availability :</span>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="product__modal-stock sku mb-30">
                                            <span>SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span>
                                        </div>
                                        <div class="product__modal-review d-sm-flex">
                                            <div class="rating mb-15 mr-35">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__modal-add-review mb-15">
                                                <span><a href="#">1 Review</a></span>
                                                <span><a href="#">Add Review</a></span>
                                            </div>
                                        </div>
                                        <div class="product__modal-price">
                                            <span>$560.00</span>
                                        </div>
                                        <div class="product__modal-form mb-30">
                                            <form action="#">
                                                <div class="pro-quan-area d-lg-flex align-items-center">
                                                    <div class="product-quantity mr-20 mb-25">
                                                        <div class="cart-plus-minus p-relative"><input type="text"
                                                                                                       value="1"/></div>
                                                    </div>
                                                    <div class="pro-cart-btn mb-25">
                                                        <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="product__modal-links">
                                            <ul>
                                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                </li>
                                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                </li>
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
@endsection
