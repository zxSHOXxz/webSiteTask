@extends('cms.master')
@section('title', 'المشرفين')

@section('tittle_1', ' اضافة المشرفين ')
@section('tittle_2', ' اضافة المشرفين ')


@section('styles')
    <style>
        .color {
            color: #fff;
            margin-inline: 15px;
            width: 35px;
        }
    </style>
@endsection


@section('content')

    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">اضافة المشرفين</h5>
        </div>

        <div class="card-body">
            <!-- Right aligned buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0"> اضافة المشرفين </h6>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">الاسم</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder=" الاسم ">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">الايميل</label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="john@doe.com">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-at text-muted"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">كلمة المرور</label>
                            <div class="form-control-feedback form-control-feedback-start">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="•••••••••••">
                                <div class="form-control-feedback-icon">
                                    <i class="ph-lock text-muted"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">رقم الهاتف</label>
                            <input type="text" name="mobile" id="mobile" class="form-control"
                                placeholder="رقم الهاتف">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">العنوان</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="العنوان">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">المدينة</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="المدينة">
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-lg-3">الحالة</label>
                            <div class="col-lg-9">
                                <select data-placeholder="الحالة" name="status" id="status"
                                    class="form-control select-icons">
                                    <option value="married">متزوج</option>
                                    <option value="single">اعزب</option>
                                    <option value="separated">مطلق</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label col-lg-3">الجنس</label>
                            <div class="col-lg-9">
                                <select data-placeholder="الجنس" name="gender" id="gender"
                                    class="form-control select-icons">
                                    <option value="male">ذكر</option>
                                    <option value="female">انثى</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">التاريخ</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" id="birthday" name="birthday">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 col-form-label"> الصورة</label>
                            <div class="col-lg-9">
                                <input type="file" class="form-control" name="image" id="image">
                                <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('admins.index') }}" class="btn btn-light">الغاء</a>
                            <button type="button" onclick="performStore()" class="btn btn-primary ms-3"> اضافة <i
                                    class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /right aligned buttons -->

        </div>
    </div>
    <!-- /basic datatable -->

@endsection






@section('scripts')
    <script src="{{ asset('cms/assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('cms/assets/demo/pages/form_select2.js') }}"></script>
    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('name', document.getElementById('name').value);
            formData.append('email', document.getElementById('email').value);
            formData.append('password', document.getElementById('password').value);
            formData.append('mobile', document.getElementById('mobile').value);
            formData.append('address', document.getElementById('address').value);
            formData.append('city', document.getElementById('city').value);
            formData.append('status', document.getElementById('status').value);
            formData.append('gender', document.getElementById('gender').value);
            formData.append('birthday', document.getElementById('birthday').value);
            formData.append('image', document.getElementById('image').files[0]);
            store('/cms/admin/admins', formData);
        }
    </script>
@endsection
