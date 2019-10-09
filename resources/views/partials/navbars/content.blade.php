<nav id="logo" class="bg-darkslategray p-4 mt-0 w-full">
    <div class="flex flex-wrap mx-auto">
        <div class="w-full lg:w-1/2 xl:w-1/2 my-auto hidden md:hidden lg:flex xl:flex">
            <ul class="list-reset flex flex-1 flex-wrap items-center">
                @foreach($navbar as $v)
                    <li class="mr-2">
                        <a class="font-libre no-underline text-white border-b-2 border-transparent tracking-wide font-bold text-md py-3 mr-8 hover:opacity-75"
                           href="{!! $v['url'] !!}">{!! $v['name'] !!}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="w-full lg:w-1/2 xl:w-1/2 hidden md:hidden lg:flex xl:flex">
            <div class="flex justify-end flex-1">
                <a id="search-toggle" class="search-icon cursor-pointer inline-block text-white no-underline text-center h-10 p-2 md:h-auto md:p-4 hover:opacity-75" href="javascript:">
                    <i class="fa fa-search"></i>
                </a>
                @include('partials.social')
            </div>
        </div>
        <div class="block lg:hidden xl:hidden w-full">
            <p class="text-white font-extrabold text-2xl md:text-3xl font-libre float-left">
                {!! config('project.name') !!}
            </p>
            <button id="nav-toggle" class="float-right px-3 py-2 border rounded text-white border-white mb-2">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
    </div>
</nav>
<div class="hidden lg:hidden xl:hidden w-full bg-darkslategray -mt-1 rounded mb-2" id="nav-content">
    <ul class="list-reset lg:flex justify-end flex-1 items-center">
        @foreach($navbar as $v)
            <li>
                <a class="font-libre inline-block py-2 px-4 text-white no-underline font-bold text-md" href="{!! $v['url'] !!}">{!! $v['name'] !!}</a>
            </li>
        @endforeach
        <li>
            @include('partials.social')
        </li>
    </ul>
</div>
<div class="relative w-full hidden bg-white shadow-xl rounded mb-2" id="search-content">
    <div class="container mx-auto py-4 text-black">
        <form action="{!! route('web.home') !!}" method="get">
            <input type="search" name="search" placeholder="{!! __('Search...') !!}" autofocus="autofocus"
                   class="font-libre w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl" />
        </form>
    </div>
</div>
