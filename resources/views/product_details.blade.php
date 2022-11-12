@section('title' , 'Элина мебель || Каталог')
@include('defualt_heder');
<main>
    <!-- page__title-start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="/assets/img/bg/page-title-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Product Details</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page__title-end -->

    <!-- product-details-start -->
    <section class="product-details pt-90 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-box d-flex">
                        <div class="product__modal-nav mr-20">
                            <nav>
                                <div class="nav nav-tabs" id="product-details" role="tablist">
                                    <a class="nav-item nav-link active" id="pro-one-tab" data-bs-toggle="tab"
                                       href="#pro-one" role="tab" aria-controls="pro-one" aria-selected="true">
                                        <div class="product__nav-img w-img">
                                            <img src="assets/img/products/quick-view/nav/quick-nav-02-1.jpg" alt="">
                                        </div>
                                    </a>
                                    <a class="nav-item nav-link" id="pro-two-tab" data-bs-toggle="tab" href="#pro-two"
                                       role="tab" aria-controls="pro-two" aria-selected="false">
                                        <div class="product__nav-img w-img">
                                            <img src="assets/img/products/quick-view/nav/quick-nav-02-2.jpg" alt="">
                                        </div>
                                    </a>
                                    <a class="nav-item nav-link" id="pro-three-tab" data-bs-toggle="tab"
                                       href="#pro-three" role="tab" aria-controls="pro-three" aria-selected="false">
                                        <div class="product__nav-img w-img">
                                            <img src="assets/img/products/quick-view/nav/quick-nav-02-3.jpg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content mb-20" id="product-detailsContent">
                            <div class="tab-pane fade active show" id="pro-one" role="tabpanel"
                                 aria-labelledby="pro-one-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="assets/img/products/quick-view/quick-view-02-1.jpg" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-20%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-two" role="tabpanel" aria-labelledby="pro-two-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="assets/img/products/quick-view/quick-view-02-2.jpg" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-13%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-three" role="tabpanel" aria-labelledby="pro-three-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="assets/img/products/quick-view/quick-view-02-3.jpg" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-15%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-content-2">
                        <h4><a href="product-details.html">{{$product_id->name}}</a></h4>
                        <div class="product__price mb-25">
                            <span>{{$product_id->price}} рублей</span>
                        </div>
                        <div class="product__modal-des mb-30">
                            <p>{{$product_id->description}}</p>
                        </div>
                        <div class="product__details-color d-sm-flex align-items-center mb-25">
                            <span>Color:</span>
                            <ul>
                                <li><a href="#" class="black"></a></li>
                                <li><a href="#" class="active brown"></a></li>
                                <li><a href="#" class="blue"></a></li>
                                <li><a href="#" class="red"></a></li>
                                <li><a href="#" class="white"></a></li>
                            </ul>
                        </div>
                        <div class="product__details-size d-sm-flex align-items-center mb-30">
                            <span>Size: </span>
                            <ul class="mr-30">
                                <li>
                                    <a href="#" class="unavailable">S</a>
                                </li>
                                <li>
                                    <a href="#">M</a>
                                </li>
                                <li>
                                    <a href="#">L</a>
                                </li>
                                <li>
                                    <a href="#">XL</a>
                                </li>
                                <li>
                                    <a href="#">2XL</a>
                                </li>
                                <li>
                                    <a href="#">3XL</a>
                                </li>
                            </ul>
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
                            <span><a href="{{route('category', $product_id->product_category()->code)}}">{{$product_id->product_category()->name}}</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-xl-12">
                    <div class="product__details-tab">
                        <div class="product__details-tab-nav text-center mb-45">
                            <nav>
                                <div class="nav nav-tabs justify-content-start justify-content-sm-center"
                                     id="pro-details" role="tablist">
                                    <a class="nav-item nav-link active" id="des-tab" data-bs-toggle="tab" href="#des"
                                       role="tab" aria-controls="des" aria-selected="true">Описание</a>
                                    <a class="nav-item nav-link" id="add-tab" data-bs-toggle="tab" href="#add"
                                       role="tab" aria-controls="add" aria-selected="false">Характеристики</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="pro-detailsContent">
                            <div class="tab-pane fade active show" id="des" role="tabpanel">
                                <div class="product__details-des mb-20">
                                    <p>{{$product_id->description}}</p>

                                    <div class="product__details-des-list mb-20">
                                        <ul>
                                            <li><span>Claritas est etiam processus dynamicus.</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add" role="tabpanel">
                                <div class="product__desc-info mb-35">
                                    <ul>
                                        <li>
                                            <h6>Weight</h6>
                                            <span>2 lbs</span>
                                        </li>
                                        <li>
                                            <h6>Dimensions</h6>
                                            <span>12 × 16 × 19 in</span>
                                        </li>
                                        <li>
                                            <h6>Product</h6>
                                            <span>Purchase this product on rag-bone.com</span>
                                        </li>
                                        <li>
                                            <h6>Color</h6>
                                            <span>Gray, Black</span>
                                        </li>
                                        <li>
                                            <h6>Size</h6>
                                            <span>S, M, L, XL</span>
                                        </li>
                                        <li>
                                            <h6>Model</h6>
                                            <span>Model	</span>
                                        </li>
                                        <li>
                                            <h6>Shipping</h6>
                                            <span>Standard shipping: $5,95</span>
                                        </li>
                                        <li>
                                            <h6>Care Info</h6>
                                            <span>Machine Wash up to 40ºC/86ºF Gentle Cycle</span>
                                        </li>
                                        <li>
                                            <h6>Brand</h6>
                                            <span>Kazen</span>
                                        </li>
                                    </ul>
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
                                        <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                            <div class="product__modal-img w-img">
                                                <img src="assets/img/products/quick-view/quick-view-4.jpg" alt="">
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
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav2-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2"
                                                    aria-selected="false">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-2.jpg" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav3-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3"
                                                    aria-selected="false">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-3.jpg" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav4-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4"
                                                    aria-selected="false">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-4.jpg" alt="">
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
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum
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
    <!-- shop modal end -->

</main>
@include('defualt_footer');
