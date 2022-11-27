@extends('layouts.admin')
@isset($category)
    @section('title' , 'Панель администратора || Редактирование  ' . $category->name)
@else
    @section('title' , 'Панель администратора || Создание категории')
@endisset
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
                        <a class="dropdown-item text-center small text-gray-500" href="{{route('admin-order')}}">Посмотреть все заказы</a>
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

        <div class="container-fluid">

            <h1 class="h3 mb-2 text-gray-800">
                @isset($category)
                    Редактировать категорию {{$category->name}}
                @else
                     Создать категорию
                @endisset
            </h1>

            <form method="POST" enctype="multipart/form-data"

                  @isset($category)
                  action="{{route('categories.update', $category)}}"
                  @else
                  action="{{route('categories.store')}}"
                @endisset>
                @isset($category)
                    @method('PUT')
                @endisset
                @csrf
                <div class="mb-3"><label for="exampleFormControlInput1">Название категории:</label>
                    <input name="name" class="form-control" id="name" type="text" placeholder="Название*" value="@isset($category) {{$category->name}} @endisset">
                </div>
                <div class="mb-3">
                    <div class="mb-3"><label for="exampleFormControlInput1">Код:</label>
                        <input name="code" class="form-control" id="code" type="text" placeholder="bed или sofa" value="@isset($category) {{$category->code}} @endisset">
                    </div>
                    <div class="mb-3"><label for="exampleFormControlInput1">Код иконки категории:</label>
                        <input name="fa_code" class="form-control" id="fa_code" type="text" placeholder="fa-bed или fa-sofa" value="@isset($category) {{$category->fa_code}} @endisset">
                    </div>
                    <div class="mb-3">
                        <div class="mb-0">
                            <label for="exampleFormControlTextarea1">Описание:</label>
                            <textarea name="description" class="form-control" id="description" rows="3">@isset($category) {{$category->description}} @endisset</textarea>
                        </div>
                    </div>
                    <div class="form-inline">
                        @isset($category)
                        <div class="ml-2 rounded" style="height: 15rem; width: 15rem" >
                            <img src="{{Storage::url($category->image)}}" id="fImage" class="rounded" style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                            <label style="margin-top: 10px" for="image"><i class="fa fa-plus"></i></label>
                            <input id="image" name="image" class="form-control-file" type="file" oninput="fImage.src=window.URL.createObjectURL(this.files[0])" style="visibility: hidden; width: 1px" >
                        </div>
                        @else
                            <div class="ml-2 rounded" style="height: 15rem; width: 15rem" >
                                <img src="" id="fImage" class="rounded" style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                <label style="margin-top: 10px" for="image"><i class="fa fa-plus"></i></label>
                                <input id="image" name="image" class="form-control-file" type="file" oninput="fImage.src=window.URL.createObjectURL(this.files[0])" style="visibility: hidden; width: 1px" >
                            </div>
                        @endisset

                    </div>
                </div>
                <button style="margin-top: 75px" data-toggle="modal" data-target="#okModal" class="btn btn-success btn-icon-split mb-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-save"></i>
                                        </span>
                    <span class="text">Сохранить</span>
                </button>
            </form>
        </div>
    </div>
@endsection
