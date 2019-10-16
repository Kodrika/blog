@extends('layouts.web.content')

@section('header')
    <link rel="amphtml" href="{!! $article->article_url !!}?amp=true">
@endsection

@section('content')
    <div class="text-center pt-8 md:pt-8">
        <p class="text-sm md:text-base text-darkslategray font-bold">{!! $article->localized_date !!} <span class="text-black">/</span>
            <a href="{!! route('web.category', $article->category->slug) !!}" class="no-underline hover:opacity-50">{!! $article->category->name !!}</a>
        </p>
        <h1 class="font-bold break-normal text-3xl md:text-5xl">{!! $article->name !!}</h1>
    </div>
    <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
         style="background-image:url('{!! $article->image_url !!}'); height: 75vh;"></div>
    <div class="container max-w-5xl mx-auto -mt-32">
        <div class="mx-0 sm:mx-6">
            <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal rounded">
                {!! $article->content !!}
                <div class="tags pt-5">
                    @foreach($article->tags as $v)
                        <a href="{!! route('web.tag', $v->slug) !!}">
                            <div class="p-2 bg-darkslategray items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                               <span class="font-libre p-1 text-left flex-auto">{!! $v->name !!}</span>
                                <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-200">
        <div class="container w-full max-w-6xl mx-auto px-2 py-8">
            <div class="flex flex-wrap -mx-2">
                @foreach($related as $r)
                    <div class="w-full md:w-1/3 px-2 pb-12">
                        <div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
                            <a href="{!! $r->article_url !!}" class="no-underline hover:no-underline">
                                <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
                                    <img data-src="{!! $r->image_url !!}" class="h-64 w-full rounded-t pb-6 lazy" alt="{!! $r->name !!}" />
                                    <p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">{!! $r->category->name !!}</p>
                                    <div class="font-libre w-full font-bold text-xl text-gray-900 px-6">{!! $r->name !!}</div>
                                    <p class="text-gray-800 font-serif text-base px-6 mb-5">{!! $r->summary !!}</p>
                                </div>
                                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6 border-t border-gray-300">
                                    <div class="flex items-center justify-between">
                                        <p class="text-gray-600 text-xs md:text-sm">{!! $r->time_ago !!}</p>
                                        <p class="text-gray-600 text-xs md:text-sm">{!! $r->reading_time !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
