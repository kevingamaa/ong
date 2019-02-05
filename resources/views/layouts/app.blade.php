<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="{{ asset('dash/css/nucleo-icons.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('dash/css/black-dashboard.css?v=1.0.0') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('dash/demo/demo.css') }}" rel="stylesheet" />
 
</head>

<body class="white-content">
    
    <div class="content">
        <main role="main">
            @yield('content')
        </main>
    </div>

 
    <!--   Core JS Files   -->
    <script src="{{ asset('dash/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('dash/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('dash/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dash/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    @hasSection ('js')
        @yield('js')
        
    @endif


</body>

</html>