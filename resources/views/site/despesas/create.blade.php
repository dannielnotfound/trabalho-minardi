<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:my-4 text-gray-800 leading-tight">
            {{ __('Cadastrar Despesa') }}
        </h2>
    </x-slot>
    
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <form class="space-y-6" method="POST" action="{{route('despesas.store')}}">
            @csrf
            <x-despesas.form :status="$status" :tipos="$tipos"></x-despesas.form>
        </form>
</x-app-layout>
