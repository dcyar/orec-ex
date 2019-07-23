<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Meta -->
        <meta name="description" content="OREC es un sistema diseñado para la administración y expedición de actas de nacimiento, matrimonio y defunción." />
        <meta name="author" content="Jhon Marco Achata Limachi" />
        <title>OREC | @yield('title')</title>
        <!-- vendor css -->
        <link href="{{ asset('bracket-plus/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('bracket-plus/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
        <!-- Bracket CSS -->
        <link href="{{ asset('bracket-plus/css/bracket.css') }}" rel="stylesheet" />
    </head>
    <body>
        @yield('content')
        <!-- row -->
        <script src="{{ asset('bracket-plus/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bracket-plus/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
        <script src="{{ asset('bracket-plus/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>