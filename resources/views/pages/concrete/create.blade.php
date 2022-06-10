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
                            <a href="index-2.html" class="logo"><img src="/assets/images/logo.png" height="22" alt="logo"></a>
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
                                    <img src="/assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
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
                    <strong><b>ثبت پرونده ژئو تکنیک</b></strong>
                </div>
            </div>
            <div class="row" style="padding-right: 20px;padding-left: 20px">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">


                                        <div class="col-sm-4" style="padding-top: 20px">
                                            <label for="example-number-input" >شماره ثبت دستور نقشه</label>
                                            <input class="form-control" type="number" name="map_order_registration_number" value="{{old('map_order_registration_number') ?? ''}}" id="example-number-input">
                                        </div>
                                        <div class="col-sm-4" style="padding-top: 20px">
                                            <label for="example-number-input" >متراژ کل بنا</label>
                                            <input class="form-control" type="number" name="total_building_area" value="{{old('total_building_area') ?? ''}}" id="example-number-input">
                                        </div>
                                        <div class="col-sm-4"  style="padding-top: 20px">
                                            <label>نوع زمین</label>
                                            <select class="form-control" name="type_of_land">
                                                <option value="Fine_grained_lands">زمین های ریزدانه</option>
                                                <option value="Sandy_alluvium">آبرفتی ماسه ای</option>
                                                <option value="Large_sand_alluvium">آبرفتی شن درشت</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4" style="padding-top: 20px">
                                            <label for="example-number-input" >تعداد طبقات کل</label>
                                            <input class="form-control" type="number" name="total_number_of_floors" value="{{old('total_number_of_floors') ?? ''}}}" id="example-number-input">
                                        </div>
                                        <div class="col-sm-4" style="padding-top: 20px">
                                            <label for="example-number-input" >سطح اشغال طبقه پایین</label>
                                            <input class="form-control" type="number" name="occupancy_level_downstairs" value="{{old('occupancy_level_downstairs') ?? ''}}" id="example-number-input">
                                        </div>
                                        <div class="col-sm-4" style="padding-top: 20px">
                                            <label for="example-number-input" >تعداد طبقات زیر زمین</label>
                                            <input class="form-control" type="number" name="number_of_underground_floors" value="{{old('number_of_underground_floors') ?? ''}}" id="example-number-input">
                                        </div>


                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-right: 20px;padding-left: 20px">
                <div class="col-xl-6" >
                    <div class="card m-b-30">
                        <div class="card-body">

                            <div class="col-sm-12"  style="padding-top: 20px;border: 1px;border-color: #0b0b0b">
                                <label class="control-label">تعداد گمانه ماشینی</label>
                                <input id="demo0" type="text" value="0" name="number_of_machine_boreholes" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                <div  style="padding-top: 20px">
                                    <label for="example-number-input" >عمق گمانه ماشینی 1</label>
                                    <input class="form-control" type="number" name="machine_bore_depth" value="" id="example-number-input">
                                </div>
                                <div style="text-align: center;padding-top: 20px">
                                    <button type="button" name="written_request_of_bore_number" class="btn btn-primary waves-effect waves-light"> آپلود درخواست کتبی تعداد گمانه</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card m-b-30">
                        <div class="card-body">


                            <div class="col-sm-12"  style="padding-top: 20px">
                                <label class="control-label">تعداد چاهک دستی</label>
                                <input id="demo1" type="text" value="0" name="number_of_manual_wells" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                <div  style="padding-top: 20px">
                                    <label for="example-number-input" >عمق چاهک دستی 1</label>
                                    <input class="form-control" type="number" name="manual_well_depth" value="" id="example-number-input">
                                </div>
                                <div style="text-align: center;padding-top: 20px">
                                    <button type="button" name="written_request_of_well_number" class="btn btn-primary waves-effect waves-light"> آپلود درخواست کتبی تعداد چاهک</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-right: 20px;padding-left: 20px">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">

                                        <div class="col-sm-3"  style="padding-top: 20px">
                                            <label >سازه نگهبان</label>
                                            <select class="custom-select" name="guard_structure">
                                                <option selected>انتخاب کنید</option>
                                                <option value="YES">دارد</option>
                                                <option value="NO">ندارد</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3"  style="padding-top: 20px">
                                            <label >بارگزاری و برش برجا</label>
                                            <select class="custom-select" name="upload_and_cut_in_place">
                                                <option selected>انتخاب کنید</option>
                                                <option value="YES">دارد</option>
                                                <option value="NO">ندارد</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3"  style="padding-top: 20px">
                                            <label >تست لرزه درون چاهی</label>
                                            <select class="custom-select" name="in_well_vibration_test">
                                                <option selected>انتخاب کنید</option>
                                                <option value="YES">دارد</option>
                                                <option value="NO">ندارد</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3"  style="padding-top: 20px">
                                            <label >بستر سنگی</label>
                                            <select class="custom-select" name="bedrock">
                                                <option selected>انتخاب کنید</option>
                                                <option value="YES">بله</option>
                                                <option value="NO">خیر</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3"  style="padding-top: 20px">
                                            <label >اضافه بهای حفاری</label>
                                            <select class="custom-select" name="drilling_surcharge">
                                                <option selected>انتخاب کنید</option>
                                                <option value="YES">دارد</option>
                                                <option value="NO">ندارد</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3"  style="padding-top: 20px">
                                            <label >تعداد اقساط پرداخت</label>
                                            <select class="custom-select" name="number_of_payment">
                                                <option selected>انتخاب کنید</option>
                                                <option value="CASH">به صورت نقدی</option>
                                                <option value="ONE_INSTALLMENT">یک قسط</option>
                                                <option value="TWO_INSTALLMENT">دو قسط</option>
                                                <option value="THREE_INSTALLMENT">سه قسط</option>
                                            </select>
                                        </div>


                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-right: 20px;padding-left: 20px">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group row">
                                        <div class="card-body">
                                            <div class="button-items" style="text-align: center">
                                                <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light">محاصبه و رفتن به صفحه بعد</button>
                                                <button type="button" class="btn btn-secondary btn-sm btn-block waves-effect waves-light">پاک کردن صفحه</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row -->
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
