<div>
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
                                    <input class="form-control" type="text" name="name" value="{{old('name') ?? ''}}" id="example-text-input5">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div>
                                <label>نام خانوادگی مالک </label>
                                <div>
                                    <input class="form-control" type="text" name="lastname" value="{{old('lastname') ?? ''}}" id="example-text-input6">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div>
                                <label>کد ملی مالک </label>
                                <div >
                                    <input class="form-control" type="number" name="national_id" value="{{old('national_id') ?? ''}}" id="example-number-input7">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div>
                                <label> شماره تماس مالک</label>
                                <div>
                                    <input class="form-control" type="number" name="phone" value="{{old('phone') ?? ''}}" id="example-number-input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="padding-right: 10px;padding-left: 10px">
                        <label>آدرس مالک</label>
                        <div>
                            <textarea required class="form-control" name="address" rows="5">{{old('address') ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-3" style="padding-bottom: 20px">
                        <div>
                            <label> پلاک ثبتی مالک </label>
                            <div >
                                <input class="form-control" type="number" name="owner_registration_plaque" value="{{old('owner_registration_plaque') ?? ''}}" id="example-number-input7">
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>
