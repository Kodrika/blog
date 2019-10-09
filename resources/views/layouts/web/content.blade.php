<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    @include('partials.meta')
    <link rel="stylesheet" href="{!! asset('css/blog.min.css') !!}" type="text/css">
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal flex min-vh-100 flex-col min-h-screen">
    <header>
        @include('partials.navbars.content')
    </header>
    <main class="flex-1">
        @yield('content')
    </main>
    @include('partials.footer')
<script src="{!! asset('js/blog.min.js') !!}" type="application/javascript"></script>

</body>
</html>
