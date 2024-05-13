<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('headers')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Castillo Personal Portfolio</title>
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
      <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
      <link href="{{asset ('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
      <link href="{{asset ('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
      </head>
<body>
    @yield('content')
    <script src="{{ asset ('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset ('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset ('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset ('assets/vendor/typed.js/typed.umd.js')}}"></script>
    <script src="{{ asset ('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset ('assets/vendor/php-email-form/validate.js')}}"></script>

    <script src="{{ asset ('assets/js/main.js')}}"></script>
</body>
</html>