<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Dashboard') - {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    @include('layouts.partials.styles')
    @stack('styles')
</head>

<body class="h-full bg-body font-sans text-[13px] text-slate-700">
    <div id="mobileSidebarOverlay" class="mobile-sidebar-overlay"></div>
    <div class="flex h-screen overflow-hidden">
        @include('layouts.partials.sidebar')

        <div class="flex-1 flex flex-col min-w-0">
            @include('layouts.partials.header')

            <main class="flex-1 overflow-y-auto p-4 md:p-6">
                @yield('content')
            </main>
        </div>
    </div>

    @include('layouts.partials.scripts')
    @stack('scripts')
</body>

</html>
