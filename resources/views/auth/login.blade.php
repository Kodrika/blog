@extends('layouts.web.content')

@section('content')
    <div class="text-center pt-8 md:pt-8">
        <h1 class="font-bold break-normal text-3xl md:text-5xl">{{ __('Login') }}</h1>
    </div>
    <div class="container max-w-5xl mx-auto">
        <div class="mx-0 sm:mx-6">
            <div class="w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal rounded">
                <div class="px-6 rounded text-darkslategray w-full">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input
                            type="email"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="{{ __('E-Mail Address') }}" required />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input
                            type="password"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="password"
                            placeholder="{{ __('Password') }}" required />
                        <button type="submit" class="w-full text-center py-3 rounded bg-darkslategray text-white hover:bg-green-dark focus:outline-none my-1">{{ __('Login') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
