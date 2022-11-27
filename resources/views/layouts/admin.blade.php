<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link href="/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="/assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/preloader.css">
    <link href="/assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="/assets/admin/css/image.css" rel="stylesheet">
</head>

<body id="page-top">
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="first_object"></div>
            <div class="object" id="second_object"></div>
            <div class="object" id="third_object"></div>
        </div>
    </div>
</div>
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
            <div class="sidebar-brand-text mx-3">E-elina-shop <sup></sup></div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Главная</span></a>
        </li>
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
               aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-fw fa-box"></i>
                <span>Товары</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('products.index')}}">Все товары</a>
                    <a class="collapse-item" href="{{route('products.create')}}">Добавить новый <i class="fas fa-fw fa-plus"></i></a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-folder"></i>
                <span>Заказы</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin-order')}}">Все заказы</a>
                    <a class="collapse-item" href="{{route('archive-order-list')}}">Архив заказов</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThird"
               aria-expanded="true" aria-controls="collapseThird">
                <i class="fas fa-fw fa-user"></i>
                <span>Пользователи</span>
            </a>
            <div id="collapseThird" class="collapse" aria-labelledby="headingThird" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin-user')}}">Все пользователи</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFourth"
               aria-expanded="true" aria-controls="collapseFourth">
                <i class="fas fa-fw fa-info"></i>
                <span>Категории товара</span>
            </a>
            <div id="collapseFourth" class="collapse" aria-labelledby="headingFourth" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('categories.index')}}">Все категории</a>
                    <a class="collapse-item" href="{{route('categories.create')}}">Добавить новую <i class="fas fa-fw fa-plus"></i></a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider">


    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
    @yield('content')
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вы действительно хотите выйти?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Если вы уверены, то текущая ссесия будет завершена</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Отмена</button>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-primary">Выйти</button>
                </form>

            </div>
        </div>
    </div>
</div>

<script src="/assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/assets/admin/js/sb-admin-2.min.js"></script>
<script src="/assets/admin/vendor/chart.js/Chart.min.js"></script>
<script src="/assets/admin/js/demo/chart-area-demo.js"></script>
<script src="/assets/admin/js/demo/chart-pie-demo.js"></script>
<script src="/assets/js/magnific-popup.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="/assets/admin/js/demo/datatables-demo.js"></script>

</body>

</html>
