@extends('layouts.web.content')

@section('content')
    <div class="text-center pt-8 md:pt-8">
        <h1 class="font-bold break-normal text-3xl md:text-5xl">{!! $page->name !!}</h1>
    </div>
    <div class="container max-w-5xl mx-auto">
        <div class="mx-0 sm:mx-6">
            <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal rounded">
                {!! $page->text !!}
            </div>
        </div>
    </div>
@endsection
