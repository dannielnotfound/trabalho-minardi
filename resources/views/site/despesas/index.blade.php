<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Despesas') }}
        </h2>
    </x-slot>
    
    {{-- <div x-data="count()">
        <span x-text="count"></span>
        <button @click="increment()">
            Add
        </button>
    </div> --}}


    <div class="py-12 text-red" > 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    
                   <a href="#modal">
                       Cadastrar nova despesas
                    </a>

                    <x-modal :name="'Cadastrar nova despesa'">
                        <x-form-section-despesas title="Cadastrar nova depesa" method='POST' action='despesas.store'> 
                            <x-form></x-form>
                        </x-form-section-despesas>
                    </x-modal>
                </div>
                
                
        </div>
    </div>
</div> 

</x-app-layout>



  