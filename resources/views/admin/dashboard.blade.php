@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fa fa-gear"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">سلامت سایت</span>
                    <span class="info-box-number">
                    100
                    <small>%</small>
                  </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">کاربران</span>
                    <span class="info-box-number">تعداد کاربران</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-google-plus"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">مقالات</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <!-- /.col -->

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">محصولات</span>
                    <span class="info-box-number">تعداد محصولات</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-md-6">
            <!-- /.col -->

            <!-- USERS LIST -->
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">آخرین اعضا</h3>

                    <div class="card-tools">
                        <!-- <span class="badge badge-danger">8 پیام جدید</span> -->
                        <button type="button" class="btn btn-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- user list -->
                <div class="card-body p-0">
                    <div class="row p-2">
                        <a href='profile.php?username=name' class='col-6 col-lg-3 col-md-4 col-sm-3 d-flex flex-column'>
                            <div class='rounded-circle mx-auto shadow  mb-1' style='overflow: hidden; width: 100px; height: 100px;'>
                                <img src='/img/avatar.png' class='rounded-circle zoom' width='100px' height='100px' alt=''>
                            </div>
                            <p class='text-center text-dark my-auto' id='user-name-style'><b>name</b></p>
                        </a>
                        <a href='profile.php?username=name' class='col-6 col-lg-3 col-md-4 col-sm-3 d-flex flex-column'>
                            <div class='rounded-circle mx-auto shadow  mb-1' style='overflow: hidden; width: 100px; height: 100px;'>
                                <img src='/img/avatar.png' class='rounded-circle zoom' width='100px' height='100px' alt=''>
                            </div>
                            <p class='text-center text-dark my-auto' id='user-name-style'><b>name</b></p>
                        </a>
                        <a href='profile.php?username=name' class='col-6 col-lg-3 col-md-4 col-sm-3 d-flex flex-column'>
                            <div class='rounded-circle mx-auto shadow  mb-1' style='overflow: hidden; width: 100px; height: 100px;'>
                                <img src='/img/avatar.png' class='rounded-circle zoom' width='100px' height='100px' alt=''>
                            </div>
                            <p class='text-center text-dark my-auto' id='user-name-style'><b>name</b></p>
                        </a>
                        <a href='profile.php?username=name' class='col-6 col-lg-3 col-md-4 col-sm-3 d-flex flex-column'>
                            <div class='rounded-circle mx-auto shadow  mb-1' style='overflow: hidden; width: 100px; height: 100px;'>
                                <img src='/img/avatar.png' class='rounded-circle zoom' width='100px' height='100px' alt=''>
                            </div>
                            <p class='text-center text-dark my-auto' id='user-name-style'><b>name</b></p>
                        </a>
                    </div>
                    <!-- /.users list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="users.php">مشاهده همه کاربران</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <!-- PRODUCT LIST -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">محصولات تازه اضافه شده</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- product -->
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                        <li class="item">
                            <a href="product.php" class="product-title">نام محصول
                                <span class="badge badge-warning float-left mx-2 mt-2 p-2">25 دلار</span></a>
                            <span class="product-description">دسته بندی محصول</span>
                        </li>
                        <li class="item">
                            <a href="product.php" class="product-title">نام محصول
                                <span class="badge badge-warning float-left mx-2 mt-2 p-2">25 دلار</span></a>
                            <span class="product-description">دسته بندی محصول</span>
                        </li>
                        <li class="item">
                            <a href="product.php" class="product-title">نام محصول
                                <span class="badge badge-warning float-left mx-2 mt-2 p-2">25 دلار</span></a>
                            <span class="product-description">دسته بندی محصول</span>
                        </li>

                        <!-- /.product -->
                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="product.php" class="uppercase">نمایش همه محصولات</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
