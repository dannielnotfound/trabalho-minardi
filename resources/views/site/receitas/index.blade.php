<x-app-layout>

    
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:m py-4 text-gray-800 leading-tight  ">
            {{__('Receitas')}}
        </h2>
    </x-slot>

    {{-- <x-slot name="create">
        <div x-data="{create: false, teste: true}"  class="">
            <button @click="create = true" class="sm:m py-2 px-4 text-sm cursor-pointer bg-black border-b font-bold border-black outline-green-500 text-green-500   rounded-md hover:text-green-700 hover:bg-black hover:border-gray focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                <a>Incluir Receita</a>
            </button>
            <span x-show="create">
                <x-modal name="teste"></x-modal>
            </span>
        </div>
    </x-slot> --}}

    <x-slot name="create">
        <div>
            <x-create-button route="receitas.create" text="Incluir Receita"></x-create-button>
        </div>
    </x-slot>
    
    <x-content-box>
        <h1>Receitas</h1>
    </x-content-box>
</x-app-layout>