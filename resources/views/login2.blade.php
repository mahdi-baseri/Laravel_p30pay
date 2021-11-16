@extends('layouts.master')

@section('style','login')

@section('content')
    <div class="bg-white border-bottom">
        <div class="d-flex dr bg-white py-2 container">
            <i class="fa fa-map-marker-alt my-auto ml-2" style="color: gray;"></i>
            <p class="under-header my-auto">صفحه درحال سایت میباشد</p>
            <p class="under-header my-auto">موقعیت شما</p>
            <p></p>
        </div>
    </div>
    <div
        class="main container m-3 mx-auto rounded"
        style="background-color: white"
    >
        <div class="py-2 d-flex flex-row-reverse">
            <i
                class="far fa-user-circle mt-2 ml-2"
                style="font-size: xx-large"
            ></i>
            <h3><small> ورود به پرتال</small></h3>
        </div>

        <div class="dropdown-divider"></div>
        <div class="row p-3 mx-auto">
            <div
                class="
              col-lg-6
              d-flex
              card
              flex-column
              align-items-center
              py-5
              mt-3
              hover-lightgray
            "
                style="border: 1px solid chartreuse"
            >
                <i
                    class="far fa-user mb-3"
                    style="font-size: 100px; color: chartreuse"
                ></i>
                <a
                    href="register"
                    class="text-dark card-link stretched-link"
                ><h4>
                        <small> حساب کاربری ندارید ؟ هم اکنون عضو شوید</small>
                    </h4></a
                >
            </div>
            <div class="col-lg-6 dr">
                <form action="#">
                    <input
                        type="text"
                        class="form-control py-4 mt-3 bg-light"
                        placeholder="نام کاربری"
                    />
                    <input
                        type="password"
                        class="form-control mt-3 py-4 bg-light"
                        placeholder="رمز عبور"
                    />
                    <div class="my-2">
                        <h4 class="my-auto py-3"><small>
                                کد نمایش داده شده را در کادر وارد نمایید :
                            </small></h4>
                        <div class="d-flex justify-content-around">
                            <input type="number" class="form-control col-4 mt-3 bg-light" />
                            <img
                                src="img/blog-single/code-form.jpg"
                                alt=""
                                class="img-fluid mt-3"
                            />
                        </div>
                    </div>
                    <form action="#">
                        <div class="row mx-2">
                            <button
                                class="btn bg-success text-light col-lg mx-1 mt-2"
                                type="button"
                            >
                                ورود به سایت
                            </button>
                            <button class="btn col-lg mx-1 gray mt-2">
                                رمز را فراموش کردم
                            </button>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>
@endsection
