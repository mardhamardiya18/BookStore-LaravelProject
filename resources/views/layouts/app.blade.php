<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('includes.style')

    <title> @yield('title')</title>
</head>

<body>
    {{-- Navbar --}}
    @if (Request::url() != 'http://localhost:8000/login' && Request::url() != 'http://localhost:8000/register')
        @include('includes.navbar')
    @endif
    @include('sweetalert::alert')


    @yield('content')

    @include('includes.footer')

    @include('includes.script')
</body>

</html>
