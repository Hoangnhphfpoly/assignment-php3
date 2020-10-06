<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset("admin_theme/assets/js/libs/jquery-3.1.1.min.js")}}"></script>
<script src="{{asset("admin_theme/bootstrap/js/popper.min.js")}}"></script>
<script src="{{asset("admin_theme/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("admin_theme/plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
<script src="{{asset('admin_theme/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('admin_theme/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{asset("admin_theme/assets/js/custom.js")}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset("admin_theme/plugins/apex/apexcharts.min.js")}}"></script>
<script src="{{asset("admin_theme/assets/js/dashboard/dash_1.js")}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>--}}
<script src="{{asset('admin_theme/plugins/tagInput/tags-input.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset("admin_theme/plugins/table/datatable/datatables.js")}}"></script>

<script src="{{asset('admin_theme/assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('admin_theme/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('admin_theme/plugins/sweetalerts/custom-sweetalert.js')}}"></script>

<script>
    var instance = new TagsInput({
        selector: 'skill-input'
    });
    instance.addData(['PHP', 'Wordpress', 'Javascript', 'jQuery'])
</script>
