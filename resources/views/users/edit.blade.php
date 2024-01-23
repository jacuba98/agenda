<x-guest-layout>
    <form class="form_container" action="{{ route('user.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="input_container">
            <x-input-label class="input_label" for="name" :value="__('Name')" />
            <x-text-input id="name" class="input_form" type="text" name="name" :value="$users->name" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="input_container">
            <x-input-label class="input_label" for="email" :value="__('Email')" />
            <x-text-input id="email" class="input_form" type="email" name="email" :value="$users->email" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input_container">
            <x-input-label class="input_label" for="password" :value="__('Password')" />

            <x-text-input id="password" class="input_form" type="password" name="password"
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <x-primary-button class="sign-in_btn">
            {{ __('Actualizar') }}
        </x-primary-button>
    </form>
</x-guest-layout>
