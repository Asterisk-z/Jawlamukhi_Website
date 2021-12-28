<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="School Website">
        <meta name="keywords" content="School Website">
        <meta name="author" content="School Website">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>@yield('title') SICS JWALAMUKHI</title>
        <link href="{{ asset('assets/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
        <!-- Muse CSS -->
        <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="assets/css/flatpickr.min.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
        {{-- <link href="{{ asset('assets/vendor/aos/dist/aos.css') }}" rel="stylesheet" /> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"/>
        <link href="assets/css/simplebar.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,200;1,500;1,600&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}
        
        <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all">
        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
        <script src="https://use.fontawesome.com/f87a8d91a5.js"></script>

        @yield('style')
    </head>
    <body>

        @include('includes.header-o')



        @yield('content')



        @include('includes.footer')





        <!-- Muse Javascript Plugins -->
        {{-- <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> --}}
        <script src="assets/vendor/highcharts/highmaps.js"></script>
        <script src="assets/vendor/highcharts/modules/data.js"></script>
        <script src="assets/vendor/highcharts/mapdata/countries/us/us-all.js"></script>
        <script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/progressbar/dist/progressbar.min.js"></script>
        <script src="assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
        <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
        <script src="assets/vendor/purecounterjs/dist/purecounter.js"></script>
        <script src="{{ asset('assets/vendor/lodash/lodash.min.js') }}" type="8ba5fda72e152f3ffac882ff-text/javascript"></script>
        <script src="{{ asset('assets/vendor/aos/dist/aos.js') }}" type="8ba5fda72e152f3ffac882ff-text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     

        <script src="assets/js/theme-custom.js"></script>

        @yield('script')
    </body>
</html>
