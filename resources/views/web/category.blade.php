@extends('layouts.web.app')

@section('content')
    <div class="bg-transparent w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
        @if(!$articles->isEmpty())
            <div class="flex flex-wrap justify-between -mx-6 pt-6">
                @foreach($articles as $v)
                    <div class="w-full md:w-1/3 p-6  pt-0 flex flex-col flex-grow flex-shrink">
                        <a href="{!! $v->article_url !!}" class="no-underline hover:no-underline">
                            <div class="flex-1 bg-white rounded overflow-hidden shadow-lg">
                                <img data-src="{!! $v->image_url !!}" class="h-64 w-full rounded-t pb-6 lazy" alt="{!! $v->name !!}" />
                                <p class="w-full text-gray-600 text-xs md:text-sm px-6">{!! $category->name !!}</p>
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
        @else
            <div class="bg-darkslategray border-t-4 border-white rounded-b text-white px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-white mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-libre">{{ __('No articles found.') }}</p>
                    </div>
                </div>
            </div>
            <img data-src="{!! asset('images/search.svg') !!}" class="h-64 mt-6 w-full lazy" alt="Not Found Image" />
        @endif
    </div>
@endsection
