<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @include("admin.layout.css")
</head>
<body class="sidebar-noneoverflow">
<!-- BEGIN LOADER -->
@include("admin.layout.loader")
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
@include("admin.layout.navbar")
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    @include("admin.layout.sidebar")

    <div id="content" class="main-content">

        @yield('content')

        @include("admin.layout.footer")
    </div>
    <!--  BEGIN SIDEBAR  -->

<!--  END SIDEBAR  -->

</div>

<!-- END MAIN CONTAINER -->

@include("admin.layout.script")
@yield('script')
<script>

</script>
</body>

</html>
