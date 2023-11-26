@props(['despesas'])
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-green-600 uppercase bg-black">
            <tr>
                <th scope="col" class="px-6 py-3 font-extrabold">
                    Titulo
                </th>
                <th scope="col" class="px-6 py-3">
                    Descrição
                </th>
                <th scope="col" class="px-6 py-3">
                    Valor
                </th>
                <th scope="col" class="px-6 py-3">
                    Vencimento
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Ações
                </th>
            </tr>
            <tbody>
               
                @foreach ($despesas as $despesa)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 hover:bg-gray-200 hover:text-black transition-all">
                        <td class="px-6 py-4">{{$despesa->titulo}}</td>
                        <td class="px-6 py-4">{{$despesa->descricao}}</td>
                        <td class="px-6 py-4">R$ {{$despesa->valor}}</td>
                        <td class="px-6 py-4">{{
                            \Carbon\Carbon::parse($despesa->vencimento)->format('d/m/Y')
                        }}</td>
                        <td class="px-6 py-4">{{ \App\Helpers\getDespesasStatus($despesa->status) }}</td>
                        <td class="px-6 py-4">

                            <div class="flex items-center">
                            
                                <a class="mr-4" title="Detalhes" href="{{route('despesas.show', $despesa->id)}}">
                                    <i class="fa fa-eye text-yellow-400"></i>
                                </a>
    
                                <a class="mr-4" title="Editar"  href="{{route('despesas.edit', $despesa->id)}}">
                                    <i class="fa fa-pen text-blue-600"></i>
                                </a>
                                
    
                                <div x-data="{ open: false }">
                                    <!-- Âncora de excluir -->
                                    <a href="#" @click="open = true">
                                        <i class="fa fa-trash text-red-600"></i>
                                    </a>
                                    
                                    <!-- Modal -->
                                    <div x-show="open">
                                        <x-despesas.delete :despesa="$despesa"/>
                                    </div>  
                                </div>
                            </div>
                            

                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
</div>