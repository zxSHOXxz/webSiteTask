@extends('cms.master')
@section('title', 'الخصومات')

@section('tittle_1', ' اضافة خصم ')
@section('tittle_2', ' اضافة خصم ')


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
            <h5 class="mb-0">اضافة خصم</h5>
        </div>

        <div class="card-body">
            <!-- Right aligned buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0"> اضافة خصم </h6>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">عنوان الخصم</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="عنوان الخصم">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">قيمة</label>
                            <input type="text" name="value" id="value" class="form-control"
                                placeholder="قيمة الخصم">
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label col-lg-3">تاريخ الانتهاء</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" id="expiration_date" name="expiration_date">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-lg-3">الحالة</label>
                            <div class="col-lg-9">
                                <select data-placeholder="الحالة" name="status" id="status"
                                    class="form-control select-icons">
                                    <option value="active">فعال</option>
                                    <option value="expired">منتهي</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-lg-3">الدورات</label>
                            <div class="col-lg-9">
                                <select data-placeholder="الدورات" name="course_id" id="course_id"
                                    class="form-control select-icons">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('offers.index') }}" class="btn btn-light">الغاء</a>
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
            formData.append('title', document.getElementById('title').value);
            formData.append('expiration_date', document.getElementById('expiration_date').value);
            formData.append('value', document.getElementById('value').value);
            formData.append('status', document.getElementById('status').value);
            formData.append('course_id', document.getElementById('course_id').value);
            store('/cms/admin/offers', formData);
        }
    </script>
@endsection
