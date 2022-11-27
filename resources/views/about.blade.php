@extends('layouts.app')
@section('title' , 'Элина мебель || О нас')
@section('content')
    <main>
        <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/products/faber1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page__title-inner text-center">
                            <h1 class="text-white">О нас</h1>
                            <div class="page__title-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item text-white-50"><a href="{{route('index')}}">Главная</a></li>
                                        <li class="breadcrumb-item active text-white-50" aria-current="page">О нас</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about__history pt-95 pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-10">
                        <div class="about__history-wrapper">
                            <div class="about__history-title-area">
                                <span class="about__history-title-pre">Немного о нас</span>
                                <h3 class="about__history-title">
                                    <span>«ЭлИна»</span> <br>
                                    это гипермаркет мебели, который работает с 2016 года и занимает лидирующие позиции на рынке.
                                </h3>
                            </div>
                            <p class="about__history-text">Мы заботимся о своей репутации и качестве предлагаемых товаров, поэтому все усилия направлены на поиск разумных решений, которые удачно вписываются в жизнь потребителей. Мы стараемся, чтобы продукция соответствовала вкусу, запросам и бюджету покупателей.</p>

                            <p>Что выделяет салон мебели «ЭлИна» среди общей массы подобных предприятий ? Это прежде всего индивидуальность.
                                Это и специалисты с богатым опытом, которые помогут разобраться в ассортименте представленных образцов и мебели на заказ, также большой выбор, как мебели, так и товаров для дома, конечно же постоянно пополняющейся.
                                К настоящему моменту, салон «ЭлИна» достиг довольно высокого уровня, по закупке и продажи мебели, работая со многими мебельными фабриками, доставляя мебель самой различной сложности и используя материалы и фурнитуру от эконом до премиум класса.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about__gallery">
            <div class="container">
                <div class="row gx-2">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="about__gallery-wrapper text-center ">
                            <div style="height: 273px" class="about__gallery-review include-bg mb-8" data-background="assets/img/about/ySRBot9ijhs.jpg">
                            </div>
                            <div class="row gx-2">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="about__gallery-thumb w-img mb-10">
                                        <img src="/assets/img/about/Ht49TTV4nRk.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="about__gallery-thumb w-img mb-10">
                                        <img src="/assets/img/about/eDCbxZbppJk.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="about__gallery-thumb mb-8 w-img">
                            <img src="/assets/img/about/gczyE2Q0p7Q.jpg" alt="">
                        </div>
                        <div class="about__gallery-thumb w-img">
                            <img src="/assets/img/about/WoXV_7K0CqE.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map-area">
            <div class="contact-map">
                <div id="contact-map">
                    <iframe class="contact-area pt-120 pb-50 fix" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad31bcc614717a9f6c3363f68420c086535da149a4d632bc802406db732106e05&amp;"></iframe>
                </div>
            </div>
        </section>
        <section class="features-2__area mt-90 pb-85">
            <div class="container">
                <div class="row gx-0">
                    <div class="col-xxl-4 offset-xxl-2 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-6">
                        <div class="features-2__item-2 features-2__item-pb-40 features-2__item-br features-2__item-bb text-center">
                            <div class="features-2__icon-2">
                                <img src="assets/img/icon/trophy.png" alt="">
                            </div>
                            <div class="features-2__content-2">
                                <h3 class="features-2__title-2">Большой ассортимент</h3>
                                <p>Широкий выбор импортных и качественных моделей.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6">
                        <div class="features-2__item-2 features-2__item-pb-40 features-2__item-bb text-center">
                            <div class="features-2__icon-2">
                                <img src="assets/img/icon/user.png" alt="">
                            </div>
                            <div class="features-2__content-2">
                                <h3 class="features-2__title-2">Напишите нам</h3>
                                <p>Мы готовы ответить на любой ваш вопрос в онлайн режиме</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 offset-xxl-2  col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-6">
                        <div class="features-2__item-2 features-2__item-pt-65 features-2__item-br text-center">
                            <div class="features-2__icon-2">
                                <img src="assets/img/icon/like.png" alt="">
                            </div>
                            <div class="features-2__content-2">
                                <h3 class="features-2__title-2"> Качество</h3>
                                <p> Вы получите товар высокого качества по приемлемым ценам.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5  col-lg-5  col-md-6">
                        <div class="features-2__item-2 features-2__item-pt-65 text-center">
                            <div class="features-2__icon-2">
                                <img src="assets/img/icon/pen.png" alt="">
                            </div>
                            <div class="features-2__content-2">
                                <h3 class="features-2__title-2">Ценовая политика</h3>
                                <p>В каталоге представлены изделия для создания комфортной обстановки при любом бюджете.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
