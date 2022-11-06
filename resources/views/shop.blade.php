@section('title' , 'Элина мебель || Каталог')
@include('defualt_heder');
<main>
    <section class="shop-details pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-4">
                    <div class="pproduct-sidebar-area mr-60">
                        <div class="product-widget mb-30">
                            <h5 class="pt-title mb-20">Product categories</h5>
                            <div class="widget-category-list">
                                <form action="#">
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-1" name="cat-item">
                                        <label for="cat-item-1">Clothing &amp; Apparel <span>(12)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-2" name="cat-item">
                                        <label for="cat-item-2">Consumer Electrics <span>(60)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-3" name="cat-item">
                                        <label for="cat-item-3">Computers &amp; Technologies <span>(41)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-4" name="cat-item">
                                        <label for="cat-item-4">Phones &amp; Accessories <span>(28)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-5" name="cat-item">
                                        <label for="cat-item-5">Babies &amp; Moms <span>(21)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-7" name="cat-item">
                                        <label for="cat-item-7">Books &amp; Office <span>(62)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-8" name="cat-item">
                                        <label for="cat-item-8">Sport &amp; Outdoo <span>(22)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-9" name="cat-item">
                                        <label for="cat-item-9">Chairs &amp; Stools <span>(20)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-10" name="cat-item">
                                        <label for="cat-item-10">Furniture &amp; Acessories <span>(06)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-11" name="cat-item">
                                        <label for="cat-item-11">Kitchen &amp; Tableware <span>(30)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-12" name="cat-item">
                                        <label for="cat-item-12">Lighting <span>(30)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="cat-item-13" name="cat-item">
                                        <label for="cat-item-13">Armchairs &amp; Chaises <span>(30)</span></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="product-widget mb-30">
                            <div class="single-widget">
                                <h5 class="pt-title pb-20">Filter By Price</h5>
                                <form action="#">
                                    <div class="ui-price-slider">
                                        <div class="slider-range">
                                            <div id="slider-range" class="mb-20 ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span></div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <p>
                                                        <label for="amount">Price :</label>
                                                        <input type="text" id="amount" readonly="">
                                                    </p>
                                                </div>
                                                <div class="col-3">
                                                    <div class="text-end">
                                                        <a href="#" class="sm-filter-title">Filter</a>
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
                                <h5 class="pt-title mb-20">Filter By Choose Color</h5>
                                <div class="widget-color-list widget-color-box scroll-box-default">
                                    <form action="#">
                                        <div class="single-widget-category">
                                            <input type="checkbox" id="color-item-1" name="cat-item">
                                            <label for="color-item-1" class="color-black-bg">Black <span>(12)</span></label>
                                        </div>
                                        <div class="single-widget-category">
                                            <input type="checkbox" id="color-item-2" name="cat-item">
                                            <label for="color-item-2" class="color-green-bg">Green <span>(02)</span></label>
                                        </div>
                                        <div class="single-widget-category">
                                            <input type="checkbox" id="color-item-3" name="cat-item">
                                            <label for="color-item-3" class="color-blue-bg">Blue <span>(06)</span></label>
                                        </div>
                                        <div class="single-widget-category">
                                            <input type="checkbox" id="color-item-4" name="cat-item">
                                            <label for="color-item-4" class="color-red-bg">Red <span>(08)</span></label>
                                        </div>
                                        <div class="single-widget-category">
                                            <input type="checkbox" id="color-item-5" name="cat-item">
                                            <label for="color-item-5" class="color-gray-bg">Gray <span>(09)</span></label>
                                        </div>
                                        <div class="single-widget-category">
                                            <input type="checkbox" id="color-item-7" class="white-input" name="cat-item">
                                            <label for="color-item-7" class="color-white-bg">White <span>(04)</span></label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="product-widget mb-30">
                            <h5 class="pt-title mb-20">Choose Color</h5>
                            <div class="widget-category-list scroll-box-default">
                                <form action="#">
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="size-item-1" name="cat-item">
                                        <label for="size-item-1">S <span>(02)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="size-item-2" name="cat-item">
                                        <label for="size-item-2">M <span>(08)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="size-item-3" name="cat-item">
                                        <label for="size-item-3">L <span>(19)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="size-item-4" name="cat-item">
                                        <label for="size-item-4">XL <span>(21)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="size-item-5" name="cat-item">
                                        <label for="size-item-5">XXL <span>(09)</span></label>
                                    </div>
                                    <div class="single-widget-category">
                                        <input type="checkbox" id="size-item-6" name="cat-item">
                                        <label for="size-item-6">XXXL <span>(06)</span></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="product-widget mb-50">
                            <h5 class="pt-title mb-20">Choose Color</h5>
                            <div class="tagcloud">
                                <a href="#">Lighting</a>
                                <a href="#">Decor</a>
                                <a href="#">Interior</a>
                                <a href="#">Puik</a>
                                <a href="#">Fashion</a>
                                <a href="#">Sport</a>
                                <a href="#">Bathroom</a>
                                <a href="#">Chair</a>
                                <a href="#">Accessories</a>
                                <a href="#">Easy Chairs</a>
                                <a href="#">Living room</a>
                                <a href="#">Office</a>
                                <a href="#">Bags</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8">
                    <div class="shop-top-area mb-20">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-2 col-md-3 col-sm-3">
                                <div class="shop-top-left">
                                    <span class="label mr-15">View:</span>
                                    <div class="nav d-inline-block tab-btn-group" id="nav-tab" role="tablist">
                                        <button class="active" data-bs-toggle="tab" data-bs-target="#tab1" type="button"><i class="fas fa-border-none"></i></button>
                                        <button data-bs-toggle="tab" data-bs-target="#tab2" type="button" class=""><i class="fas fa-list"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-md-6 col-sm-6">
                                <p class="show-total-result text-sm-center">Showing 1–12 of 24 results</p>
                            </div>
                            <div class="col-xl-4 col-xl-4 col-md-3 col-sm-3">
                                <div class="text-sm-end">
                                    <div class="select-default">
                                        <select name="short" id="short" class="shorting-select" style="display: none;">
                                            <option value="">Default sorting</option>
                                            <option value="">ASC</option>
                                            <option value="">DEC</option>
                                        </select><div class="nice-select shorting-select" tabindex="0"><span class="current">Default sorting</span><ul class="list"><li data-value="" class="option selected focus">Default sorting</li><li data-value="" class="option">ASC</li><li data-value="" class="option">DEC</li></ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-main-area mb-40">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="tab1">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-1.jpg" alt="">
                                                </a>
                                                <div class="product__flash-4">
                                                    <span>20%</span>
                                                </div>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Wooden Single Drawer</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-2.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Panton Tunior Light</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-4.jpg" alt="">
                                                </a>
                                                <div class="product__flash-4">
                                                    <span>20%</span>
                                                </div>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Gravida Condimentum</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-5.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Reflect Chest Drawers</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-5.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Decoration Table Pen</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-6.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Matin Small Table Lamp</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-7.jpg" alt="">
                                                </a>
                                                <div class="product__flash-4">
                                                    <span>20%</span>
                                                </div>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Outline Padded Amchair</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-8.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Plain Side Table White</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-9.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">furniture in the world</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-10.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Folores facere molestias</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-11.jpg" alt="">
                                                </a>
                                                <div class="product__flash-4">
                                                    <span>20%</span>
                                                </div>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">At corporis quas in </a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-12.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Wooden Single Drawer</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-13.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Voluptatem quaerat nesciunt</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-14.jpg" alt="">
                                                </a>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Quod laboriosam, recusandae</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$150.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__item mb-20">
                                            <div class="product__thumb w-img fix">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/product-2/product-15.jpg" alt="">
                                                </a>
                                                <div class="product__flash-4">
                                                    <span>20%</span>
                                                </div>
                                                <div class="product__action transition-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <g>
                                                                        <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <svg viewBox="0 0 22 22">
                                                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
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
                                                                <a href="shop.html">Metal</a>
                                                            </span>
                                                </div>
                                                <h3 class="product__title">
                                                    <a href="product-details.html">Cotton Jersey Loose</a>
                                                </h3>
                                                <div class="product__price product__price-4 mb-10">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="product__select-button">
                                                    <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="row">
                                    <div class="productwrap">
                                        <div class="single-product mb-30 wood-list-product-wrap">
                                            <div class="row align-items-xl-center">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="product-thumb mr-30 product-thumb-list w-img">
                                                        <img src="assets/img/products/2/product-1.jpg" alt="#">
                                                        <img src="assets/img/products/2/product-10.jpg" alt="#">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                                                    <div class="wood-product-content wood-product-list-content">
                                                        <h4 class="pro-title pro-title-1"><a href="product-details.html">Simple Stylish Women Backpack</a></h4>
                                                        <div class="pro-price">
                                                            <span>$188.00</span>
                                                            <del>$66.00</del>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                        </div>
                                                        <p>Claritas est etiam processus A Capitalize on low hanging fruit to identify a ballpark value added activity to
                                                            beta test. Override the digital divide with additional clickthroughs from DevOps. Typi non habent claritatem
                                                            insitam, est usus legentis in iis qui facit eorum [...]</p>
                                                        <div class="wood-shop-product-actions">
                                                            <a href="cart.html" class="wood-cart-btn">Add to cart</a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-heart"></i></a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-layer-group"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product mb-30 wood-list-product-wrap">
                                            <div class="row align-items-xl-center">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="product-thumb mr-30 product-thumb-list w-img">
                                                        <img src="assets/img/products/2/product-8.jpg" alt="#">
                                                        <img src="assets/img/products/2/product-9.jpg" alt="#">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                                                    <div class="wood-product-content wood-product-list-content">
                                                        <h4 class="pro-title pro-title-1"><a href="product-details.html">Wooden Single Drawer</a></h4>
                                                        <div class="pro-price">
                                                            <span>$120.00</span>
                                                            <del>$150.00</del>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                        </div>
                                                        <p>Claritas est etiam processus A Capitalize on low hanging fruit to identify a ballpark value added activity to
                                                            beta test. Override the digital divide with additional clickthroughs from DevOps. Typi non habent claritatem
                                                            insitam, est usus legentis in iis qui facit eorum [...]</p>
                                                        <div class="wood-shop-product-actions">
                                                            <a href="cart.html" class="wood-cart-btn">Add to cart</a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-heart"></i></a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-layer-group"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product mb-30 wood-list-product-wrap">
                                            <div class="row align-items-xl-center">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="product-thumb mr-30 product-thumb-list w-img">
                                                        <img src="assets/img/products/2/product-6.jpg" alt="#">
                                                        <img src="assets/img/products/2/product-7.jpg" alt="#">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                                                    <div class="wood-product-content wood-product-list-content">
                                                        <h4 class="pro-title pro-title-1"><a href="product-details.html">Smart Watches Wood</a></h4>
                                                        <div class="pro-price">
                                                            <span>$120.00</span>
                                                            <del>$150.00</del>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                        </div>
                                                        <p>Claritas est etiam processus A Capitalize on low hanging fruit to identify a ballpark value added activity to
                                                            beta test. Override the digital divide with additional clickthroughs from DevOps. Typi non habent claritatem
                                                            insitam, est usus legentis in iis qui facit eorum [...]</p>
                                                        <div class="wood-shop-product-actions">
                                                            <a href="cart.html" class="wood-cart-btn">Add to cart</a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-heart"></i></a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-layer-group"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product mb-30 wood-list-product-wrap">
                                            <div class="row align-items-xl-center">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="product-thumb mr-30 product-thumb-list w-img">
                                                        <img src="assets/img/products/2/product-4.jpg" alt="#">
                                                        <img src="assets/img/products/2/product-5.jpg" alt="#">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                                                    <div class="wood-product-content wood-product-list-content">
                                                        <h4 class="pro-title pro-title-1"><a href="product-details.html">Panton Tunior Chair</a></h4>
                                                        <div class="pro-price">
                                                            <span>$200.00</span>
                                                            <del>$400.00</del>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                        </div>
                                                        <p>Claritas est etiam processus A Capitalize on low hanging fruit to identify a ballpark value added activity to
                                                            beta test. Override the digital divide with additional clickthroughs from DevOps. Typi non habent claritatem
                                                            insitam, est usus legentis in iis qui facit eorum [...]</p>
                                                        <div class="wood-shop-product-actions">
                                                            <a href="cart.html" class="wood-cart-btn">Add to cart</a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-heart"></i></a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-layer-group"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product mb-30 wood-list-product-wrap">
                                            <div class="row align-items-xl-center">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="product-thumb mr-30 product-thumb-list w-img">
                                                        <img src="assets/img/products/2/product-3.jpg" alt="#">
                                                        <img src="assets/img/products/2/product-9.jpg" alt="#">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                                                    <div class="wood-product-content wood-product-list-content">
                                                        <h4 class="pro-title pro-title-1"><a href="product-details.html">Eames Lounge Chair</a></h4>
                                                        <div class="pro-price">
                                                            <span>$150.00</span>
                                                            <del>$200.00</del>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                        </div>
                                                        <p>Claritas est etiam processus A Capitalize on low hanging fruit to identify a ballpark value added activity to
                                                            beta test. Override the digital divide with additional clickthroughs from DevOps. Typi non habent claritatem
                                                            insitam, est usus legentis in iis qui facit eorum [...]</p>
                                                        <div class="wood-shop-product-actions">
                                                            <a href="cart.html" class="wood-cart-btn">Add to cart</a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-heart"></i></a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-layer-group"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                        <h4 class="pro-title pro-title-1"><a href="product-details.html">Nerd Wooden Chair</a></h4>
                                                        <div class="pro-price">
                                                            <span>$110.00</span>
                                                            <del>$180.00</del>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star active"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                            <i class="fal fa-star"></i>
                                                        </div>
                                                        <p>Claritas est etiam processus A Capitalize on low hanging fruit to identify a ballpark value added activity to
                                                            beta test. Override the digital divide with additional clickthroughs from DevOps. Typi non habent claritatem
                                                            insitam, est usus legentis in iis qui facit eorum [...]</p>
                                                        <div class="wood-shop-product-actions">
                                                            <a href="cart.html" class="wood-cart-btn">Add to cart</a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-heart"></i></a>
                                                            <a href="#" class="wood-proudct-btn-boxed"><i class="fal fa-layer-group"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-pagination">
                        <div class="basic-pagination">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="shop.html">
                                            <i class="far fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">1</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="active">2</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">3</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <i class="far fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-details-end -->

    <!-- shop modal start -->
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
                                        <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
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
                                            <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-1.jpg" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-2.jpg" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-3.jpg" alt="">
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                <img src="assets/img/products/quick-view/nav/quick-nav-4.jpg" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product__modal-content">
                                    <h4 class="product__modal-title"><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                    <div class="product__modal-des mb-40">
                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
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
                                                    <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product__modal-links">
                                        <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
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
</main>
@include('defualt_footer');
