<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="School Website">
    <meta name="keywords" content="School Website">
    <meta name="author" content="School Website">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title') - SICS JWALAMUKHI</title>
    <link href="{{ asset('assets/logo.png') }}" rel="shortcut icon" type="image/x-icon">

    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css"
        media="all">
    <link href="{{ asset('assets/vendor/aos/dist/aos.css') }}" rel="stylesheet" type="text/css" media="all">

    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" media="all">
</head>

<body class="error-template">

    <div class="container">
        <div class="row align-items-center vh-100">
            <div class="col-md-10 col-lg-7 m-auto py-4 py-md-5">
                <div class="text-center">
                    <h1 class="display-2 mb-4">@yield('code')</h1>
                    <p class="text-black-600">@yield('message')</p>
                    <div class="py-4 py-lg-5">
                        <img src="{{ asset('assets/logo.png') }}" alt="404" width="100">
                    </div>
                    <p><a href="{{ url('/') }}" class="btn btn-sm btn-success">Back Home</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"
        type="7a098823130deeb19ec2e122-text/javascript"></script>
    <script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="7a098823130deeb19ec2e122-|49" defer="">
    </script>
</body>


</html>
