<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>@yield('title') &mdash; WB APP</title>

        <!-- General stylesheet -->
        <link rel="stylesheet" href="{{ asset('assets/stisla/modules/bootstrap/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/stisla/modules/fontawesome/css/all.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/stisla/css/components.css') }}" />

        @stack('stylesheet')

        <link rel="stylesheet" href="{{ asset('assets/stisla/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/stisla/css/custom.css') }}" />

    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">

                <!-- Navbar & sidebar -->
                @include('components.header')

                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">

                        <div class="section-header">
                            <h1>@yield('page-title')</h1>
                        </div>

                        <div class="section-body">
                            @yield('page-content')
                        </div>

                    </section>
                </div>

                <!-- Footer -->
                @include('components.footer')

            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="{{ asset('assets/stisla/modules/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/popper.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/tooltip.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/bootstrap/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/stisla/modules/nicescroll/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/stisla/js/stisla.js') }}"></script>

        @stack('scripts')

        <!-- Template JS File -->
        <script src="{{ asset('assets/stisla/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/stisla/js/custom.js') }}"></script>

    </body>
</html>



