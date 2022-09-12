<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('Front/assets/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('Backend/bootstrap.min.css')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('Front/assets/custom_style/style.css')}}">
    @yield('css')
</head>

<body>

    @include('Front.layouts.header')


    <!-- Remove the container if you want to extend the Footer to full width. -->
    @yield('content')



    @include('Front.layouts.footer')

    @yield('js')


    <script src="{{asset('Front/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Front/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script> -->
</body>

</html>
