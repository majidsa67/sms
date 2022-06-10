@extends('layouts.masterPages.login')
@section('content')

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>

<!-- Begin page -->

<div style="padding-top: 20px">


    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-1">
                <div class="text-left">
                    <div>
                        <a href="index-2.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="28" alt="logo"></a>
                    </div>
                    <h5 class="font-14 text-muted mb-4">ثبت نام در انجمن</h5>
                    <p class="text-muted mb-4">جهت عضویت در انجمن صنفی ژئوتکنیک و اعتبار سنجی شماره خود را وارد کنید و وارد صفحه ثبت نام شوید .</p>


                </div>
            </div>
            <div class="col-lg-5">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="p-2">
                            @include('layouts.partials.auth.alert')
                            <h4 class="text-muted float-right font-18 mt-4">اعتبار سنجی</h4>

                            <div>
                                <a href="index-2.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="28" alt="logo"></a>
                            </div>
                        </div>

                        <div class="p-2">
                            <form class="form-horizontal m-t-20" id="login-form" action="{{ route('doLoginPhone') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>شماره موبایل خود را وارد کنید</label>
                                    <div>
                                        <input class="form-control" name="phone" id="phone" required type="text range" min="11"
                                               max="11" placeholder=""/>
                                    </div>
                                </div>
                                <div class="form-group text-center row m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="submit" value="submit">دریافت کد تایید</button>
                                    </div>
                                </div>
                            </form>
                            <form action="{{ route('doVerify') }}" method="post" id="login-form">
                                @csrf
                                <div class="form-group">
                                    <label>کد دریافت شده را وارد کنید</label>
                                    <div>
                                        <input class="form-control"  name="code" id="code" required type="text range" min="11"
                                               max="11" placeholder=""/>
                                    </div>
                                </div>
                                <div class="form-group text-center row m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="submit" value="submit">ورود به صفحه نهایی</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>

@endsection
