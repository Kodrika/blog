<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.meta')
    <link rel="stylesheet" href="{!! asset('css/blog.min.css') !!}" type="text/css">
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">
<div id="logo" class="w-full m-0 p-0 bg-cover bg-bottom bg-cover-lake">
    <div class=" max-w-4xl mx-auto pt-8 text-center break-normal">
        <p class="text-white font-extrabold text-2xl md:text-3xl font-libre">
            {!! config('project.name') !!}
        </p>
    </div>
</div>
<!-- Content -->
<div class="container px-2 md:px-0 max-w-6xl mx-auto -mt-32">
    <div class="mx-0 sm:mx-6">
       @yield('content')
    </div>
</div>
<footer class="bg-darkslategray mt-5">
    <div class="container max-w-6xl mx-auto flex items-center px-2 py-8">
        <div class="w-full mx-auto flex flex-wrap items-center">
            <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-light text-sm  mt-2">
                <span class="font-libre text-white">{!! config('project.copyright') !!}</span>
            </div>
            @if((bool)config('project.logo'))
                <div class="flex w-full content-center justify-between md:w-1/2 md:justify-end mt-2">
                    <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                        <li>
                            <a href="https://kodrika.com.tr/" target="_blank" rel="noopener">
                                <img class="opacity-25 hover:opacity-100 lazy" data-src="images/kodrika.png" alt="Kodrika Logo" />
                            </a>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</footer>
<button id="scrollToTop" class="hidden fixed right-0 bottom-0 mb-5 mr-5 bg-darkslategray font-semibold py-2 px-4 border border-white rounded">
    <i class="fa fa-arrow-up text-white"></i>
</button>
<!-- Assets -->
<script src="{!! asset('js/blog.min.js') !!}" type="application/javascript"></script>
</body>
</html>
