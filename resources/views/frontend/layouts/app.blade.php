<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bigyan Kharel" />
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">
    <!-- scripts -->
    @vite(['resources/css/frontend/plugins/swiper.min.css', 'resources/css/frontend/style.css', 'resources/css/frontend/custom.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body class="gradient-bg">
    @include('frontend.svgs.homepagesvgs')
    @include('frontend.partials.navbar')
    <main>

        @yield('main')
        <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

    </main>

    @include('frontend.partials.footer')

    <div id="scrollTop" class="visually-hidden end-0"></div>
    <div class="page-overlay"></div>
    {{-- @vite(['public/frontendjs/plugins/jquery.min.js', 'public/frontend/js/plugins/bootstrap.bundle.min.js', 'public/frontend/js/plugins/bootstrap-slider.min.js', 'public/frontend/js/plugins/swiper.min.js', 'public/frontend/js/plugins/countdown.js', 'public/frontend/js/theme.js']) --}}
    <script src="{{ asset('frontend/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/countdown.js') }}"></script>
    <script src="{{ asset('frontend/js/theme.js') }}"></script>
</body>

</html>