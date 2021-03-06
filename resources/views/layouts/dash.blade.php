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

    <link rel="stylesheet" href="{{ asset('dash/js/plugins/bootstrap-fileinput/css/fileinput.min.css') }}">
 
</head>

<body class="white-content">
    
    <div class="wrapper">
        @component('dash.component.sidebar_component')
        @endcomponent
   
        <div class="main-panel">
          
            @component('dash.component.navbar_component')
            @endcomponent
     

            <div class="content">
                <main role="main">
                    @yield('content')
                </main>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                    Creative Tim
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                    About Us
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                    Blog
                                </a>
                        </li>
                    </ul>
                    <div class="copyright">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> made with <i class="tim-icons icon-heart-2"></i> by
                        <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
 
    <!--   Core JS Files   -->
    <script src="{{ asset('dash/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('dash/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('dash/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dash/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    <!-- Chart JS -->
    <script src="{{ asset('dash/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('dash/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('dash/js/black-dashboard.min.js?v=1.0.0') }}"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    {{-- <script src="{{ asset('dash/demo/demo.js') }}"></script> --}}
    <script>
        $(document).ready(function () {
                $('.logout').click(function(){
                    $('form#logout').submit();
                });
                $().ready(function () {
                    $sidebar = $('.sidebar');
                    $navbar = $('.navbar');
                    $main_panel = $('.main-panel');
    
                    $full_page = $('.full-page');
    
                    $sidebar_responsive = $('body > .navbar-collapse');
                    sidebar_mini_active = true;
                    white_color = false;
    
                    window_width = $(window).width();
    
                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
    
    
    
                    $('.fixed-plugin a').click(function (event) {
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });
    
                    $('.fixed-plugin .background-color span').click(function () {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');
    
                        var new_color = $(this).data('color');
    
                        if ($sidebar.length != 0) {
                            $sidebar.attr('data', new_color);
                        }
    
                        if ($main_panel.length != 0) {
                            $main_panel.attr('data', new_color);
                        }
    
                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }
    
                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data', new_color);
                        }
                    });
    
                    $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function () {
                        var $btn = $(this);
    
                        if (sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            sidebar_mini_active = false;
                            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                        } else {
                            $('body').addClass('sidebar-mini');
                            sidebar_mini_active = true;
                            blackDashboard.showSidebarMessage('Sidebar mini activated...');
                        }
    
                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function () {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);
    
                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function () {
                            clearInterval(simulateWindowResize);
                        }, 1000);
                    });
    
                    $('.switch-change-color input').on("switchChange.bootstrapSwitch", function () {
                        var $btn = $(this);
    
                        if (white_color == true) {
    
                            $('body').addClass('change-background');
                            setTimeout(function () {
                                $('body').removeClass('change-background');
                                $('body').removeClass('white-content');
                            }, 900);
                            white_color = false;
                        } else {
    
                            $('body').addClass('change-background');
                            setTimeout(function () {
                                $('body').removeClass('change-background');
                                $('body').addClass('white-content');
                            }, 900);
    
                            white_color = true;
                        }
    
    
                    });
    
                    $('.light-badge').click(function () {
                        $('body').addClass('white-content');
                    });
    
                    $('.dark-badge').click(function () {
                        $('body').removeClass('white-content');
                    });
                });
            });
    </script>
    @hasSection ('js')
        @yield('js')
        
    @endif


</body>

</html>