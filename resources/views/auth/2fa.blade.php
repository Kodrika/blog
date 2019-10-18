@extends('layouts.web.content')

@section('content')
    <div class="text-center pt-8 md:pt-8">
        <h1 class="font-bold break-normal text-3xl md:text-5xl">{{ __('Register') }}</h1>
    </div>
    <div class="container max-w-5xl mx-auto">
        <div class="mx-0 sm:mx-6">
            <div class="w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal rounded">
                <div class="text-darkslategray flex content-center justify-center">
                    <div>
                        <img src="data:image/svg+xml;base64,{!! $qr !!}" style="width: 400px; height: 400px;" />
                        <p>{{ __('Scan the QR code or use the code :') }}</p>
                        <p>{{ $secret }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
