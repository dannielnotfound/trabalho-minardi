<x-app-layout>
    {{-- @dd($status, $tipo) --}}
    <x-form-section-despesas title="Cadastrar nova depesa" > 
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
        <form class="space-y-6" method="POST" action="{{route('despesas.store')}}">
            @csrf

            <x-despesas.form :status="$status" :tipos="$tipos"></x-despesas.form>

            <div class="flex w-full justify-between">
                <x-secondary-button href='{{redirect()->back()}}'>
                    {{__('Cancelar')}}
                </x-secondary-butto>
                <x-primary-button>
                    {{__('Cadastrar')}}
                </x-primary-butto>
            </div>
          </form>
    </x-form-section-despesas>
</x-app-layout>
