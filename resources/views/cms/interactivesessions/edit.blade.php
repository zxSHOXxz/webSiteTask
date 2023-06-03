@extends('cms.master')
@section('title', 'الجلسة التفاعلية')

@section('tittle_1', ' تعديل جلسة تفاعلية ')
@section('tittle_2', ' تعديل جلسة تفاعلية ')


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
            <h5 class="mb-0">تعديل جلسة تفاعلية </h5>
        </div>

        <div class="card-body">
            <!-- Right aligned buttons -->
            <div class="card">
                <div class="card-header">
                    <h6 class="mb-0"> تعديل جلسة تفعالية </h6>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="mb-3">
                            <label class="form-label"> عنوان الحلسة التفاعلية </label>
                            <input type="text" name="tittle" id="tittle" class="form-control"
                                placeholder="عنوان الحلسة التفاعلية ">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">وصف الجلسة التفاعلية</label>
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder=" وصف الجلسة التفاعلية ">
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> اهداف الجلسة التفاعلية </label>
                            <input type="text" name="goals" id="goals" class="form-control"
                                placeholder=" اهداف الجلسة التفاعلية ">
                        </div>
                        <div>
                            <div class="row mb-3">
                                <label class="col-form-label col-lg-3"> المدربين </label>
                                <div class="col-lg-9">
                                    <select class="form-control multiselect" name="trainer[]" id="trainer[]"
                                        multiple="multiple">
                                        @foreach ($trainers as $trainer)
                                            <option value="{{ $trainer->id }}">{{ $trainer->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label col-lg-3">الدورة</label>
                            <div class="col-lg-9">
                                <select data-placeholder="الدورة" name="course_id" id="course_id"
                                    class="form-control select-icons">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('interactive_session.index') }}" class="btn btn-light">الغاء</a>
                            <button type="button" onclick="performStore()" class="btn btn-primary ms-3"> تعديل <i
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
    <script src="{{ asset('cms/assets/js/vendor/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('cms/assets/demo/pages/form_multiselect.js') }}"></script>
    <script>
        function performStore() {
            let formData = new FormData();
            formData.append('tittle', document.getElementById('tittle').value);
            formData.append('description', document.getElementById('description').value);
            formData.append('goals', document.getElementById('goals').value);
            formData.append('course_id', document.getElementById('course_id').value);
            formData.append('image', document.getElementById('image').files[0]);

            var selectedValues = $('#trainer\\[\\]').val();
            formData.append('trainer', selectedValues);
            storeRedirect('/cms/admin/interactive_session_update', formData, '/cms/admin/interactive_session')
        }
    </script>
@endsection
