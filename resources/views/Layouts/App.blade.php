<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
</head>

<body>

    <div id="app">

        {{-- navbar --}}

        {{-- sidebar --}}
        @include('Layouts.Components.Sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @include('Layouts.Components.Navbar')


            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                <div class="container-fluid">
                    <div class="header-body">
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!--   Core   -->
    <script src="{{ asset('assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--   Optional JS   -->
    <script src="{{ asset('assets/js/plugins/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js/dist/Chart.extension.js') }}"></script>
    <!--   Argon JS   -->
    <script src="{{ asset('assets/js/argon-dashboard.min.js?v=1.1.2') }}"></script>
    <script src="{{ asset('https://cdn.trackjs.com/agent/v3/latest/t.js') }}"></script>
</body>

</html>
