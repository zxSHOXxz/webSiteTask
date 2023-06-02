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
                            <label class="form-label">اسم التصنيف</label>
                            <input type="text" name="name" id="name" value="{{ $category->name }} "
                                class="form-control" placeholder="اسم التصنيف">
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 col-form-label"> الصورة</label>
                            <div class="col-lg-9">
                                <input type="file" class="form-control" name="image" id="image">
                                <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('categories.index') }}" class="btn btn-light">الغاء</a>
                            <button type="button" onclick="performUpdate({{ $category->id }})"
                                class="btn btn-primary ms-3"> اضافة <i class="ph-paper-plane-tilt ms-2"></i></button>
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
            formData.append('name', document.getElementById('name').value);
            formData.append('image', document.getElementById('image').files[0]);
            storeRedirect('/cms/admin/categories_update/' + id, formData, '/cms/admin/categories/');
        }
    </script>
@endsection
