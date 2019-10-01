<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.meta')
    <!-- Assets -->
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
        <!-- Navbar -->
        <nav class="mt-0 w-full">
            <div class="mx-auto flex items-center">
                <div class="flex w-1/2 sm:w-full md:w-full text-sm hidden md:hidden lg:flex xl:flex">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <li class="mr-2">
                            <a class="font-libre no-underline text-white border-b-2 border-transparent tracking-wide font-bold text-md py-3 mr-8 hover:opacity-75" href="index.html">Home</a>
                        </li>
                        <li class="mr-2">
                            <a class="font-libre no-underline text-white border-b-2 border-transparent tracking-wide font-bold text-md py-3 mr-8 hover:opacity-75" href="about.html">About</a>
                        </li>
                        <li class="mr-2">
                            <a class="font-libre no-underline text-white border-b-2 border-transparent tracking-wide font-bold text-md py-3 mr-8 hover:opacity-75" href="#">Categories</a>
                        </li>
                        <li class="mr-2">
                            <a class="font-libre no-underline text-white border-b-2 border-transparent tracking-wide font-bold text-md py-3 mr-8 hover:opacity-75" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="flex w-1/2 sm:w-full md:w-full justify-end content-center  hidden md:hidden lg:flex xl:flex">
                    <a id="search-toggle" class="search-icon cursor-pointer inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#">
                        <i class="fa fa-search"></i>
                    </a>
                    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
                        <i class="fab fa-gitlab"></i>
                    </a>
                    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="#" target="_blank" rel="noopener">
                        <i class="fa fa-rss"></i>
                    </a>
                </div>
                <div class="block lg:hidden xl:hidden w-full">
                    <button id="nav-toggle" class="float-right px-3 py-2 border rounded text-white border-white mb-2">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
            </div>
            <div class="hidden lg:hidden xl:hidden w-full bg-darkslategray -mt-1 rounded mb-2" id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li>
                        <a class="font-libre inline-block py-2 px-4 text-white no-underline font-bold text-md" href="index.html">Homepage</a>
                    </li>
                    <li>
                        <a class="font-libre inline-block text-white no-underline py-2 px-4 font-bold text-md" href="about.html">About</a>
                    </li>
                    <li>
                        <a class="font-libre inline-block text-white no-underline py-2 px-4 font-bold text-md" href="#">Categories</a>
                    </li>
                    <li>
                        <a class="font-libre inline-block text-white no-underline py-2 px-4 font-bold text-md" href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4" href="#" target="_blank" rel="noopener">
                            <i class="fab fa-gitlab"></i>
                        </a>
                        <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4" href="#" target="_blank" rel="noopener">
                            <i class="fab fa-github"></i>
                        </a>
                        <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4" href="#" target="_blank" rel="noopener">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4" href="#" target="_blank" rel="noopener">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4" href="#" target="_blank" rel="noopener">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a class="inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4" href="#" target="_blank" rel="noopener">
                            <i class="fa fa-rss"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="relative w-full hidden bg-white shadow-xl rounded mb-2" id="search-content">
                <div class="container mx-auto py-4 text-black">
                    <form action="#" method="get">
                        <input id="searchfield" type="search" name="keyword" placeholder="Search..." autofocus="autofocus"
                               class="font-libre w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl" />
                    </form>
                </div>
            </div>
        </nav>
        <div class="bg-transparent w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
            <!--Posts Container-->
            <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                <a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
                    <div class="w-full md:w-2/3 rounded-t">
                        <img data-src="https://source.unsplash.com/collection/494263/800x600" class="h-full w-full shadow lazy" alt="Detail">
                    </div>
                    <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">GETTING STARTED</p>
                            <div class="w-full font-bold text-xl text-gray-900 px-6">👋 Welcome fellow Tailwind CSS and Ghost fan</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                This starter template is an attempt to replicate the default Ghost theme "Casper" using Tailwind CSS and vanilla Javascript.
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                                <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            <div class="flex flex-wrap justify-between -mx-6 pt-6">
                <!--1/3 col -->
                <div class="w-full md:w-1/3 p-6  pt-0 flex flex-col flex-grow flex-shrink">
                    <a href="post.html" class="no-underline hover:no-underline">
                        <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
                            <img data-src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6 lazy" alt="Detail" />
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="font-libre w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 border-t border-gray-300">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                                <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--1/3 col -->
                <div class="w-full md:w-1/3 p-6  pt-0 flex flex-col flex-grow flex-shrink">
                    <a href="post.html" class="no-underline hover:no-underline">
                        <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
                            <img data-src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6 lazy" alt="Detail" />
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="font-libre w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 border-t border-gray-300">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                                <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--1/3 col -->
                <div class="w-full md:w-1/3 p-6  pt-0 flex flex-col flex-grow flex-shrink">
                    <a href="post.html" class="no-underline hover:no-underline">
                        <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
                            <img data-src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6 lazy" alt="Detail" />
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="font-libre w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 border-t border-gray-300">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                                <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--1/3 col -->
                <div class="w-full md:w-1/3 p-6  pt-0 flex flex-col flex-grow flex-shrink">
                    <a href="post.html" class="no-underline hover:no-underline">
                        <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
                            <img data-src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6 lazy" alt="Detail" />
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="font-libre w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 border-t border-gray-300">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                                <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--1/3 col -->
                <div class="w-full md:w-1/3 p-6  pt-0 flex flex-col flex-grow flex-shrink">
                    <a href="post.html" class="no-underline hover:no-underline">
                        <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
                            <img data-src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6 lazy" alt="Detail" />
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="font-libre w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 border-t border-gray-300">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                                <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--1/3 col -->
                <div class="w-full md:w-1/3 p-6  pt-0 flex flex-col flex-grow flex-shrink">
                    <a href="post.html" class="no-underline hover:no-underline">
                        <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
                            <img data-src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6 lazy" alt="Detail" />
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="font-libre w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 border-t border-gray-300">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                                <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--1/2 col -->
                <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img data-src="https://source.unsplash.com/collection/3657445/800x600" class="h-full w-full rounded-t pb-6 lazy" alt="Detail">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                            <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                        </div>
                    </div>
                </div>
                <!--1/2 col -->
                <div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img data-src="https://source.unsplash.com/collection/764827/800x600" class="h-full w-full rounded-t pb-6 lazy" alt="Detail">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                            <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                        </div>
                    </div>
                </div>
                <!--2/3 col -->
                <div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img data-src="https://source.unsplash.com/collection/325867/800x600" class="h-full w-full rounded-t pb-6 lazy" alt="Detail">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                            <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                        </div>
                    </div>
                </div>
                <!--1/3 col -->
                <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                        <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                            <img data-src="https://source.unsplash.com/collection/1118905/800x600" class="h-full w-full rounded-t pb-6 lazy" alt="Detail">
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
                            <div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                Lorem ipsum eu nunc commodo posuere et sit amet ligula.
                            </p>
                        </a>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                        <div class="flex items-center justify-between">
                            <p class="text-gray-600 text-xs md:text-sm">4 months ago</p>
                            <p class="text-gray-600 text-xs md:text-sm">1 Min Read</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="flex flex-wrap justify-center -mx-6">
                <ul class="font-libre text-base flex list-reset border border-grey-light rounded w-auto bg-white">
                    <li><a class="block text-darkslategray hover:text-white hover:bg-darkslategray text-black border-r border-grey-light px-3 py-2" href="#">Previous</a></li>
                    <li><a class="block text-darkslategray hover:text-white hover:bg-darkslategray text-black border-r border-grey-light px-3 py-2" href="#">1</a></li>
                    <li><a class="block text-darkslategray hover:text-white hover:bg-darkslategray text-black border-r border-grey-light px-3 py-2" href="#">2</a></li>
                    <li><a class="block text-darkslategray bg-blue border-r border-blue px-3 py-2" href="#">3</a></li>
                    <li><a class="block text-darkslategray hover:text-white hover:bg-darkslategray text-black px-3 py-2" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<footer class="bg-darkslategray mt-5">
    <div class="container max-w-6xl mx-auto flex items-center px-2 py-8">
        <div class="w-full mx-auto flex flex-wrap items-center">
            <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-light text-sm  mt-2">
                <span class="font-libre text-white"><i class="fas fa-heart text-red-400"></i> Opensource</span>
            </div>
            <div class="flex w-full content-center justify-between md:w-1/2 md:justify-end mt-2">
                <ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
                    <li>
                        <a href="https://kodrika.com.tr/" target="_blank" rel="noopener">
                            <img class="opacity-25 hover:opacity-100 lazy" data-src="images/kodrika.png" alt="Kodrika Logo">
                        </a>
                    </li>
                </ul>
            </div>
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
