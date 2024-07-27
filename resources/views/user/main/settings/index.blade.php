@extends('user.part.master')
@section('title', 'Settings')
@section('content')
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>
        {{-- make button to be seller write your email --}}
        <br>
        <br>
        <br>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="container">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                want to make money by selling product </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                write your email here.</p>
                        </header>
                        {{-- <h2 class="fa-xl">want to make money by selling product .</h2>
                        <h3 class="mt-3">write your email here</h3> --}}
                        {{-- <a class="btn btn-success mt-3" href="">register now</a> --}}
                        <form class="mt-3" action="{{route('user.seller-request')}}" method="POST">
                            @csrf
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
<button class="btn btn-dark mt-3" type="submit">register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
