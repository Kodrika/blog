<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    @include('partials.meta')
    <link rel="stylesheet" href="{!! asset('css/blog.min.css') !!}" type="text/css">
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal flex min-vh-100 flex-col min-h-screen">
<header>
<div id="logo" class="w-full m-0 p-0 bg-cover bg-bottom bg-cover-lake">
    <div class=" max-w-4xl mx-auto pt-8 text-center break-normal">
        <a href="{!! route('web.home') !!}" class="no-underline">
            <p class="text-white font-extrabold text-2xl md:text-3xl font-libre">
                {!! config('project.name') !!}
            </p>
        </a>
    </div>
</div>
</header>
@include('partials.sidebar')
<main class="flex-1" data-apoc-sidebar-sibling>
    <div class="container px-2 md:px-0 max-w-6xl mx-auto -mt-32">
        <div class="mx-0 sm:mx-6">
            @include('partials.navbars.app')
            @yield('content')
        </div>
    </div>
</main>
@include('partials.footer')
<script src="{!! asset('js/blog.min.js') !!}" type="application/javascript"></script>
@auth
    <script src="{!! asset('js/admin.min.js') !!}" type="application/javascript"></script>
@endauth
</body>
</html>
