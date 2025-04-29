<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Provider Connect' }}</title>
    @vite(['resources/assets/vendor/fontawesome-free/css/all.min.css', 'resources/assets/css/sb-admin-2.min.css', 'resources/assets/vendor/jquery/jquery.min.js', 'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', 'resources/assets/vendor/jquery-easing/jquery.easing.min.js', 'resources/assets/js/sb-admin-2.min.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body  class="bg-gradient-primary">

    {{ $slot }}



</body>

</html>
