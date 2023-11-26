<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-8">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Balanço Financeiro</h2>

            <div class="grid grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Despesas Não Pagas</h3>
                    <p class="text-gray-700">Total: R$ {{ number_format($totalDespesas, 2, ',', '.') }}</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-2">Receitas Recebidas</h3>
                    <p class="text-gray-700">Total: R$ {{ number_format($totalReceitas, 2, ',', '.') }}</p>
                </div>
            </div>

            <hr class="my-6">

            <h3 class="text-xl font-semibold mb-2">Balanço</h3>
            <p class="text-gray-700">Balanço Atual: R$ {{ number_format($balanco, 2, ',', '.') }}</p>
        </div>
    </div>
</x-app-layout>
