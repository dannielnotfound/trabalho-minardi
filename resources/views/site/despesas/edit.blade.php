<x-app-layout>
    <x-form-section-despesas title="Atualizar depesa" > 
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{$error}}
            @endforeach
        @endif
            <form class="space-y-6" method="POST" action="{{route('despesas.update', $despesas->id)}}">
                @csrf
                @method('PUT')
    
                <x-despesas.form :status="$status" :tipos="$tipos" :despesa="$despesas"></x-despesas.form>
    
                <div class="flex w-full justify-between">
                    <x-secondary-button>
                        {{__('Cancelar')}}
                    </x-secondary-button>
                    <x-primary-button>
                        {{__('Atualizar')}}
                    </x-primary-butto>
                </div>
              </form>
        </x-form-section-despesas>

</x-app-layout>
