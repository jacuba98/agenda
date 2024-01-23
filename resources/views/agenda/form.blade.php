<!-- Name -->
<div class="input_container">
    <x-input-label class="input_label" for="name" :value="__('Name')" />
    <x-text-input id="name" class="input_form" type="text" name="name" :value="old('name', $agenda->name)" required autofocus
        autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Job -->
<div class="input_container">
    <x-input-label class="input_label" for="job" :value="__('Job')" />
    <x-text-input id="job" class="input_form" type="text" name="job" :value="old('job', $agenda->job)" required
        autocomplete="job" />
    <x-input-error :messages="$errors->get('job')" class="mt-2" />
</div>

<!-- Departament -->
<div class="input_container">
    <x-input-label class="input_label" for="departament" :value="__('Departament')" />
    <x-text-input id="departament" class="input_form" type="text" name="departament" :value="old('departament', $agenda->departament)" required
        autocomplete="departament" />
    <x-input-error :messages="$errors->get('departament')" class="mt-2" />
</div>

<!-- Hotel -->
<div class="input_container">
    <x-input-label class="input_label" for="hotel" :value="__('Hotel')" />
    <x-text-input id="hotel" class="input_form" type="text" name="hotel" :value="old('hotel', $agenda->hotel)" required
        autocomplete="hotel" />
    <x-input-error :messages="$errors->get('hotel')" class="mt-2" />
</div>

<!-- Extension -->
<div class="input_container">
    <x-input-label class="input_label" for="extension" :value="__('Extension')" />
    <x-text-input id="extension" class="input_form" type="text" name="extension" :value="old('extension', $agenda->extension)" required
        autocomplete="extension" />
    <x-input-error :messages="$errors->get('extension')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="input_container">
    <x-input-label class="input_label" for="email" :value="__('Email')" />
    <x-text-input id="email" class="input_form" type="email" name="email" :value="old('email', $agenda->email)" required
        autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>
