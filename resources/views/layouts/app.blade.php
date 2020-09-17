<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @yield('styles')


    </head>
    <body>

    <div class="wrapper">

        <div class="sidebar" data-color="orange">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
            -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    PMT
                </a>

                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                   Management Tool
                </a>
            </div>

            <div class="sidebar-wrapper" id="sidebar-wrapper">
                @include('layouts.sidebar')
            </div>
        </div>

        <div class="main-panel" id="main-panel">

            @if (!isset($hidePanelHeader))
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="#pablo">Dashboard</a>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->

                <div class="panel-header panel-header-lg">
                    <canvas id="bigDashboardChart"></canvas>
                </div>
            @endif

            <div class="content">
                @yield('content')
            </div>

            <footer class="footer">
                <div class=" container-fluid ">
                    <div class="copyright" id="copyright">
                        Bruno Mattos &copy; <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>.
                    </div>
                </div>
            </footer>
        </div>

    </div>
    </body>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('scripts')

</html>
