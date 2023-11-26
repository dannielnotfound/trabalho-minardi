<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:m py-4 text-gray-800 leading-tight  ">
            {{__('Cadastro de Receitas')}}
        </h2>
    </x-slot>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form x-data="{ amount: '' }" class="space-y-6" method="POST" action="{{route('receitas.store')}}">
        @csrf

        <x-receitas.form :tipos="$tipos" />

    </form>
    
</x-app-layout>