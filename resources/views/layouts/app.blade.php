<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ISKOLAR SIS')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="/assets/jquery.js"></script>
    <script src="/assets/DataTables/datatables.min.js"></script>


    <link rel="stylesheet" href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/DataTables/datatables.min.css">
    <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</head>
<body class="font-sans antialiased h-screen bg-gray-100">

    @include('layouts.navigation')

    <div class="container mx-auto mt-4">

        @yield('content')

    </div>

</body>
</html>
