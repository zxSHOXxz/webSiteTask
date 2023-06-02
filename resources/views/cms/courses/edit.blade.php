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
                            <label class="form-label">عنوان الدورة</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="عنوان الدورة" value="{{ $course->title }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">عن الدورة</label>
                            <input type="text" name="about" id="about" class="form-control" placeholder="عن الدورة"
                                value="{{ $course->about }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">وصف الدورة</label>
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="وصف الدورة" value="{{ $course->description }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">سعر الدورة</label>
                            <input type="text" name="price" id="price" class="form-control"
                                placeholder="سعر الدورة" value="{{ $course->price }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ساعات الدورة</label>
                            <input type="text" name="hours" id="hours" class="form-control"
                                placeholder="ساعات الدورة" value="{{ $course->hours }}">
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-lg-3">المدرب</label>
                            <div class="col-lg-9">
                                <select data-placeholder="الجنس" name="trainer_id" id="trainer_id"
                                    class="form-control select-icons">
                                    @foreach ($trainers as $trainer)
                                        <option value="{{ $trainer->id }}"
                                            {{ $course->trainer_id == $trainer->id ? 'selected' : null }}>
                                            {{ $trainer->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-lg-3">الاصناف</label>
                            <div class="col-lg-9">
                                <select data-placeholder="الاصناف" name="category_id" id="category_id"
                                    class="form-control select-icons">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $course->category_id == $category->id ? 'selected' : null }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
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
                            <a href="{{ route('courses.index') }}" class="btn btn-light">الغاء</a>
                            <button type="button" onclick="performUpdate({{ $course->id }})"
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
            formData.append('title', document.getElementById('title').value);
            formData.append('about', document.getElementById('about').value);
            formData.append('description', document.getElementById('description').value);
            formData.append('price', document.getElementById('price').value);
            formData.append('hours', document.getElementById('hours').value);
            formData.append('category_id', document.getElementById('category_id').value);
            formData.append('trainer_id', document.getElementById('trainer_id').value);
            formData.append('image', document.getElementById('image').files[0]);
            storeRedirect('/cms/admin/courses_update/' + id, formData, '/cms/admin/courses/');
        }
    </script>
@endsection
