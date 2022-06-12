@extends('layouts.masterPages.zinzer')
@section('content')
{{--component test--}}

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
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
@include('layouts.partials.zinzer.sidebar')
<!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <div class="topbar-left	d-none d-lg-block">
                    <div class="text-center">
                        <a href="index-2.html" class="logo"><img src="assets/images/logo.png" height="22" alt="logo"></a>
                    </div>
                </div>

                <nav class="navbar-custom">

                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="جستجو" />
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                <i class="mdi mdi-magnify noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg dropdown-menu-animated">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>اعلانات (3)</h5>
                                </div>

                                <div class="slimscroll-noti">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>سفارش شما قرار داده شده است</b><span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details"><b>پیام جدید دریافت شد</b><span class="text-muted">شما 87 پیام خوانده نشده دارید</span></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                        <p class="notify-details"><b>مورد شما حمل می شود</b><span class="text-muted">این یک واقعیت طولانی است که خواننده خواهد بود</span></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details"><b>پیام جدید دریافت شد</b><span class="text-muted">شما 87 پیام خوانده نشده دارید</span></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>سفارش شما قرار داده شده است</b><span class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span></p>
                                    </a>

                                </div>


                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-all">
                                    مشاهده همه
                                </a>

                            </div>
                        </li>


                        <li class="list-inline-item dropdown notification-list nav-user">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                <span class="d-none d-md-inline-block ml-1">آقای میهن وبمستر <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> پروفایل</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> کیف پول من</a>

                                <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> ارسال تیکت </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> خروج</a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>


                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h4 class="page-title m-0">ثبت پرونده ژئوتکنیک</h4>
                                    </div>

                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end page-title-box -->
                        </div>
                    </div>
                    <!-- end page title -->

                </div><!-- container fluid -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

        <div style="padding-right: 20px;padding-left: 20px;font-size: larger">
            <div class="alert alert-info" role="alert" >
                <strong><b>صورتحساب</b></strong>
            </div>
        </div>
        <!-- ریز قیمت ها -->
    {{--            <x-bill-component></x-bill-component>--}}
    <!-- ریز قیمت ها پایان-->


        <!-- صورت هزینه بخش مطالعات -->
    {{--            <x-total-cost-component></x-total-cost-component>--}}
    <!-- پایان صورت هزینه بخش مطالعات  -->


        <!-- صورت هزینه بخش مطالعات -->
        <x-department-cards-component></x-department-cards-component>
        <!-- پایان صورت هزینه بخش مطالعات  -->


        <!-- صورت هزینه بخش اعضا -->
        <x-department-members-component></x-department-members-component>
        <!-- پایان صورت هزینه بخش اعضا  -->


        <div>
            <div class="card mb-0">
                <div class="card-body">

                    <div class="p-2">
                        <form class="form-horizontal m-t-20" method="post" action="https://themesdesign.in/zinzer_1/vertical-rtl/index.html" enctype="multipart/form-data">

                            <x-upload-documents-component></x-upload-documents-component>

                            <!-- Loader -->
                            <x-owner-profile-component></x-owner-profile-component>
                            <!-- /.modal -->

                            <div class="modal bs-example-modal" tabindex="-1" role="dialog" style="padding-top: 20px">
                                <div role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0">احراز هویت مالک</h5>
                                        </div>
                                        <div class="form-group row" style="padding-right: 10px;padding-left: 10px">
                                            <div class="col-sm-4">
                                                <div>
                                                    <label> شماره تماس مالک</label>
                                                    <div>
                                                        <input class="form-control" type="number" value="" id="example-number-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4" style="padding-top: 25px">
                                                <div>
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" >تایید کد</button>
                                                </div>
                                            </div>
                                            <div col-sm-4>

                                            </div>
                                            <div class="col-sm-4">
                                                <div>
                                                    <label>کد تایید</label>
                                                    <div>
                                                        <input class="form-control" type="number" value="" id="example-number-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">ثبت نام</button>
                                </div>
                            </div>

                        </form>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20 text-center">
                                <a href="pages-login.html" class="text-muted">در حال حاضر حساب کاربری دارید؟</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <span class="d-none d-md-inline-block"></span>
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->

@endsection
