<x-guest-layout>
    <form class="form_container" action="{{ route('register') }}" method="POST">
        @csrf

        <!-- Name -->
        <div class="input_container">
            <x-input-label class="input_label" for="name" :value="__('Name')" />
            <x-text-input id="name" class="input_form" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="input_container">
            <x-input-label class="input_label" for="email" :value="__('Email')" />
            <x-text-input id="email" class="input_form" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input_container">
            <x-input-label class="input_label" for="password" :value="__('Password')" />

            <x-text-input id="password" class="input_form" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="input_container">
            <x-input-label class="input_label" for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="input_form" type="password" name="password_confirmation"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-primary-button class="sign-in_btn">
            {{ __('Register') }}
        </x-primary-button>
    </form>
</x-guest-layout>
