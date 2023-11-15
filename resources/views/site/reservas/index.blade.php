<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Reservas') }}
        </h2>
    </x-slot>

    <x-slot name="create">
        <div>
            <x-create-button route="reservas.create" text="Incluir Reserva"></x-create-button>
        </div>
    </x-slot>
    
    <x-content-box>
        <h1>Reservas</h1>
    </x-content-box>
</x-app-layout>