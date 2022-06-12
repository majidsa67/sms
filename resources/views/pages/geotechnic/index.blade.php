@extends('layouts.masterPages.zinzer')
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
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="mdi mdi-close"></i>
            </button>

            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center">

                    <a href="index-2.html" class="logo"><img src="assets/images/logo_dark.png" height="20" alt="logo"></a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">اصلی</li>

                        <li>
                            <a href="index-2.html" class="waves-effect">
                                <i class="dripicons-home"></i>
                                <span> داشبورد <span class="badge badge-success badge-pill float-right">3</span></span>
                            </a>
                        </li>
                        <li>
                            <a href="Your-status.html" class="waves-effect">
                                <i class="dripicons-home"></i>
                                <span> وضیعیت شما در سیستم <span class="badge badge-success badge-pill float-right"></span></span>
                            </a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> مدیریت مالی </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="Transactions.html">تراکنش ها</a></li>
                                <li><a href="Deposit-requests.html">درخواست های واریزی</a></li>
                                <li><a href="wallet.html">کیف پول</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span> مدیریت پرونده ها </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="panel-parvandeh-geotechnic.html">ثبت پرونده ژئو تکنیک</a></li>
                                <li><a href="panel--Welding.html">ثبت پرونده جوش</a></li>
                                <li><a href="panel-Concrete.html">ثبت پرونده بتن</a></li>
                                <li><a href="panel-Registered.html">پرونده های ثبت شده</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="Polls-and-voting.html" class="waves-effect">
                                <i class="dripicons-align-center"></i>
                                <span> نظر سنجی و رای گیری <span class="badge badge-success badge-pill float-right"></span></span>
                            </a>
                        </li>
                        <li>
                            <a href="Transparency.html" class="waves-effect">
                                <i class="dripicons-broadcast"></i>
                                <span> شفافیت <span class="badge badge-success badge-pill float-right"></span></span>
                            </a>
                        </li>

                        <li>
                            <a href="Corrective-cases.html" class="waves-effect">
                                <i class="dripicons-brush"></i>
                                <span> موارد اصلاحی <span class="badge badge-success badge-pill float-right"></span></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
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
            <div class="row" style="padding-right: 20px;padding-left: 20px">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <div class="card m-b-30">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-dark mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th>شماره ثبت دستور نقشه</th>
                                                                <th>متراژ کل بنا</th>
                                                                <th>نوع زمین</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>646564565</td>
                                                                <td>4000</td>
                                                                <td>آبرفتی</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="table-responsive" style="padding-top: 5px">
                                                        <table class="table table-dark mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th>تعداد طبقات کل</th>
                                                                <th>سطح اشغال طبقه پایین</th>
                                                                <th>تعداد طبقات زیر زمین</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>300</td>
                                                                <td>5</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="table-responsive" style="padding-top: 5px">
                                                        <table class="table table-dark mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th>تعداد گمانه ماشینی</th>
                                                                <th>تعداد چاهک دستی</th>
                                                                <th>سازه نگهبان</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>300</td>
                                                                <td>5</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="table-responsive" style="padding-top: 5px">
                                                        <table class="table table-dark mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th>بارگزاری و برش برجا</th>
                                                                <th>تست لرزه درون چاهی</th>
                                                                <th>بستر سنگی</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>دارد</td>
                                                                <td>ندارد</td>
                                                                <td>دارد</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="table-responsive" style="padding-top: 5px">
                                                        <table class="table table-dark mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th>اضافه بهای حفاری</th>
                                                                <th>تعداد اقساط پرداخت</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>دارد</td>
                                                                <td>2 قسط</td>

                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ریز قیمت ها پایان-->


            <!-- صورت هزینه بخش مطالعات -->
            <div class="row" style="padding-right: 20px;padding-left: 20px">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title" style="padding: 20px;font-size: medium">صورت حساب کا مطالعات و اعضا</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card bg-info mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">هزینه کل</h6>
                                                <h4 class="mb-3 mt-0 float-right">24,000,000</h4>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- پایان صورت هزینه بخش مطالعات  -->


            <!-- صورت هزینه بخش مطالعات -->
            <div class="row" style="padding-right: 20px;padding-left: 20px">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title" style="padding: 20px;font-size: medium">جمع هزینه و کارتهای بخش مطالعات</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">هزینه پیش پرداخت</h6>
                                                <h4 class="mb-3 mt-0 float-right">12,000,000</h4>
                                            </div>
                                            <div>
                                                <span class="badge badge-light text-info"> 50% </span> <span class="ml-2">از مبلغ کل</span>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0">مبلغ کل بخش مطالعات</p>
                                            <p class="font-20 m-0">24,000,000</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">هزینه قسط اول</h6>
                                                <h4 class="mb-3 mt-0 float-right">12,000,000</h4>
                                            </div>
                                            <div>
                                                <span class="badge badge-light text-info"> 50% </span> <span class="ml-2">از مبلغ کل</span>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0">مبلغ کل بخش مطالعات</p>
                                            <p class="font-20 m-0">24,000,000</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- پایان صورت هزینه بخش مطالعات  -->


            <!-- صورت هزینه بخش اعضا -->
            <div class="row" style="padding-right: 20px;padding-left: 20px">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body" style="background-color: #9f9f9f">
                            <h4 class="mt-0 header-title" style="padding: 20px;font-size: medium">جمع هزینه و کارتهای بخش اعضا</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">هزینه پیش پرداخت</h6>
                                                <h4 class="mb-3 mt-0 float-right">12,000,000</h4>
                                            </div>
                                            <div>
                                                <span class="badge badge-light text-info"> 50% </span> <span class="ml-2">از مبلغ کل</span>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0">مبلغ کل بخش اعضا</p>
                                            <p class="font-20 m-0">24,000,000</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card bg-primary mini-stat text-white">
                                        <div class="p-3 mini-stat-desc">
                                            <div class="clearfix">
                                                <h6 class="text-uppercase mt-0 float-left text-white-50">هزینه قسط اول</h6>
                                                <h4 class="mb-3 mt-0 float-right">12,000,000</h4>
                                            </div>
                                            <div>
                                                <span class="badge badge-light text-info"> 50% </span> <span class="ml-2">از مبلغ کل</span>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                                            </div>
                                            <p class="font-14 m-0">مبلغ کل بخش اعضا</p>
                                            <p class="font-20 m-0">24,000,000</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- پایان صورت هزینه بخش اعضا  -->





            <div>
                <div class="card mb-0">
                    <div class="card-body">

                        <div class="p-2">
                            <form class="form-horizontal m-t-20" action="https://themesdesign.in/zinzer_1/vertical-rtl/index.html">



                                <div class="form-group row">
                                    <div class="col-sm-4"  style="padding-top: 20px">
                                        <div>
                                            <label>اسناد و مدارک</label>
                                            <div>
                                                <input class="btn btn-primary btn-lg btn-block waves-effect waves-light" accept=".jpg, .jpeg, .png, .pdf" type="file" id="myFile" name="filename">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-4"  style="padding-top: 20px">
                                        <div>
                                            <label>دستور نقشه</label>
                                            <div>
                                                <input class="btn btn-primary btn-lg btn-block waves-effect waves-light" accept=".jpg, .jpeg, .png, .pdf" type="file" id="myFile" name="filename">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-4"  style="padding-top: 20px">
                                        <div >
                                            <label>فایل اوتوکد</label>
                                            <div >
                                                <input class="btn btn-primary btn-lg btn-block waves-effect waves-light" accept=".cad" type="file" id="myFile" name="filename">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-top: 20px">
                                        <div>
                                            <label>وکالت نامه</label>
                                            <div >
                                                <input class="btn btn-primary btn-lg btn-block waves-effect waves-light" accept=".jpg, .jpeg, .png, .pdf" type="file" id="myFile" name="filename">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-top: 20px">
                                        <div>
                                            <label>کارت ملی مالک یا وکیل</label>
                                            <div >
                                                <input class="btn btn-primary btn-lg btn-block waves-effect waves-light" accept=".jpg, .jpeg, .png, .pdf" type="file" id="myFile" name="filename">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Loader -->
                                <div class="modal bs-example-modal" tabindex="-1" role="dialog">
                                    <div role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0">مشخصات مالک</h5>
                                            </div>
                                            <div>
                                                <div class="form-group row" style="padding-right: 10px;padding-left: 10px">
                                                    <div class="col-sm-3">
                                                        <div>
                                                            <label>نام مالک </label>
                                                            <div>
                                                                <input class="form-control" type="text" value="" id="example-text-input5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div>
                                                            <label>نام خانوادگی مالک </label>
                                                            <div>
                                                                <input class="form-control" type="text" value="" id="example-text-input6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div>
                                                            <label>کد ملی مالک </label>
                                                            <div >
                                                                <input class="form-control" type="number" value="" id="example-number-input7">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div>
                                                            <label> شماره تماس مالک</label>
                                                            <div>
                                                                <input class="form-control" type="number" value="" id="example-number-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group" style="padding-right: 10px;padding-left: 10px">
                                                    <label>آدرس مالک</label>
                                                    <div>
                                                        <textarea required class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3" style="padding-bottom: 20px">
                                                    <div>
                                                        <label> پلاک ثبتی مالک </label>
                                                        <div >
                                                            <input class="form-control" type="number" value="" id="example-number-input7">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->


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
                                </div><!-- /.modal -->




                                <div class="form-group text-center row m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">ثبت نام</button>
                                    </div>
                                </div>

                                <div class="form-group m-t-10 mb-0 row">
                                    <div class="col-12 m-t-20 text-center">
                                        <a href="pages-login.html" class="text-muted">در حال حاضر حساب کاربری دارید؟</a>
                                    </div>
                                </div>



                            </form>

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
