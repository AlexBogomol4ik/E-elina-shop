@extends('layouts.admin')
@section('title' , 'Панель администратора || Категория')
@section('content')
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Поиск..."
                           aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                         aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                       placeholder="Search for..." aria-label="Search"
                                       aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">{{$orders->count()}}</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Заказы
                        </h6>
                        @foreach($orders as $order)
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">{{$order->created_at}}</div>
                                    Новый заказ: от {{$order->firstName}} {{$order->name}}
                                </div>
                            </a>
                        @endforeach
                        <a class="dropdown-item text-center small text-gray-500" href="{{route('admin-order')}}">Посмотреть
                            все заказы</a>
                    </div>
                </li>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->name }}</span>
                        <img class="img-profile rounded-circle"
                             src="/assets/admin/img/{{ Auth::user()->profile_img }}">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{route('index')}}">
                            <i class="fas fa-sign fa-sm fa-fw mr-2 text-gray-400"></i>
                            Вернуться на сайт
                        </a>
                        <div class="dropdown-divider"></div>
                        <form>
                            @csrf
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Выйти
                            </a>
                        </form>
                    </div>
                </li>

            </ul>
        </nav>
    </div>
    <div class="container-xl px-4 mt-4">
        <div class="card-body p-4 p-md-5">
            <div class="table-responsive">
                <table class="table table-borderless mb-5">
                    <div style="margin-bottom: 11vh; height: 25vh">
                        <input type="radio" name="slider" id="item-1" checked>
                        <input type="radio" name="slider" id="item-2">
                        <input type="radio" name="slider" id="item-3">
                        <div class="cards">
                            @isset($product->firstImage)
                                <label class="cardf" for="item-1" id="song-1">
                                    <img style="height: auto" src="{{Storage::url($product->firstImage)}}" alt="song">
                                </label>
                            @endisset
                            @isset($product->secondImage)
                                <label class="cardf" for="item-2" id="song-2">
                                    <img style="height: auto" src="{{Storage::url($product->secondImage)}}" alt="song">
                                </label>
                            @endisset
                            @isset($product->thirdImage)
                                <label class="cardf" for="item-3" id="song-3">
                                    <img style="height: auto" src="{{Storage::url($product->thirdImage)}}" alt="song">
                                </label>
                            @endisset
                        </div>
                    </div>
                    <thead class="border-bottom">
                    <tr class="small text-uppercase text-muted">
                        <th scope="col">Название товара: {{$product->name}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-bottom">
                        <td>
                            <div class="fw-bold">Описание товара:</div>
                            <div class="small">{{$product->description}}</div>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <td>
                            <div class="fw-bold">Цена товара: {{$product->price}} рублей</div>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <td>
                            <div class="fw-bold">Код товара: {{$product->code}}</div>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <td>
                            <div class="fw-bold">Категория товара: {{$product->category->name}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-end pb-0" colspan="3">
                            <div class="text-uppercase small fw-700 text-muted">Дата
                                создания: {{$product->created_at}}</div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection



