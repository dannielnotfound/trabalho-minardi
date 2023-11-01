<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-lg text-gray-800 leading-tight">
            {{ __('Despesas') }}
        </h3>
        <div class="flex">
            <div class="hidden  sm:-my-px  sm:mt-2 sm:py-2 sm:flex">
                <x-nav-link :href="route('despesas.index')" :active="request()->routeIs('despesas.index')">
                    {{ __('Fixas') }}
                </x-nav-link>
            </div>
    
            <div class="hidden sm:-my-px sm:ml-10 sm:mt-2 sm:py-2 sm:flex">
                <x-nav-link :href="route('despesas.index')" :active="request()->routeIs('despesas.index')">
                    {{ __('Variaveis') }}
                </x-nav-link>
            </div>
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
</x-app-layout>
