@extends('web.layout')

@section('content')
    @include('partials.navbars.home')
    <div class="bg-transparent w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
        @if($featured)
            <div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
                <a href="{!! $featured->article_url !!}" class="flex flex-wrap no-underline hover:no-underline">
                    <div class="w-full md:w-2/3 rounded-t">
                        <img data-src="{!! $featured->image_url !!}" class="h-full w-full shadow lazy" alt="{!! $featured->name !!}">
                    </div>
                    <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                        <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
                            <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">{!! $featured->category->name !!}</p>
                            <div class="w-full font-bold text-xl text-gray-900 px-6">{!! $featured->name !!}</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                {!! $featured->summary !!}
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">{!! $featured->time_ago !!}</p>
                                <p class="text-gray-600 text-xs md:text-sm">{!! $featured->reading_time !!}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endif
        <div class="flex flex-wrap justify-between -mx-6 pt-6">
            @foreach($articles as $v)
                <div class="w-full md:w-1/3 p-6  pt-0 flex flex-col flex-grow flex-shrink">
                    <a href="{!! $v->article_url !!}" class="no-underline hover:no-underline">
                        <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
                            <img data-src="{!! $v->image_url !!}" class="h-64 w-full rounded-t pb-6 lazy" alt="{!! $v->name !!}" />
                            <p class="w-full text-gray-600 text-xs md:text-sm px-6">{!! $v->category->name !!}</p>
                            <div class="font-libre w-full font-bold text-xl text-gray-900 px-6">{!! $v->name !!}</div>
                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                {!! $v->trimmed_summary !!}
                            </p>
                        </div>
                        <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 border-t border-gray-300">
                            <div class="flex items-center justify-between">
                                <p class="text-gray-600 text-xs md:text-sm">{!! $v->time_ago !!}</p>
                                <p class="text-gray-600 text-xs md:text-sm">{!! $v->reading_time !!}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {!! $articles->links() !!}
    </div>
@endsection
