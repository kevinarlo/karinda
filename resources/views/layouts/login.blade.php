<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Karinda Bangun Nusa | @yield('title') </title>

    @include('includes.style')

</head>

<body>

    @include('includes.header')

    @include('includes.preloader')

    

    @yield('content')

    @include('includes.footer')


    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>
