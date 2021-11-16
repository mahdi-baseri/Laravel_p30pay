@extends('layouts.master')

@section('style','register')

@section('content')
    <div class="bg-white border-bottom">
        <div class="d-flex dr bg-white py-2 container">
            <i class="fa fa-map-marker-alt my-auto ml-2" style="color: gray;"></i>
            <p class="under-header my-auto">صفحه درحال سایت میباشد</p>
            <p class="under-header my-auto">موقعیت شما</p>
            <p></p>
        </div>
    </div>

    <div class="main container my-5 mx-auto shadow bg-white p-3">
        <div class="main-header">
            <div class="d-flex justify-content-end my-3">
                <h4>عضویت</h4>
                <i
                    class="far fa-user-circle my-auto ml-2"
                    style="font-size: xx-large"
                ></i>
            </div>
        </div>

        <div class="dropdown-divider"></div>

        <div class="content py-3">
            <div class="flex row mx-3">
                <div
                    class="article p-4 col-lg-6 mt-3"
                    style="
                background-color: #ffffe5;
                border: 2px solid #faf4d8;
                color: #a29972;
              "
                >
                    <h4>توضیحات دلخواه قبل از ثبت نام</h4>
                    <p class="mt-3 dr justify" style="text-align: justify; line-height: 2;">
                        لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی
                        و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.
                        طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن
                        صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده
                        می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و
                        ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از
                        متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا
                        صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از
                        اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و
                        اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که طراحان
                        عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و
                        در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با
                        استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی
                        می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
                    </p>
                </div>
                <div class="form col-lg-6 dr mt-3">
                    <h4>مشخصات اکانت <small>(تمامی موارد الزامی میباشد )</small></h4>
                    <input
                        type="email"
                        placeholder="ایمل خود ار وارد کنید"
                        class="p-4 mt-4 form-control bg-light shadow-sm"
                    />
                    <div class="row mx-auto">
                        <input
                            type="password"
                            placeholder="رمز عبور"
                            class="col-lg form-control bg-light shadow-sm m-1 mt-3 p-4"
                        />
                        <input
                            type="password"
                            placeholder="تکرار رمز عبور"
                            class="col-lg form-control bg-light shadow-sm m-1 mt-3 p-4"
                        />
                    </div>
                    <h4 class="my-3">
                        مشخصات اکانت <small>( تمامی موارد الزامی میباشد )</small>
                    </h4>
                    <input
                        type="text"
                        placeholder="نام و نام خانوادگی"
                        class="form-control bg-light shadow-sm p-4 mt-4"
                    />
                    <div class="row mx-auto">
                        <input
                            type="tel"
                            placeholder="موبایل"
                            class="col-lg form-control bg-light shadow-sm m-1 mt-3 p-4"
                        />
                        <input
                            type="tel"
                            placeholder="تلفن ثابت"
                            class="col-lg form-control bg-light shadow-sm m-1 mt-3 p-4"
                        />
                    </div>


                    <form>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
                            <label class="custom-control-label" for="customCheck2">قوانین سایت را خواندم و میپذیرم
                                <a href="page-404.html" class="nav-link d-inline" style="color: tomato"
                                >( مشاهده قوانین )</a
                                ></label>
                        </div>
                    </form>


                    <div class="my-3 mx-auto">
                        <h4>
                            <small>کد نمایش داده شده را در کادر وارد نمایید : </small>
                        </h4>
                        <div class="d-flex justify-content-around">
                            <input type="number" class="form-control bg-light col-4 mt-3 mx-2">
                            <img src="img/blog-single/code-form.jpg" alt="" class="mt-3 img-fluid">
                        </div>
                    </div>

                    <button
                        type="submit"
                        class="w-100 py-2 btn text-light"
                        style="background-color: #81c33a"
                    >
                        ثبت نام
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
