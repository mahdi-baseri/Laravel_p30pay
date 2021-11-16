@extends('layouts.master')

@section('style','page')

@section('content')
    <div class="bg-white border-bottom">
        <div class="d-flex dr bg-white py-2 container">
            <i class="fa fa-map-marker-alt my-auto ml-2" style="color: gray;"></i>
            <p class="under-header my-auto">صفحه درحال سایت میباشد</p>
            <p class="under-header my-auto">موقعیت شما</p>
            <p></p>
        </div>
    </div>

    <div class="main container">

        <div class="content m-3 p-4 shadow bg-white">
            <div>
                <h4 class="dr text-primary mb-4">
                    <small>
                        چه بخت بلندی چه ماهی چه ماهی چه حال عجیبی چه حال مستی .. چه خوش
                        در دل من نشستی..</small
                    >
                </h4>
            </div>

            <div class="dropdown-divider"></div>

            <div>
                <p class="justify dr my-4" style="line-height: 1.7">
                    لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و
                    بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح
                    گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و
                    ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید،
                    تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.
                    معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و
                    بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند
                    که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد
                    چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته
                    شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه
                    رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی
                    وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه
                    گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به
                    پایان برند.
                </p>

                <img
                    src="img/blog-single/characters.jpg"
                    alt="characters"
                    class="img-fluid mx-auto w-100 px-5"
                />
                <p class="justify dr my-4" style="line-height: 1.7">
                    لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و
                    بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح
                    گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و
                    ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید،
                    تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.
                    معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و
                    بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند
                    که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار گیرد
                    چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته
                    شده‌است. از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه
                    رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی
                    وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه
                    گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به
                    پایان برند.
                </p>

                <div class="mt-3 d-flex my-auto pb-2 row dr">
                    <div
                        class="
                  d-flex
                  justify-content-center
                  align-items-center
                  mt-2
                  flex-row-reverse
                  col-lg-2
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
                  border-right
                  mt-2
                  flex-row-reverse
                  col-lg-2
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
                  border-right
                  mt-2
                  flex-row-reverse
                  col-lg-2
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
                  border-right
                  mt-2
                  flex-row-reverse
                  col-lg-2
                "
                    >
                        <p class="my-auto">74 بازدید</p>
                        <i
                            class="fa fa-eye text-primary my-auto ml-1"
                            aria-hidden="true"
                        ></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- start form -->
        <div class="form shadow m-3 p-3 bg-white">
            <div class="d-flex justify-content-end">
                <h4>ارسال نظر</h4>
                <img
                    src="img/blog-single/speech-bubble-icon.png"
                    alt="speech-bubble-icon"
                    class="img-fluid d-inline my-auto ml-2"
                    width="30px"
                    height="15px"
                />
            </div>
            <div class="row dr">
                <form action="#" class="col-lg-4">
                    <input
                        type="text"
                        class="form-control shadow-sm p-4 mt-3 text-center"
                        placeholder="نام و نام خانوادگی"
                    />
                    <input
                        type="text"
                        class="form-control shadow-sm p-4 mt-3 text-center"
                        placeholder="ایمیل شما"
                    />
                    <input
                        type="text"
                        class="form-control shadow-sm p-4 mt-3 text-center"
                        placeholder="آدرس سایت ( اختیاری ) "
                    />
                </form>
                <form action="#" class="col-lg-8">
              <textarea
                  name="explain"
                  id="explain"
                  cols="68"
                  rows="6"
                  class="form-control shadow-sm px-2 py-4 mt-3"
                  placeholder="توضیحات شما"
              ></textarea>
                </form>
            </div>
            <div
                class="
              mt-3
              d-flex
              justify-content-between
              flex-wrap flex-row-reverse
              row
              mx-2
            "
            >
                <form action="#" class="my-auto col-lg-8">
                    <label for="left-check mx-2"
                    >عضویت در خبرنامه سایت
                        <input type="checkbox" id="left-check" />
                    </label>
                    <label for="right-check" class="mx-2"
                    >.پیگیر این موضوع شوید
                        <input type="checkbox" id="right-check" class="" />
                    </label>
                </form>
                <button
                    type="submit"
                    class="btn text-light col-lg-4"
                    style="
                background-color: #81c33a;
                padding: 4px 60px;
                border-radius: 2px;
              "
                >
                    ارسال نظر
                </button>
            </div>
        </div>
        <!-- end form -->
    </div>
@endsection
