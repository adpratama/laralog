<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') &mdash; LaraLog.</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard/library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @stack('style')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');

    </script>
    <!-- END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="{{ Request::is('auth-register') ? 'col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2' : 'col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4' }}">
                        <!-- Footer -->
                        @include('dashboard.includes.auth-header')

                        <!-- Content -->
                        @yield('main')

                        <!-- Footer -->
                        @include('dashboard.includes.auth-footer')
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('dashboard/library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('dashboard/library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('dashboard/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ asset('dashboard/library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script> -->
    <script src="{{ asset('dashboard/library/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/stisla.js') }}"></script>

    @stack('scripts')

    <!-- Template JS File -->
    <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
    <script src="{{ asset('dashboard/js/custom.js') }}"></script>
</body>

</html>
