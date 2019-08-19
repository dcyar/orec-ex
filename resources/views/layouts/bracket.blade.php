<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Meta -->
        <meta name="description" content="Premium Quality and Responsive UI for Dashboard." />
        <meta name="author" content="ThemePixels" />
        <title>OREC | @yield('title')</title>
        <!-- vendor css -->
        <link href="{{ asset('bracket-plus/lib/fontawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('bracket-plus/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
        <!-- Bracket CSS -->
        <link href="{{ asset('bracket-plus/css/bracket.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- ########## START: LEFT PANEL ########## -->
        <div class="br-logo"><a href="{{ route('dashboard') }}"><span>[</span>OREC <i>EX</i><span>]</span></a></div>
        @include('layouts.includes.sidebar')
        <!-- ########## END: LEFT PANEL ########## -->

        <!-- ########## START: HEAD PANEL ########## -->
        @include('layouts.includes.navbar')
        <!-- ########## END: HEAD PANEL ########## -->

        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">

            @yield('content')

            <footer class="br-footer bg-gray-300">
                <div class="footer-left">
                    <div class="mg-b-2">Copyright © 2019. <strong><a href="https://www.github.com/dcyar/orec-ex" target="_blank">OREC EX</a></strong>. Todos los derechos reservados.</div>
                </div>
                <div class="footer-right d-flex align-items-center">
                    <div>Hecho por <a href="http://www.facebook.com/dcyar444" target="_blank"><strong>JhOn Al</strong></a></div>
                </div>
            </footer>
        </div>
        <!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
        <script src="{{ asset('bracket-plus/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bracket-plus/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
        <script src="{{ asset('bracket-plus/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script 6src="{{ asset('bracket-plus/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        {{-- <script src="{{ asset('bracket-plus/lib/moment/min/moment.min.js') }}"></script> --}}
        <script src="{{ asset('bracket-plus/lib/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('bracket-plus/js/bracket.js') }}"></script>

        @yield('extra-js')
    </body>
</html>