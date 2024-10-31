@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="text-lg font-semibold text-center mb-4">{{ __('Login') }}</div>

                <div class="mt-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 text-left">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-input @error('email') border-red-500 @enderror w-full border rounded-md shadow-sm py-2 px-3" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="text-red-500 text-xs mt-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 text-left">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-input @error('password') border-red-500 @enderror w-full border rounded-md shadow-sm py-2 px-3" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="text-red-500 text-xs mt-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4 flex items-center">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="ml-2 text-gray-600" for="remember">{{ __('Remember Me') }}</label>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
