<x-guest-layout>
    <form action="{{ route('agenda.store') }}" method="POST">
        @csrf

        @include('agenda.form')

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4 bg-pinero-400 hover:bg-pinero-500 focus:bg-pinero-300">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
