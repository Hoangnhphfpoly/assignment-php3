@extends('admin.layout.layout')

@section('title', 'Edit student')

@section('content')
    <div class="row layout-top-spacing container-lg">
        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Thông tin sinh viên</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="post" action="{{route('student.update', ['student' => $student->id])}}">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="form-row mb-4">
                            <div class="form-group col-md-8">
                                <label for="inputName">Tên</label>
                                <input type="text" class="form-control" id="inputName" name="name" value="{{$student->name}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAge">Tuổi</label>
                                <input type="number" class="form-control" id="inputAge" name="age" min="1" value="{{$student->age}}">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="inputAddress">Địa chỉ</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" value="{{$student->address}}">
                        </div>
{{--                        <div class="form-group mb-4">--}}
{{--                            <label for="inputAddress2">Address 2</label>--}}
{{--                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">--}}
{{--                        </div>--}}
                        <div class="form-row mb-4">
                            <div class="form-group col-md-10">
                                <label for="inputImage">Avatar</label>
                                <input type="text" class="form-control" id="inputImage" name="avatar">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputStatus">Trang thái</label>
                                <select id="inputStatus" class="form-control" name="status">
                                    <option {{$student->status == 0 ? "selected" : ""}} value="0">Thôi học</option>
                                    <option {{$student->status == 1 ? "selected" : ""}} value="1">Đang học</option>
                                    <option {{$student->status == 2 ? "selected" : ""}} value="2">Bảo lưu</option>
                                </select>
                            </div>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <div class="form-check pl-0">--}}
{{--                                <div class="custom-control custom-checkbox checkbox-info">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="gridCheck">--}}
{{--                                    <label class="custom-control-label" for="gridCheck">Check me out</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <button type="submit" class="btn btn-primary">Sửa</button>
                        <button class="btn btn-outline-danger">
                            <a href="{{route('student.index')}}" >
                                Quay lại
                            </a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
