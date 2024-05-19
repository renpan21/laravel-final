<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="col-12">
            <x-input-label for="email" :value="__('Email')" class="form-label"/>
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
        </div>

        <!-- Password -->
        <div class="col-12">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
        </div>

        <!-- Remember Me -->
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" value="true" id="remember_me">
                <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn btn-primary w-100">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="col-12">
            @if (Route::has('password.request'))
                <a class="small mb-0" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <div class="col-12">
            <a class="small mb-0" href="{{ route('register') }}">
                        {{ __('Dont have an account? Register.') }}
            </a>
        </div>
    </form>
</x-guest-layout>
