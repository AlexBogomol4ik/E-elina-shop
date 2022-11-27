@extends('layouts.admin')

@section('title' , 'Панель администратора || Категории' )


@section('content')
    <div id="content">
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

            <h1 class="h3 mb-2 text-gray-800">Категории</h1>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="custom-control-inline">
                        <a href="{{route('categories.create')}}" class="btn btn-success btn-icon-split m-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                            <span class="text">Добавить категорию</span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Изображение</th>
                                <th>Название</th>
                                <th>Код</th>
                                <th>Описание категории</th>
                                <th>Дата создание</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Изображение</th>
                                <th>Название</th>
                                <th>Код</th>
                                <th>Описание категории</th>
                                <th>Дата создание</th>
                                <th>Действия</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            @foreach($categories as $category)
                                <tr>
                                    <td width="1px"><img width="200px" src="{{Storage::url($category->image)}}"/></td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->code}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td width="1px">
                                        <div>
                                            <form action="{{route('categories.destroy', $category)}}" method="POST">
                                                <a href="{{route('categories.show', $category)}}"
                                                   class="btn btn-info btn-icon-split mb-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                                    <span class="text">Просмотр</span>
                                                </a>
                                                <a href="{{route('categories.edit', $category)}}"
                                                   class="btn btn-warning btn-icon-split mb-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                                    <span class="text">Редактировать</span>
                                                </a>
                                                @method('DELETE')
                                                @csrf
                                                <button data-toggle="modal" data-target="#deleteModal" class="btn btn-danger btn-icon-split mb-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                                    <span class="text">Удалить</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
