<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Detalhes da despesa')}} <span class="text-red-600">{{$despesa->id}}</span>
        </h2>
    </x-slot>

    <x-content-box>
        
        {{-- <div class="max-w-2xl mx-auto p-4 bg-white shadow-md rounded-md"> --}}
            <h2 class="text-2xl font-semibold mb-4">{{ $despesa->titulo }}</h2>
        
            <ul class="list-none p-0">
                <li class="mb-2">
                    <strong>ID da Despesa:</strong> {{ $despesa->id }}
                </li>
                <li class="mb-2">
                    <strong>Descrição:</strong> {{ $despesa->descricao }}
                </li>
                <li class="mb-2">
                    <strong>Status:</strong> {{ \App\Helpers\getDespesasStatus($despesa->status) }}
                </li>
                <li class="mb-2">
                    <strong>Tipo de Despesa:</strong> {{ \App\Helpers\getDespesasTipo($despesa->tipo_despesa) }}
                </li>
                <li class="mb-2">
                    <strong>Data de Vencimento/Pagamento:</strong> {{ $despesa->vencimento }}
                </li>
                <li class="mb-2">
                    <strong>Data de Criação:</strong> {{ $despesa->created_at->format('d/m/Y H:i:s') }}
                </li>
                <li class="mb-2">
                    <strong>Usuário:</strong> {{ $usuario->name }}
                </li>
            </ul>
        {{-- </div> --}}
        

    </x-content-box>
</x-app-layout>