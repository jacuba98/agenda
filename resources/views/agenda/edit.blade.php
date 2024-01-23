<x-guest-layout>
    <form class="form_container" action="{{ route('agenda.update', $agenda->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('agenda.form')

        <x-primary-button class="sign-in_btn">
            {{ __('Actualizar') }}
        </x-primary-button>
    </form>
</x-guest-layout>
