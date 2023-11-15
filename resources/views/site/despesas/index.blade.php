<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Despesas') }}
        </h2>
    </x-slot>

    <x-slot name="create">
        <div>
            <x-create-button route="despesas.create" text="Incluir Despesa"></x-create-button>
        </div>
    </x-slot>
    
    <x-content-box>
        <h1>Despesas</h1>

       <div class="">
        @foreach ($despesas as $depesa)
            {{$depesa->titulo}}
        @endforeach
        {{ dd($despesas->links()) }}
       </div>

    </x-content-box>

</x-app-layout>



  