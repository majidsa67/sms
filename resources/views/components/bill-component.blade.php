<div>
@foreach($items as $item)
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
                                                        <td>{{$item->map_order_registration_number}}</td>
                                                        <td>{{$item->total_building_area}}</td>
                                                        <td>{{$item->type_of_land}}</td>
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
                                                        <td>{{$item->total_number_of_floors}}</td>
                                                        <td>{{$item->occupancy_level_downstairs}}</td>
                                                        <td>{{$item->number_of_underground_floors}}</td>
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
                                                        <td>{{$item->number_of_machine_boreholes}}</td>
                                                        <td>{{$item->number_of_manual_wells}}</td>
                                                        <td>{{$item->guard_structure}}</td>
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
                                                        <td>{{$item->upload_and_cut_in_place}}</td>
                                                        <td>{{$item->in_well_vibration_test}}</td>
                                                        <td>{{$item->bedrock}}</td>
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
                                                        <td>{{$item->drilling_surcharge}}</td>
                                                        <td>{{$item->number_of_payment}}</td>

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
    @endforeach
</div>
