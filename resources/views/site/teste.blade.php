<x-app-layout>  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Despesas  ') }} 
        </h2>
        <button type="button" class="inline text-white bg-gradient-to-br from-green-400 to-blue-600 transition ease-in-out delay-150 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">{{__('Cadastrar Despesa ')}}</button>
   
               
    
        </div>
    </x-slot>

    
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
        

                    {{ __("Gerencie e cadastre todas as suas despesas!") }}
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Gerencie e cadastre todas as suas despesas!") }}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>    