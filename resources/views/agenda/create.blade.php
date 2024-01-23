<x-guest-layout>
    <form class="form_container" action="{{ route('agenda.store') }}" method="POST">
        @csrf

        <!-- Name -->
        <div class="input_container">
            <x-input-label class="input_label" for="name" :value="__('Name')" />
            <input placeholder="Example name" title="Inpit title" name="name" type="text" class="input_form"
                id="name" required autofocus>
        </div>

        <!-- Job -->
        <div class="input_container">
            <x-input-label class="input_label" for="job" :value="__('Job')" />
            <input placeholder="Suport" title="Inpit title" name="job" type="text" class="input_form"
                id="job" required>
        </div>

        <!-- Departament -->
        <div class="input_container">
            <x-input-label class="input_label" for="departament" :value="__('Departament')" />
            <input placeholder="Sistemas" title="Inpit title" name="departament" type="text" class="input_form"
                id="departament" required>
        </div>

        <!-- Hotel -->
        <div class="input_container">
            <x-input-label class="input_label" for="hotel" :value="__('Hotel')" />
            <input placeholder="Tulum" title="Inpit title" name="hotel" type="text" class="input_form"
                id="hotel" required>
        </div>


        <!-- Extension -->
        <div class="input_container">
            <x-input-label class="input_label" for="extension" :value="__('Extension')" />
            <input placeholder="28028" title="Inpit title" name="extension" type="text" class="input_form"
                id="extension" required>
        </div>


        <!-- Email Address -->
        <div class="input_container">
            <x-input-label class="input_label" for="email" :value="__('Email')" />
            <input placeholder="example@email.com" title="Inpit title" name="email" type="email" class="input_form"
                id="email" required>
        </div>

        <button class="sign-in_btn">
            {{ __('Register') }}
        </button>
    </form>
</x-guest-layout>
