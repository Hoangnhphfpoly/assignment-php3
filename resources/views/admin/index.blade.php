@extends('admin.layout.layout')

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">Revenue</h5>
                            <ul class="tabs tab-pills">
                                <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                            </ul>
                        </div>

                        <div class="widget-content">
                            <div class="tabs tab-content">
                                <div id="content_1" class="tabcontent">
                                    <div id="revenueMonthly"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">Sales by Category</h5>
                        </div>
                        <div class="widget-content">
                            <div id="chart-2" class=""></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include("admin.layout.footer")
    </div>
@endsection

@section('script')
    <script>
        @if (session('msg'))
            Swal.fire({
                text: '{{ session('msg') }}',
                position: 'middle',
                icon: 'success'
            });
        @endif
    </script>
@endsection
