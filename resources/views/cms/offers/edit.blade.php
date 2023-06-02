@extends('cms.master')
@section('title', 'التصنيفات')

@section('tittle_1', ' اضافة التصنيف ')
@section('tittle_2', ' اضافة التصنيف ')


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
            <h5 class="mb-0">اضافة تصنيف</h5>
        </div>

        <div class="card-body">
            <!-- Right aligned buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0"> اضافة تصنيف </h6>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label">عنوان الخصم</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="عنوان الخصم">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">وصف الخصم</label>
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="وصف الخصم">
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
                            <label class="col-form-label col-lg-3">الاصناف</label>
                            <div class="col-lg-9">
                                <select data-placeholder="الاصناف" name="category_id" id="category_id"
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
        function performUpdate(id) {
            let formData = new FormData();
            formData.append('title', document.getElementById('title').value);
            formData.append('expiration_date', document.getElementById('expiration_date').value);
            formData.append('description', document.getElementById('description').value);
            formData.append('status', document.getElementById('status').value);
            formData.append('course_id', document.getElementById('course_id').value);
            storeRedirect('/cms/admin/offers_update/' + id, formData, '/cms/admin/offers/');
        }
    </script>
@endsection
