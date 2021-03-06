<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    @include('partials.meta')
    <link rel="stylesheet" href="{!! asset('css/blog.min.css') !!}" type="text/css">
    @yield('header')
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal flex min-vh-100 flex-col min-h-screen">
    <header>
        @include('partials.navbars.content')
    </header>
    @include('partials.sidebar')
    <main class="flex-1" data-apoc-sidebar-sibling>
        @yield('content')
    </main>
    @include('partials.footer')
<script src="{!! asset('js/blog.min.js') !!}" type="application/javascript"></script>
@auth
    <script src="{!! asset('js/admin.min.js') !!}" type="application/javascript"></script>
@endauth
</body>
</html>
