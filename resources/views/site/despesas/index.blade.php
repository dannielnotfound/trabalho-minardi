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
       
        @if (!count($despesas) == 0 )
            <x-despesas.table :despesas="$despesas"></x-despesas>
            {{-- <x-despesas.pagination :paginator="$despesas"></x-despesas.pagination> --}}
        @else
          <h1>Você ainda não possuí despesas cadastradas.</h1>  
        @endif
    </x-content-box>

</x-app-layout>



  