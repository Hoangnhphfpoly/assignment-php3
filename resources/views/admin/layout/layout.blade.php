<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Sales Dashboard </title>
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
    <div class="search-overlay"></div>
    @yield('content')
    <!--  BEGIN SIDEBAR  -->
@include("admin.layout.sidebar")
<!--  END SIDEBAR  -->
</div>
<!-- END MAIN CONTAINER -->

@include("admin.layout.script")
@yield('script')
</body>

</html>
