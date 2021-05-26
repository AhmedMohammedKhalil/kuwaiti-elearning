@extends('teachers.layout')
@section('content')
    <section class="pt-10 my-md-5 h-100">
        <div class="container">
            <div class="row">
                <div class="col-10 col-sm-8 col-md-6 col-lg-4 offset-1 offset-sm-2 offset-md-3 offset-lg-4 row">
                    <div class="mb-4 mb-sm-0">
                        <h1 class="element-title font-weight-bold text-center mb-1">
                            إضافة فيديو جديد
                        </h1>

                        <div class="border rounded-bottom-md border-top-0">
                            <div class="p-3">
                                <form action="" method="POST" role="form">
                                    @csrf
                                    <div class="form-group check-step-gray">
                                        <select class="form-control" id="content-video">
                                            <option selected>اختار موضوع الفيديو</option>
                                            <option>اسماء حيوانات</option>
                                            <option>حروف</option>
                                            <option>ارقام</option>
                                            <option>الوان</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-icon">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text border-right-0"
                                                    id="basic-addon2">عنوان الفيديو</span>
                                            </div>
                                            <input type="text" name="title_vc" value="{{ old('title_vc') }}"class="form-control
                                                @error('title_vc')  is-invalid @enderror"
                                                autocomplete="title_vc" dir="ltr">
                                        </div>
                                        @error('title_vc')
                                        <span class="invalid-feedback d-block px-2 font-weight-bolder" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    

                                    

                                    

                                    

                                    <div class="form-group font-weight-bolder">
                                        <button type="submit" 
                                            class="
                                                btn btn-danger
                                                text-uppercase
                                                w-100
                                        ">
                                            إضافة
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection