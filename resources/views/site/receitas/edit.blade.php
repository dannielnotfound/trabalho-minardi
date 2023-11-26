<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Atualizar Receita') }}
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
    <form x-data="{ amount: '' }" class="space-y-6" method="POST" action="{{route('receitas.update', $receita->id)}}">
        @csrf
        @method('PUT')
        <x-receitas.form :tipos="$tipos" :receita="$receita" />
    </form>
</x-app-layout>