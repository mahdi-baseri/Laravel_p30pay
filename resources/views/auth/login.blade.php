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
                <div class="col-lg-6 ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group" dir="rtl">
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('آدرس ایمیل') }}</label>--}}

                                <input id="email" type="email" class="form-control mt-3 py-4 bg-light @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ایمیل"  autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group" dir="rtl">
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>--}}

                                <input id="password" type="password" class="form-control mt-3 py-4 bg-light" placeholder="رمز عبور" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group ">
                            <div >
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('من را به خاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('ورود') }}--}}
{{--                                </button>--}}
                                <div class="row mx-auto">
                                    <button
                                        class="btn bg-success text-light col-lg mx-1 mt-2"
                                        type="submit"
                                    >
                                        {{__('ورود به سایت')}}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn col-lg mx-1 gray mt-2"  href="{{ route('password.request') }}">
                                            {{__('رمز را فراموش کردم')}}
                                        </a>
                                    @endif
                                </div>

{{--                            @if (Route::has('password.request'))--}}
{{--                                <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                    {{ __('فراموشی رمز عبور') }}--}}
{{--                                </a>--}}
{{--                            @endif--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
