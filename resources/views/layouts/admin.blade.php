<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('addon-style')

</head>

<body class="sb-nav-fixed">
    <div class="bg-admin w-100 h-25 position-absolute top-0"></div>
    @include('includes.admin.navbar')
    <div id="layoutSidenav">
        @include('includes.admin.sidebar')
        <div id="layoutSidenav_content">

            @yield('content')

            @include('includes.admin.footer')
        </div>
    </div>


    @stack('prepend-script')
    @include('includes.admin.script')
    @stack('addon-script')
</body>

</html>
