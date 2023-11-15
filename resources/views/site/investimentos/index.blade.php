<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Investimentos') }}
        </h2>
    </x-slot>

    <x-slot name="create">
        <div>
            <x-create-button route="investimentos.create" text="Incluir Investimento"></x-create-button>
        </div>
    </x-slot>
    
    <x-content-box>
        <h1>Investimentos, Ações e Fundos</h1>
    </x-content-box>
</x-app-layout>