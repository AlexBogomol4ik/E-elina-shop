@extends('layouts.admin')
@section('title' , 'Панель администратора || Пользователи')
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

            <h1 class="h3 mb-2 text-gray-800">Пользователи</h1>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Таблица пользователей</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Имя</th>
                                <th>Пароль</th>
                                <th>E-mail</th>
                                <th>Роль</th>
                                <th>Когда создан</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Имя</th>
                                <th>Пароль</th>
                                <th>E-mail</th>
                                <th>Роль</th>
                                <th>Когда создан</th>
                                <th>Действия</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            @foreach($users as $user)
                                @if($user->role_as == 1)
                                <tr bgcolor="#add8e6">
                                    @else
                                    <tr>
                                    @endif
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->password}}</td>
                                    <td>{{$user->email}}</td>
                                    @if($user->role_as == 1)
                                        <td  >Администратор</td>
                                    @else
                                        <td>Пользователь</td>
                                    @endif
                                    <td>{{$user->created_at}}</td>
                                    <td width="1px">
                                        <form  method="POST">
                                            @csrf
                                        <a href="{{route('delete-user', $user)}}" class="btn btn-danger btn-icon-split mb-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                            <span class="text">Удалить</span>
                                        </a>
                                        </form>
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
