<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('core.partials.link')
</head>

<body class="bg-[#FFFFFF] w-full min-h-screen">
    <div class="max-w-[1440px] mx-auto">
        @include('core.partials.navbar')
        @yield('content')
        @include('core.partials.footer')
    </div>
    @include('core.partials.script')
    @stack('scripts')
</body>

</html>
