@extends('web.layout')

@section('content')
    @include('partials.navbars.home')
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
@endsection
