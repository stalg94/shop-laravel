@extends('pet-shop.layout')

@section('content')


  <div class="login-register-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <!-- Email Address -->
                                                <div>
                                                    <x-label for="email" :value="__('Email')" />

                                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                                </div>

                                                <!-- Password -->
                                                <div class="mt-4">
                                                    <x-label for="password" :value="__('Password')" />

                                                    <x-input id="password" class="block mt-1 w-full"
                                                                    type="password"
                                                                    name="password"
                                                                    required autocomplete="current-password" />
                                                </div>

                                                <!-- Remember Me -->
                                                <div class="block mt-4">
                                                    <label for="remember_me" class="inline-flex items-center">
                                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                    </label>
                                                </div>

                                                <div class="flex items-center justify-end mt-4">
                                                    @if (Route::has('password.request'))
                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                            {{ __('Forgot your password?') }}
                                                        </a>
                                                    @endif
                                                    <br/>
                                                    <br/>
                                                    <div class="button-box">
                                                        <x-button class="ml-3">
                                                            {{ __('Log in') }}
                                                        </x-button>
                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <!-- Name -->
                                                <div>
                                                    <x-label for="name" :value="__('Name')" />

                                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                                </div>

                                                <!-- Email Address -->
                                                <div class="mt-4">
                                                    <x-label for="email" :value="__('Email')" />

                                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                                </div>

                                                <!-- Password -->
                                                <div class="mt-4">
                                                    <x-label for="password" :value="__('Password')" />

                                                    <x-input id="password" class="block mt-1 w-full"
                                                                    type="password"
                                                                    name="password"
                                                                    required autocomplete="new-password" />
                                                </div>

                                                <!-- Confirm Password -->
                                                <div class="mt-4">
                                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                                                    type="password"
                                                                    name="password_confirmation" required />
                                                </div>

                                                <div class="flex items-center justify-end mt-4">
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                        {{ __('Already registered?') }}
                                                    </a>
                                                    <br/>
                                                    <br/>

                                                    <div class="button-box">
                                                        <x-button class="ml-4">
                                                            {{ __('Register') }}
                                                        </x-button>
                                                        </div>


                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
