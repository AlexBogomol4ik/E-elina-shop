@extends('layouts.admin')
@isset($product)
    @section('title' , 'Панель администратора || Редактирование  ' . $product->name)
@else
    @section('title' , 'Панель администратора || Создание продукта')
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

        <div class="container-fluid">

            <h1 class="h3 mb-2 text-gray-800">
                @isset($product)
                    Редактировать товар {{$product->name}}
                @else
                    Создать товар
                @endisset
            </h1>

            <form method="POST" enctype="multipart/form-data"

                  @isset($product)
                  action="{{route('products.update', $product)}}"
                  @else
                  action="{{route('products.store')}}"
                @endisset>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div>
                    <div class="mb-3"><label for="exampleFormControlInput1">Название товара:</label>
                        <input name="name" class="form-control" id="name" type="text" placeholder="Название*"
                               value="@isset($product) {{$product->name}} @endisset">
                    </div>
                    <div class="mb-3">
                        <div class="mb-3"><label for="exampleFormControlInput1">Код:</label>
                            <input name="code" class="form-control" id="code" type="text" placeholder="bed или sofa"
                                   value="@isset($product) {{$product->code}} @endisset">
                        </div>
                        <div class="mb-3"><label for="exampleFormControlInput1">Цена:</label>
                            <input name="price" class="form-control" id="price" type="text" placeholder="12000"
                                   value="@isset($product) {{$product->price}} @endisset">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1">Категория товара</label><select name="category_id"
                                                                                                   id="category_id"
                                                                                                   class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                            @isset($product)
                                            @if($product->category_id == $category->id)
                                            selected
                                        @endif
                                        @endisset
                                    >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="mb-0">
                                <label for="exampleFormControlTextarea1">Описание:</label>
                                <textarea style="height: 450px; resize: none;" placeholder="Описание товара"
                                          name="description" class="form-control" id="description"
                                          rows="3">@isset($product) {{$product->description}} @endisset</textarea>
                            </div>
                        </div>
                        @foreach([
                           'hit'=>'Популярное',
                           'new'=>'Новинка',
                           'salary' => 'Скидка',
                        ] as $field => $title)
                            <div class="mb-3 form-check form-group">
                                <div class="mb-0 form-check">
                                    <input class="form-check-input" name="{{$field}}" id="{{$field}}" type="checkbox"
                                           @if(isset($product) && $product->$field === 1)
                                           checked="checked"
                                        @endif
                                    >
                                    <label class="form-check-label" for="flexCheckDefault">{{$title}}</label>
                                </div>
                            </div>
                        @endforeach
                        <div class="mb-3"><label for="exampleFormControlInput1">Цена для скидки товара:</label>
                            <input name="salaryPrice" class="form-control" id="salaryPrice" type="text"
                                   placeholder="Цена*"
                                   value="@isset($product) {{$product->salaryPrice}} @endisset">
                        </div>

                        <div class="form-inline">
                            @isset($product)
                                <div class="form-inline">
                                    <div class="ml-2 rounded" style="height: 15rem; width: 15rem; margin-bottom: 50px">
                                        <img
                                            @isset($product->firstImage)
                                            src="{{Storage::url($product->firstImage)}}"
                                            @else
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            @endisset
                                            id="fImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <div class="form-inline" style="margin-left: 125px">
                                            <label
                                                onclick="document.getElementById('deleteFirstImage').checked = false;"
                                                style=" margin-top: 10px; margin-right: 10px" for="firstImage"><i
                                                    class="fa fa-plus"></i></label>
                                            <label
                                                onclick="fImage.src='/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png'"
                                                style=" margin-top: 10px; margin-right: 10px" for="deleteFirstImage"><i
                                                    class="fa fa-trash"></i></label>
                                        </div>
                                        <input id="deleteFirstImage"
                                               style="width: 25px; height: 25px; visibility: hidden;"
                                               name="deleteFirstImage" type="checkbox" class="checkbox-form mt-2">
                                        <input id="firstImage" name="firstImage" class="form-control-file" type="file"
                                               oninput="fImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">
                                    </div>
                                    <div class="ml-2 rounded" style="height: 15rem; width: 15rem; margin-bottom: 50px">
                                        <img
                                            @isset($product->secondImage)
                                            src="{{Storage::url($product->secondImage)}}"
                                            @else
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            @endisset
                                            id="sImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <div class="form-inline" style="margin-left: 125px">
                                            <label
                                                onclick="document.getElementById('deleteSecondImage').checked = false;"
                                                style=" margin-top: 10px; margin-right: 10px" for="secondImage"><i
                                                    class="fa fa-plus"></i></label>
                                            <label
                                                onclick="sImage.src='/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png'"
                                                style=" margin-top: 10px; margin-right: 10px" for="deleteSecondImage"><i
                                                    class="fa fa-trash"></i></label>
                                        </div>
                                        <input id="deleteSecondImage"
                                               style="width: 25px; height: 25px; visibility: hidden;"
                                               name="deleteSecondImage" type="checkbox" class="checkbox-form mt-2">
                                        <input id="secondImage" name="secondImage" class="form-control-file" type="file"
                                               oninput="sImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">

                                    </div>

                                    <div class="ml-2 rounded" style="height: 15rem; width: 15rem; margin-bottom: 50px">
                                        <img
                                            @isset($product->thirdImage)
                                            src="{{Storage::url($product->thirdImage)}}"
                                            @else
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            @endisset
                                            id="tImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <div class="form-inline" style="margin-left: 125px">
                                            <label
                                                onclick="document.getElementById('deleteThirdImage').checked = false;"
                                                style=" margin-top: 10px; margin-right: 10px" for="thirdImage"><i
                                                    class="fa fa-plus"></i></label>
                                            <label
                                                onclick="tImage.src='/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png'"
                                                style=" margin-top: 10px; margin-right: 10px" for="deleteThirdImage"><i
                                                    class="fa fa-trash"></i></label>
                                        </div>
                                        <input id="deleteThirdImage"
                                               style="width: 25px; height: 25px; visibility: hidden;"
                                               name="deleteThirdImage" type="checkbox" class="checkbox-form mt-2">
                                        <input id="thirdImage" name="thirdImage" class="form-control-file" type="file"
                                               oninput="tImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">
                                    </div>

                                    <div class="ml-2 rounded" style="height: 15rem; width: 15rem; margin-bottom: 50px">
                                        <img
                                            @isset($product->fourthImage)
                                            src="{{Storage::url($product->fourthImage)}}"
                                            @else
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            @endisset
                                            id="foImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <div class="form-inline" style="margin-left: 125px">
                                            <label
                                                onclick="document.getElementById('deleteFourthImage').checked = false;"
                                                style=" margin-top: 10px; margin-right: 10px" for="fourthImage"><i
                                                    class="fa fa-plus"></i></label>
                                            <label
                                                onclick="foImage.src='/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png'"
                                                style=" margin-top: 10px; margin-right: 10px" for="deleteFourthImage"><i
                                                    class="fa fa-trash"></i></label>
                                        </div>
                                        <input id="deleteFourthImage"
                                               style="width: 25px; height: 25px; visibility: hidden;"
                                               name="deleteFourthImage" type="checkbox" class="checkbox-form mt-2">
                                        <input id="fourthImage" name="fourthImage" class="form-control-file" type="file"
                                               oninput="foImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">

                                    </div>

                                    <div class="ml-2 rounded" style="margin-bottom: 50px; height: 15rem; width: 15rem">
                                        <img
                                            @isset($product->fivethImage)
                                            src="{{Storage::url($product->fivethImage)}}"
                                            @else
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            @endisset
                                            id="fvImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <div class="form-inline" style="margin-left: 125px">
                                            <label
                                                onclick="document.getElementById('deleteFivethImage').checked = false;"
                                                style=" margin-top: 10px; margin-right: 10px" for="fivethImage"><i
                                                    class="fa fa-plus"></i></label>
                                            <label
                                                onclick="fvImage.src='/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png'"
                                                style=" margin-top: 10px; margin-right: 10px" for="deleteFivethImage"><i
                                                    class="fa fa-trash"></i></label>
                                        </div>
                                        <input id="deleteFivethImage"
                                               style="width: 25px; height: 25px; visibility: hidden;"
                                               name="deleteFivethImage" type="checkbox" class="checkbox-form mt-2">
                                        <input id="fivethImage" name="fivethImage" class="form-control-file" type="file"
                                               oninput="fvImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">
                                    </div>
                                </div>
                            @else
                                <div class="form-inline">

                                    <div class="ml-2 rounded" style="height: 15rem; width: 15rem; margin-bottom: 50px">
                                        <img
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            id="fImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <label style="margin-top: 10px" for="firstImage"><i
                                                class="fa fa-plus"></i></label>
                                        <input id="firstImage" name="firstImage" class="form-control-file" type="file"
                                               oninput="fImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">
                                    </div>

                                    <div class="ml-2 rounded" style="height: 15rem; width: 15rem;margin-bottom: 50px">
                                        <img
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            id="sImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <label style="margin-top: 10px" for="secondImage"><i
                                                class="fa fa-plus"></i></label>
                                        <input id="secondImage" name="secondImage" class="form-control-file" type="file"
                                               oninput="sImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">
                                    </div>

                                    <div class="ml-2 rounded" style="margin-bottom: 50px; height: 15rem; width: 15rem">
                                        <img
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            id="tImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <label style="margin-top: 10px" for="thirdImage"><i
                                                class="fa fa-plus"></i></label>
                                        <input id="thirdImage" name="thirdImage" class="form-control-file" type="file"
                                               oninput="tImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">
                                    </div>

                                    <div class="ml-2 rounded" style="margin-bottom: 50px; height: 15rem; width: 15rem">
                                        <img
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            id="foImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <label style="margin-top: 10px" for="fourthImage"><i
                                                class="fa fa-plus"></i></label>
                                        <input id="fourthImage" name="fourthImage" class="form-control-file" type="file"
                                               oninput="foImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">
                                    </div>

                                    <div class="ml-2 rounded" style="margin-bottom: 50px; height: 15rem; width: 15rem">
                                        <img
                                            src="/assets/img/products/1200px-Breezeicons-actions-22-kdenlive-select-images.svg.png"
                                            id="fvImage" class="rounded"
                                            style="border-style: none; object-fit: fill; width:  100%; height: 100%"/>
                                        <label style="margin-top: 10px" for="fivethImage"><i
                                                class="fa fa-plus"></i></label>
                                        <input id="fivethImage" name="fivethImage" class="form-control-file" type="file"
                                               oninput="fvImage.src=window.URL.createObjectURL(this.files[0])"
                                               style="visibility: hidden; width: 1px">
                                    </div>

                                </div>
                            @endisset
                        </div>
                    </div>
                    <button style="margin-top: 75px" class="btn btn-success btn-icon-split mb-5 align-items-center">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-save "></i>
                                        </span>
                        <span class="text">Сохранить</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
