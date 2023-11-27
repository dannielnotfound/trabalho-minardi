<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- @dd($totalDespesas, $totalReceitas, $saldo) --}}

    <div class="container mx-auto mt-8">
    
        <x-content-box>
            <div class="flex w-full justify-between">
                <h1 class="text-2xl font-semibold mb-4">
                    Resumo Geral - {{ $mes ? \App\Helpers\mesPorExtenso($mes) . ' ' . date('Y') : 'Mês Atual' }}
                </h1>
                <form action="{{ route('dashboard') }}" method="get" class="mb-4">
                    <!-- Restante do seu formulário -->
                    
                    <select name="mes" id="mes" class="border p-2">
                        @for ($i = 1; $i <= 12; $i++)
                            <option value="{{ $i }}" {{ $i == $mes ? 'selected' : '' }}>
                                {{ \App\Helpers\mesPorExtenso($i) }}
                            </option>
                        @endfor
                    </select>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Filtrar</button>
                </form>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Despesas -->
                <div class="bg-red-200 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-2">Total de Despesas</h2>
                    <p class="text-3xl text-red-700">{{ 'R$ ' . number_format($totalDespesas, 2, ',', '.') }}</p>
                </div>
    
                <!-- Receitas -->
                <div class="bg-green-200 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-2">Total de Receitas</h2>
                    <p class="text-3xl text-green-700">{{ 'R$ ' . number_format($totalReceitas, 2, ',', '.') }}</p>
                </div>
    
                <!-- Saldo do Mês -->
                <div class="bg-blue-200 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-2">Saldo do Mês</h2>
                    <p class="text-3xl {{ $saldoMes < 0 ? 'text-red-700' : 'text-blue-700' }}">
                        {{ 'R$ ' . number_format($saldoMes, 2, ',', '.') }}
                    </p>
                </div>
    
                <!-- Despesas a Vencer -->
                <div class="bg-yellow-200 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-2">Despesas a Vencer</h2>
                    <p class="text-3xl text-yellow-700">{{ 'R$ ' . number_format($totalDespesasAVencer, 2, ',', '.') }}</p>
                </div>
    
                <!-- Despesas Pagas -->
                <div class="bg-green-200 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-2">Despesas Pagas</h2>
                    @php
                        $despesasPagasLabel = $totalDespesasPagas > 0 ? "R$ " . number_format($totalDespesasPagas, 2, ',', '.') . " de " . number_format(($totalDespesasAVencer + $totalDespesasPagas + $totalDespesasAtrasadas), 2, ',', '.') : "Nenhuma despesa paga";
                    @endphp
                    <p class="text-3xl text-green-700">{{ $despesasPagasLabel }}</p>
                </div>
    
                <!-- Despesas Atrasadas -->
                <div class="bg-red-200 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-2">Despesas Atrasadas</h2>
                    <p class="text-3xl text-red-700">{{ 'R$ ' . number_format($totalDespesasAtrasadas, 2, ',', '.') }}</p>
                </div>
    
                <!-- Total Despesas Acumulado -->
                <div class="bg-gray-200 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-2">Total de Despesas Acumulado</h2>
                    <p class="text-3xl text-gray-700">{{ 'R$ ' . number_format($totalDespesasAcumulado, 2, ',', '.') }}</p>
                </div>
    
                <!-- Total Receitas Acumulado -->
                <div class="bg-gray-200 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-2">Total de Receitas Acumulado</h2>
                    <p class="text-3xl text-gray-700">{{ 'R$ ' . number_format($totalReceitasAcumulado, 2, ',', '.') }}</p>
                </div>
    
                <!-- Saldo Acumulado -->
                <div class="bg-gray-200 p-4 rounded-md">
                    <h2 class="text-lg font-semibold mb-2">Saldo Acumulado</h2>
                    <p class="text-3xl {{ $saldoAcumulado < 0 ? 'text-red-700' : 'text-blue-700' }}">
                        {{ 'R$ ' . number_format($saldoAcumulado, 2, ',', '.') }}
                    </p>
                </div>
            </div>
            </div>
        </x-content-box>
   
    </div>
</x-app-layout>
