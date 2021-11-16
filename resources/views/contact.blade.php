@extends('layouts.master')

@section('style','contact')

@section('content')

        <div class="bg-white border-bottom">
            <div class="d-flex dr bg-white py-2 container">
                <i class="fa fa-map-marker-alt my-auto ml-2" style="color: gray;"></i>
                <p class="under-header my-auto">صفحه درحال سایت میباشد</p>
                <p class="under-header my-auto">موقعیت شما</p>
                <p></p>
            </div>
        </div>

        <div class="container mx-auto bg-white my-5 rounded p-4">
            <!-- start contact header -->
            <div class="content-headear mb-3 d-flex flex-row-reverse">
                <img src="img/blog-single/monitor-icon.png" alt="monitor-icon" class="img-fluid ml-2 my-auto" width="25px" height="25px">
                <h4 class=""><small> ارتباط با ما</small></h4>
            </div>
            <!-- end contact header -->

            <div class="dropdown-divider"></div>

            <!-- start content main -->
            <div class="content-main my-4 d-flex flex-column align-items-center">
                <h3>دفتر شیراز</h3>
                <p class="dr">
                    200 متری سینما سعدی ، خیابان اردیبهشت غربی ، ساختمان 57 طبقه 3 واحد
                    5
                </p>
                <a href="#" class="nav-link text-dark bg-light"
                ><p class="my-auto"><b> SUPPORT [@] P30PAY.COM </b></p></a
                >
            </div>
            <!-- end content main -->

            <div class="dropdown-divider"></div>

            <!-- start content footer -->
            <div class="content-footer row">
                <div class="col-lg-6 mt-4">
                    <iframe
                        class="mx-auto"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.898221784004!2d51.42691600000003!3d35.679508000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQwJzQ2LjIiTiA1McKwMjUnMzYuOSJF!5e0!3m2!1sen!2s!4v1627506260088!5m2!1sen!2s"
                        width="100%"
                        height="100%"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                    ></iframe>
                </div>

                <form class="dr col-lg-6 mt-4"  action="#" class="">

                    <input
                        type="text"
                        placeholder="نام و نام خانوادگی شما"
                        class="form-control bg-light"
                    />
                        <div class="row">
                            <div class="col-lg-6 mt-3">
                                <input
                                    type="email"
                                    class="form-control bg-light"
                                    placeholder="ایمیل شما"
                                />
                            </div>
                            <div class="col-lg-6 mt-3">
                                <input
                                    type="text"
                                    class="form-control bg-light"
                                    placeholder="آدرس سایت شما ( اختیاری )"
                                />
                            </div>
                        </div>
                        <textarea
                            class="form-control bg-light mt-3"
                            rows="8"
                            placeholder="توضیحات شما"
                        ></textarea>
                            <p class="my-auto py-3">کد نمایش شده را در کادر وارد نمایید :</p>
                            <div class="d-flex justify-content-around">
                                <input type="number" class="form-control bg-light col-4 mt-3 mx-2">
                                <img src="img/blog-single/code-form.jpg" alt="" class="img-fluid mt-3">

                            </div>

                            <button
                                id="button-contact"
                                class="form-control text-light mt-3 py-2"
                            >
                                ارسال نظر
                            </button>
                </form>
                <!-- end content footer -->
            </div>
        </div>
@endsection
