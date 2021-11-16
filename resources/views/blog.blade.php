@extends('layouts.master')

@section('style','blog')

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
        <a href="page-404" class="d-inline ml-2 my-auto text-dark"><i class="fa fa-search"></i>
        </a>
        <input
            type="search"
            class="form-control dr border-0"
            placeholder="جستجو در سایت"
        />
    </form>
    <div class="container-fluid d-flex justify-content-center container row mx-auto flex-row-reverse">

        <!-- start aside -->
        <div class="aside mt-2 mb-4 col-xl-3 w-100">
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
                <a href="page-404" class="my-auto ml-2 text-dark"
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
                        <a href="page-404" class="nav-link text-dark"><p>اخبار و اطلاعات</p> </a>
                    </li>
                    <li class="nav-item d-flex mx-2 font-sm">
                        <i class="fa fa-circle mt-3"></i>
                        <a href="page-404" class="nav-link text-dark"><p>آموزش ها</p> </a>
                    </li>
                    <li class="nav-item d-flex mx-2 font-sm">
                        <i class="fa fa-circle mt-3"></i>
                        <a href="page-404" class="nav-link text-dark"><p>سوالات و مشکلات</p> </a>
                    </li>
                    <li class="nav-item d-flex mx-2 font-sm">
                        <i class="fa fa-circle mt-3"></i>
                        <a href="contact" class="nav-link text-dark"><p>ارتباط با مدیریت</p> </a>
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
                                <a href="blog-single" class="text-dark dr"
                                ><p>تمام خدمات سایت بدون هیج هزینه...</p></a
                                >
                                <p>
                                    <small class="text-secondary mb-3"
                                    >معین اکبری-یکشنبه 25 دی 1395</small
                                    >
                                </p>
                            </div>
                            <a href="blog-single" class="fluid rounded-circle my-auto mx-2"
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
                                <a href="blog-single" class="text-dark dr"
                                ><p>تمام خدمات سایت بدون هیج هزینه...</p></a
                                >
                                <p>
                                    <small class="text-secondary mb-3"
                                    >معین اکبری-یکشنبه 25 دی 1395</small
                                    >
                                </p>
                            </div>

                            <a href="blog-single" class="fluid rounded-circle mx-2 my-auto">
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
                                <a href="blog-single" class="text-dark dr"
                                ><p>تمام خدمات سایت بدون هیج هزینه...</p></a
                                >
                                <p>
                                    <small class="text-secondary mb-3"
                                    >معین اکبری-یکشنبه 25 دی 1395</small
                                    >
                                </p>
                            </div>

                            <a href="blog-single" class="fluid rounded-circle mx-2 my-auto">
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
                                <a href="blog-single" class="text-dark dr"
                                ><p>تمام خدمات سایت بدون هیج هزینه...</p></a
                                >
                                <p>
                                    <small class="text-secondary mb-3"
                                    >معین اکبری-یکشنبه 25 دی 1395</small
                                    >
                                </p>
                            </div>

                            <a href="blog-single" class="fluid rounded-circle mx-2 my-auto">
                                <img
                                    class=" zoom img-fluid"
                                    width="70px"
                                    height="70px"
                                    src="img/blog-img/bitcoin.png"
                                    alt=""
                                /></a>
                        </div>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item px-3 hover-lightgray">
                        <a href="blog-single" class="nav-link text-dark">
                            <p class="text-center mb-1 dr">مشاهده سایر مطالب...</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end favorite -->
        </div>

        <!-- end aside -->


        <!-- start content -->
        <div class="content col-xl-9 w-100 p-0">
            <div class="media-parent shadow my-3 bg-white rounded pt-1 px-1">
                <div class="media-header bg-primary text-light rounded p-3">
                    <p class="my-auto">چه بخت بلندی چه ماهی چه ماهی چه حال عجیبی چه حال مستی...</p>
                </div>
                <div class="media row dr px-3">
                    <a href="page" class="mt-3 col-lg-2"><img
                            src="img/blog-img/first-img.jpg"
                            alt="first-img"
                            class="img-fluid w-100"
                        /></a>
                    <div
                        class="
                  media-body
                  mt-2
                  col-lg-10
                  d-flex
                  flex-column
                  justify-content-between
                "
                    >
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگر ها و متون بلکه روزنامه و
                            مجله در ستون و سطر آنچنان که آینده شناخت فراوان جامعه و
                            متخصصان را می طلبد
                        </p>
                        <div class="row mt-5 dr bg-lightgray my-auto py-1 rounded ">
                            <div
                                class="
                      d-flex
                      justify-content-center
                      align-items-center

                      col-xl
                      my-1
                      flex-row-reverse
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
                      col-xl
                      my-1
                      flex-row-reverse
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
                      col-xl
                      my-1
                      flex-row-reverse
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
                      col-xl
                      my-1
                      flex-row-reverse
                    "
                            >
                                <p class="my-auto">74 بازدید</p>
                                <i
                                    class="fa fa-eye text-primary my-auto ml-1"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <a href="page" class="btn text-white bg-green mx-4 px-4 col-xl">
                                ادامه مطلب
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-parent shadow my-3 bg-white rounded pt-1 px-1">
                <div class="media-header bg-primary text-light rounded p-3">
                    <p class="my-auto">چه بخت بلندی چه ماهی چه ماهی چه حال عجیبی چه حال مستی...</p>
                </div>
                <div class="media row dr px-3">
                    <a href="page" class="mt-3 col-lg-2"><img
                            src="img/blog-img/second-img.jpg"
                            alt="first-img"
                            class="img-fluid w-100"
                        /></a>
                    <div
                        class="
                  media-body
                  mt-2
                  col-lg-10
                  d-flex
                  flex-column
                  justify-content-between
                "
                    >
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگر ها و متون بلکه روزنامه و
                            مجله در ستون و سطر آنچنان که آینده شناخت فراوان جامعه و
                            متخصصان را می طلبد
                        </p>
                        <div class="row mt-5 dr bg-lightgray my-auto py-1 rounded ">
                            <div
                                class="
                      d-flex
                      justify-content-center
                      align-items-center

                      col-xl
                      my-1
                      flex-row-reverse
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
                      col-xl
                      my-1
                      flex-row-reverse
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
                      col-xl
                      my-1
                      flex-row-reverse
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
                      col-xl
                      my-1
                      flex-row-reverse
                    "
                            >
                                <p class="my-auto">74 بازدید</p>
                                <i
                                    class="fa fa-eye text-primary my-auto ml-1"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <a href="page" class="btn text-white bg-green mx-4 px-4 col-xl">
                                ادامه مطلب
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-parent shadow my-3 bg-white rounded pt-1 px-1">
                <div class="media-header bg-primary text-light rounded p-3">
                    <p class="my-auto">چه بخت بلندی چه ماهی چه ماهی چه حال عجیبی چه حال مستی...</p>
                </div>
                <div class="media row dr px-3">
                    <a href="page" class="mt-3 col-lg-2"><img
                            src="img/blog-img/third-img.jpg"
                            alt="first-img"
                            class="img-fluid w-100"
                        /></a>
                    <div
                        class="
                  media-body
                  mt-2
                  col-lg-10
                  d-flex
                  flex-column
                  justify-content-between
                "
                    >
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگر ها و متون بلکه روزنامه و
                            مجله در ستون و سطر آنچنان که آینده شناخت فراوان جامعه و
                            متخصصان را می طلبد
                        </p>
                        <div class="row mt-5 dr bg-lightgray my-auto py-1 rounded ">
                            <div
                                class="
                      d-flex
                      justify-content-center
                      align-items-center

                      col-xl
                      my-1
                      flex-row-reverse
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
                      col-xl
                      my-1
                      flex-row-reverse
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
                      col-xl
                      my-1
                      flex-row-reverse
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
                      col-xl
                      my-1
                      flex-row-reverse
                    "
                            >
                                <p class="my-auto">74 بازدید</p>
                                <i
                                    class="fa fa-eye text-primary my-auto ml-1"
                                    aria-hidden="true"
                                ></i>
                            </div>
                            <a href="page" class="btn text-white bg-green mx-4 px-4 col-xl">
                                ادامه مطلب
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mx-2">
                <ul class="pagination">
                    <li class="page-item sm mx-1">
                        <a href="page-404" class="page-link circle hover-blue-gray text-light px-2"><<</a>
                    </li>
                    <li class="page-item sm mx-1">
                        <a href="page-404" class="page-link circle px-2 hover-blue-gray text-light">>></a>
                    </li>
                </ul>
                <ul class="pagination dr ">
                    <li class="page-item mx-1"><a class="page-link rounded text-dark" href="#">1</a></li>
                    <li class="page-item mx-1 active"><a class="page-link rounded" href="#">2</a></li>
                    <li class="page-item mx-1"><a class="page-link rounded text-dark" href="#">3</a></li>
                    <li class="page-item mx-1"><a class="page-link rounded text-dark" href="#">4</a></li>
                    <li class="page-item mx-1">
                        <a class="page-link rounded text-dark" href="#">5</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end content -->


    </div>
@endsection
