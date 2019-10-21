@extends('layouts.web.content')

@section('content')
    <div class="text-center pt-8 md:pt-8">
        <h1 class="font-bold break-normal text-3xl md:text-5xl">{{ __('Profile') }}</h1>
    </div>
    <div class="container max-w-5xl mx-auto">
        <div class="mx-0 sm:mx-6">
            <div class="w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal rounded">
                <div class="px-6 rounded text-darkslategray w-full">
                    @if(Session::has('OK') === true)
                        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-4" role="alert">
                            <div class="flex">
                                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                <div>
                                    <p class="font-bold">{{ __('Completed') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($errors->any())
                            <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md mb-4" role="alert">
                                <div class="flex">
                                    <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                    <div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    @endif
                    <form method="POST" action="{{ route('admin.profile.update') }}">
                        @csrf
                        <input
                            type="email"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="email"
                            value="{{ old('email', $user->email) }}"
                            placeholder="{{ __('E-Mail Address') }}" required />
                        <input
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="name"
                            value="{{ old('name', $user->name) }}"
                            placeholder="{{ __('Name') }}" required />
                        <input
                            type="password"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="password"
                            placeholder="{{ __('Password') }}" />
                        <button type="submit" class="w-full text-center py-3 rounded bg-darkslategray text-white hover:bg-green-dark focus:outline-none my-1">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
