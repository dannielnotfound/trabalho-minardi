<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Detalhes da Receita')}} <span class="text-red-600">{{$receita->id}}</span>
        </h2>
    </x-slot>

    <x-content-box>
        
        {{-- <div class="max-w-2xl mx-auto p-4 bg-white shadow-md rounded-md"> --}}
            <h2 class="text-2xl font-semibold mb-4">{{ $receita->nomeReceita }}</h2>
        
            <ul class="list-none p-0">
                <li class="mb-2">
                    <strong>ID da receita:</strong> {{ $receita->id }}
                </li>
                <li class="mb-2">
                    <strong>Receita:</strong> {{ $receita->nomeReceita }}
                </li>
                <li class="mb-2">
                    <strong>Valor: R$</strong> {{ $receita->valorReceita }}
                </li>
                <li class="mb-2">
                    <strong>Tipo de Receita:</strong> {{ \App\Helpers\getReceitasTipo($receita->tipoReceita) }}
                </li>
                <li class="mb-2">
                    <strong>Data de recebimento:</strong> {{ $receita->dataReceita }}
                </li>
                <li class="mb-2">
                    <strong>Data de Criação:</strong> {{ $receita->created_at->format('d/m/Y H:i:s') }}
                </li>
                <li class="mb-2">
                    <strong>Usuário:</strong> {{ $usuario->name }}
                </li>
            </ul>
        

    </x-content-box>
</x-app-layout>