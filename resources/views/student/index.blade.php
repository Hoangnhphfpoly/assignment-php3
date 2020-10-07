@extends('admin.layout.layout')
@section('title', 'Admin')
@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-10 col-md-10 col-sm-10 col-10">
                                <h4>Danh sách sinh viên</h4>
                            </div>
                            <div class="col-xl-2 col-md-2 col-sm-2 col-2">
                                <a href="{{route('student.create')}}" class="btn btn-primary col">Thêm mới</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mb-4 mt-4">
                        <table id="zero-config" class="table table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Avatar</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th class="no-content"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $key => $student)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->age}}</td>
                                    <td>{{$student->avatar}}</td>
                                    <td>{{$student->address}}</td>
                                    <td>@if($student->status == 1)
                                            <span class="badge badge-success">Đang học</span>
                                        @elseif($student->status == 2)
                                            <span class="badge badge-warning">Bảo lưu</span>
                                        @else
                                            <span class="badge badge-danger">Thôi học</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="row">
                                            <a href="{{route('student.show', ['student' => $student->id])}}" class="btn btn-primary mb-3 rounded bs-tooltip">
                                                Chi tiết
                                            </a>
                                            <a href="{{route('student.edit', ['student' => $student->id])}}" class="btn btn-warning mb-3 rounded bs-tooltip">
                                                Sửa
                                            </a>
                                            <form action="{{route('student.destroy', ['student' => $student->id])}}"
                                                  method="post" class="col">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                                <button type="submit" class="btn btn-danger mb-3 rounded bs-tooltip">Xóa</button>
                                            </form>

                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Avatar</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('script')
    <script>
        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });

        @if(session('msg'))
        swal.fire({
            title: '{{ session('msg') }}',
            type: 'success',
            padding: '2em'
        });
        @endif

    </script>
@endsection
