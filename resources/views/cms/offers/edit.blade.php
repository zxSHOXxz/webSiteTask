@extends('cms.master')
@section('title', 'الخصومات')

@section('tittle_1', ' تعديل الخصم ')
@section('tittle_2', ' تعديل الخصم ')


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
            <h6 class="mb-0"> تعديل الخصم </h6>
        </div>
        <div class="card-body">
            <form action="#">
                <div class="mb-3">
                    <label class="form-label">عنوان الخصم</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="عنوان الخصم"
                        value="{{ $offers->title }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">قيمة الخصم</label>
                    <input type="number" name="value" id="value" class="form-control" placeholder="قيمة الخصم"
                        value="{{ $offers->value }}">
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-lg-3">تاريخ الانتهاء</label>
                    <div class="col-lg-9">
                        <input value="{{ $offers->expiration_date }}" class="form-control" type="date"
                            id="expiration_date" name="expiration_date">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">الحالة</label>
                    <div class="col-lg-9">
                        <select data-placeholder="الحالة" name="status" id="status" class="form-control select-icons">
                            <option value="active" {{ $offers->status == 'active' ? 'selected' : null }}>فعال</option>
                            <option value="expired" {{ $offers->status == 'expired' ? 'selected' : null }}>منتهي</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label col-lg-3">الاصناف</label>
                    <div class="col-lg-9">
                        <select data-placeholder="الاصناف" name="course_id" id="course_id"
                            class="form-control select-icons">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}"
                                    {{ $course->id == $offers->course_id ? 'selected' : null }}>{{ $course->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <a href="{{ route('offers.index') }}" class="btn btn-light">الغاء</a>
                    <button type="button" onclick="performUpdate({{ $offers->id }})" class="btn btn-primary ms-3"> اضافة
                        <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /basic datatable -->

@endsection






@section('scripts')
    <script src="{{ asset('cms/assets/js/vendor/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('cms/assets/demo/pages/form_select2.js') }}"></script>
    <script>
        function performUpdate(id) {
            let formData = new FormData();
            formData.append('title', document.getElementById('title').value);
            formData.append('expiration_date', document.getElementById('expiration_date').value);
            formData.append('value', document.getElementById('value').value);
            formData.append('status', document.getElementById('status').value);
            formData.append('course_id', document.getElementById('course_id').value);
            storeRedirect('/cms/admin/offers_update/' + id, formData, '/cms/admin/offers/');
        }
    </script>
@endsection
