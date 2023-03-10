<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') &mdash; LaraLog</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'public/dashboard/css/style.css'])
    <!-- a -->

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard/library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    @stack('style')
    <style>
        /* width */
        ::-webkit-scrollbar {
            opacity: 0;
            width: 5px;
        }

        /* Track */
        /* ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
         } */

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #fe5000;
            border-radius: 1.5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            overflow-y: scroll;
            opacity: 1;
            background: #101820;
        }

    </style>

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
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Header -->
            @include('dashboard.includes.header')

            <!-- Sidebar -->
            @include('dashboard.includes.sidebar')

            <!-- Content -->
            @yield('main')

            <!-- Footer -->
            @include('dashboard.includes.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('dashboard/library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('dashboard/library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('dashboard/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('dashboard/library/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/stisla.js') }}"></script>

    @stack('scripts')

    <!-- Template JS File -->
    <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
    <script src="{{ asset('dashboard/js/custom.js') }}"></script>
    <script>
        $(document).on('select2:open', function (e) {
            document.querySelector(`[aria-controls="select2-${e.target.id}-results"]`).focus();
        });

    </script>
</body>

</html>
