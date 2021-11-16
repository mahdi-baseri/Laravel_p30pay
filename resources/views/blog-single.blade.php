@extends('layouts.master')

@section('style','blog-single')

@section('content')
    <form
        action="#"
        id="d-none"
        class="
       container
       mx-auto
       bg-white
       mt-3
       shadow
       px-3
       p-1
       rounded
       d-flex
       flex-row-reverse
       border-bottom
     "
    >
        <a href="page-404.html" class="d-inline ml-2 my-auto text-dark"><i class="fa fa-search"></i>
        </a>
        <input
            type="search"
            class="form-control dr border-0"
            placeholder="جستجو در سایت"
        />
    </form>
    <div class="container-fluid d-flex justify-content-center container row mx-auto flex-row-reverse">

        <!-- start aside -->
        <div class="aside mx-auto mt-2 mb-4 col-xl-3">
            <form
                action="#"
                id="d-none-r"
                class="
         bg-white
           form
           shadow
           my-2
           mb-1
           px-3
           p-1
           rounded
           d-flex
           flex-row-reverse
           border-bottom
         "
            >
                <a href="page-404.html" class="my-auto ml-2 text-dark"
                ><i class="fa fa-search"></i
                    ></a>
                <input
                    type="search"
                    class="form-control dr border-0"
                    placeholder="جستجو در سایت"
                />
            </form>
            <!-- start group -->
            <div class="group dr my-3 bg-white shadow">
                <div class="bg-dark p-2 d-flex">
                    <i
                        class="fa fa-bars text-light my-auto ml-2"
                        aria-hidden="true"
                    ></i>
                    <p class="my-auto text-light">دسته بندی ها</p>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item d-flex mx-2 font-sm">
                        <i class="fa fa-circle mt-3"></i>
                        <a href="page-404.html" class="nav-link text-dark"><p>اخبار و اطلاعات</p> </a>
                    </li>
                    <li class="nav-item d-flex mx-2 font-sm">
                        <i class="fa fa-circle mt-3"></i>
                        <a href="page-404.html" class="nav-link text-dark"><p>آموزش ها</p> </a>
                    </li>
                    <li class="nav-item d-flex mx-2 font-sm">
                        <i class="fa fa-circle mt-3"></i>
                        <a href="page-404.html" class="nav-link text-dark"><p>سوالات و مشکلات</p> </a>
                    </li>
                    <li class="nav-item d-flex mx-2 font-sm">
                        <i class="fa fa-circle mt-3"></i>
                        <a href="contact.html" class="nav-link text-dark"><p>ارتباط با مدیریت</p> </a>
                    </li>
                </ul>
            </div>
            <!-- end group -->

            <!-- start favorite -->
            <div class="shadow my-3 bg-white">
                <div class="bg-dark py-1 px-2 d-flex flex-row-reverse">
                    <img
                        class="img-fluid my-auto ml-2"
                        src="img/blog-img/camera.svg"
                        alt="camera"
                        width="25px"
                        height="25px"
                    />
                    <p class="text-light my-auto py-1">محبوبترین ها</p>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item py-2 p-3 hover-lightgray">
                        <div class="media ">
                            <div class="media-body">
                                <a href="page-404.html" class="text-dark dr"
                                ><p>تمام خدمات سایت بدون هیج هزینه...</p></a
                                >
                                <p>
                                    <small class="text-secondary mb-3"
                                    >معین اکبری-یکشنبه 25 دی 1395</small
                                    >
                                </p>
                            </div>
                            <a href="page-404.html" class="fluid rounded-circle my-auto mx-2"
                            ><img
                                    class=" zoom img-fluid"
                                    width="70px"
                                    height="70px"
                                    src="img/blog-img/girl.png"
                                    alt=""
                                /></a>
                        </div>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item py-2 p-3 hover-lightgray">
                        <div class="media ">
                            <div class="media-body">
                                <a href="page-404.html" class="text-dark dr"
                                ><p>تمام خدمات سایت بدون هیج هزینه...</p></a
                                >
                                <p>
                                    <small class="text-secondary mb-3"
                                    >معین اکبری-یکشنبه 25 دی 1395</small
                                    >
                                </p>
                            </div>

                            <a href="page-404.html" class="fluid rounded-circle mx-2 my-auto">
                                <img
                                    class=" zoom img-fluid"
                                    width="70px"
                                    height="70px"
                                    src="img/blog-img/bitcoin-2.png"
                                    alt=""
                                /></a>
                        </div>
                    </li>
                    <div class="dropdown-divider"></div>

                    <li class="nav-item py-2 p-3 hover-lightgray">
                        <div class="media ">
                            <div class="media-body">
                                <a href="page-404.html" class="text-dark dr"
                                ><p>تمام خدمات سایت بدون هیج هزینه...</p></a
                                >
                                <p>
                                    <small class="text-secondary mb-3"
                                    >معین اکبری-یکشنبه 25 دی 1395</small
                                    >
                                </p>
                            </div>

                            <a href="page-404.html" class="fluid rounded-circle mx-2 my-auto">
                                <img
                                    class=" zoom img-fluid"
                                    width="70px"
                                    height="70px"
                                    src="img/blog-img/workplace.png"
                                    alt=""
                                /></a>
                        </div>
                    </li>
                    <div class="dropdown-divider"></div>

                    <li class="nav-item py-2 p-3 hover-lightgray">
                        <div class="media ">
                            <div class="media-body">
                                <a href="page-404.html" class="text-dark dr"
                                ><p>تمام خدمات سایت بدون هیج هزینه...</p></a
                                >
                                <p>
                                    <small class="text-secondary mb-3"
                                    >معین اکبری-یکشنبه 25 دی 1395</small
                                    >
                                </p>
                            </div>

                            <a href="page-404.html" class="fluid rounded-circle mx-2 my-auto">
                                <img
                                    class=" zoom img-fluid"
                                    width="70px"
                                    height="70px"
                                    src="img/blog-img/bitcoin.png"
                                    alt=""
                                /></a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end favorite -->
        </div>

        <!-- end aside -->

        <!-- start content -->
        <div class="content mx-auto col-xl-9 p-0">
            <div class="media-parent shadow pb-2 my-3 bg-white rounded p-1">
                <div class="media-header bg-primary text-light p-2 rounded">
                    <p class="my-auto p-2">...چه بخت بلندی چه ماهی چه ماهی چه حال عجیبی چه حال مستی</p>
                </div>
                <div class="media row dr p-2 px-3 mt-2 mx-auto">
                    <img
                        src="img/blog-single/characters.jpg"
                        alt="characters"
                        class="img-fluid mx-auto d-block"
                        width="100%"
                    />
                    <p class="mt-2">
                        <small style="color: lightgray"
                        >رابط کاربری این سایت توسط معین اکبری طراحی شده است .
                        </small>
                    </p>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                        استفاده از طراخان گرافیک است . چاپگرها و متون بلکه روزنامه و
                        مجله دو برای شرایط فعلی تکنولوژی مورد نیاز و کاربرد های متنوع با
                        هدف بهبود.
                    </p>
                    <div
                        class="w-100 d-flex p-4 my-4 flex-wrap"
                        style="border-style: dashed; border-color: lightgray"
                    >
                        <img
                            src="img/blog-single/cama.jpg"
                            alt="cama"
                            class="img-fluid my-auto m-3 mx-auto pb-2"
                            width="80px"
                            height="auto"
                        />
                        <p style="color: gray" class="my-auto col-lg">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراخان گرافیک است . چاپگرها و متون بلکه روزنامه و
                            مجله دو برای شرایط فعلی تکنولوژی مورد نیاز متنوع با هدف بهبود.
                        </p>

                    </div>

                    <p>
                        می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها
                        سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده و شرایط
                        سخت تایپ به پایان رسد و زمان مورد نیاز گیرد.
                    </p>

                    <ul class="mr-4" style="list-style-type: none">
                        <li class="nav-item d-flex">
                            <i
                                class="fa fa-circle my-auto"
                                style="color: blue; font-size: small"
                            ></i>
                            <a href="#" class="nav-link text-dark"
                            >سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
                            </a>
                        </li>
                        <li class="nav-item d-flex">
                            <i
                                class="fa fa-circle my-auto"
                                style="color: blue; font-size: small"
                            ></i>
                            <a href="#" class="nav-link text-dark"
                            >برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع</a
                            >
                        </li>
                    </ul>

                    <p>
                        و زمان مورد نیاز شامل حروفچینی دستاورد های اصلی و جوابگوی سوالات
                        پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                    <div
                        class="
              d-flex
              justify-content-between
              w-100
              flex-wrap
              row
              mx-auto
            "
                    >
                        <div class="mt-3 d-flex my-auto pb-2 row col-lg-8">
                            <div
                                class="
                  d-flex
                  justify-content-center
                  align-items-center
                  mt-2
                  flex-row-reverse
                  col-lg-3
                "
                            >
                                <p class="my-auto">معین کبری</p>
                                <i
                                    class="fas fa-user-alt text-primary my-auto ml-1"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <div
                                class="
                  d-flex
                  justify-content-center
                  align-items-center
                  border-none
                  mt-2
                  flex-row-reverse
                  col-lg-3
                "
                            >
                                <p class="my-auto">فروردین 95</p>
                                <i
                                    class="fa fa-clock-o text-primary my-auto ml-1"
                                    aria-hidden="true"
                                ></i>
                            </div>

                            <div
                                class="
                  d-flex
                  justify-content-center
                  align-items-center
                  border-none
                  mt-2
                  flex-row-reverse
                  col-lg-3
                "
                            >
                                <p class="my-auto">3 نظر</p>
                                <i
                                    class="fas fa-comment-alt text-primary my-auto ml-1"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <div
                                class="
                  d-flex
                  justify-content-center
                  align-items-center
                  border-none
                  mt-2
                  flex-row-reverse
                  col-lg-3
                "
                            >
                                <p class="my-auto">74 بازدید</p>
                                <i
                                    class="fa fa-eye text-primary my-auto ml-1"
                                    aria-hidden="true"
                                ></i>
                            </div>
                        </div>
                        <!-- icons -->
                        <div
                            class="
                d-flex
                my-auto
                col-lg-2
                align-content-center
                justify-content-center
                pl-4
              "
                            style="font-size: 35px"
                        >
                            <a href="#"
                            ><i
                                    class="fa fa-google-plus-square mx-1 mt-2 zoom"
                                    aria-hidden="true"
                                    style="color: tomato"
                                ></i
                                ></a>
                            <a href="#"
                            ><i
                                    class="fa fa-facebook-square mx-1 mt-2 zoom"
                                    aria-hidden="true"
                                    style="color: blue"
                                ></i
                                ></a>
                            <a href="#"
                            ><i
                                    class="fa fa-twitter-square mx-1 mt-2 zoom"
                                    aria-hidden="true"
                                    style="color: skyblue"
                                ></i
                                ></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="media-parent shadow pb-2 my-3 mt-4 bg-white p-1 rounded">
                <div class="d-flex justify-content-end media-header bg-primary text-light p-3 rounded">
                    <p class="my-auto">مطالب مرتبط</p>
                    <img src="img/blog-single/fountain-pen.png" alt="fountain-pen" width="20px" class="my-auto ml-1">
                </div>
                <div class=" d-flex flex-wrap mx-auto">
                    <div class="position-relative mt-2 mx-auto overlay-container">
                        <img src="img/blog-single/footer-left-img.jpg" alt="footer left img" class="img-fluid mx-auto">
                        <div class="overlay">
                            <p class="my-auto dr pt-5">این پست به صورت آزمایشی قرار گرفته است...</p>
                        </div>

                    </div>
                    <div class="position-relative mt-2 mx-auto overlay-container">
                        <img src="/img/blog-single/footer-center-img.jpg" alt="footer center img" class="img-fluid mx-auto">
                        <div class="overlay">
                            <p class="my-auto dr pt-5">آموزش خرید از وبسایت ما به چه صورت است ؟</p>
                        </div>

                    </div>
                    <div class="position-relative mt-2 mx-auto overlay-container">
                        <img src="img/blog-single/footer-right-img.jpg" alt="footer right img" class="img-fluid mx-auto">
                        <div class="overlay">
                            <p class="my-auto dr pt-5">پرفکت مانی یا وب مانی چه تفاوت هایی با یکدیگر دارند ؟</p>
                        </div>

                    </div>

                </div>
            </div>
            <div class="shadow my-3 p-3 d-column bg-white rounded">
                <h4 class="mx-auto my-2">برچسب ها </h4>
                <p class="bg-lightgray px-2 py-1 d-inline zoom mx-1 my-2 mx-auto">تست برچسب ها</p>
                <p class="bg-lightgray px-2 py-1 d-inline zoom mx-1 my-2 mx-auto">معین اکبری</p>
                <p class="bg-lightgray px-2 py-1 d-inline zoom mx-1 my-2 mx-auto">طراحی سایت</p>
                <p class="bg-lightgray px-2 py-1 d-inline zoom mx-1 my-2 mx-auto">معینکو</p>
                <p class="bg-lightgray px-2 py-1 d-inline zoom mx-1 my-2 mx-auto">تست برچسب ها</p>
                <p class="bg-lightgray px-2 py-1 d-inline zoom mx-1 my-2 mx-auto">معین اکبری</p>
                <p class="bg-lightgray px-2 py-1 d-inline zoom mx-1 my-2 mx-auto">معینکو</p>



            </div>
        </div>
        <!-- end content -->


    </div>
@endsection
