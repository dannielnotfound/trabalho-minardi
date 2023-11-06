@props([
    'title',
    'method',
    'action'
])

<div>
    <div class="flex min-h-full flex-col justify-center px-6 py-10 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm ">
          {{-- <div class="bg-black rounded">
            <x-application-logo class="mx-auto h-14 w-auto"></x-application-logo>
          </div>
           --}}
          <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{$title}}</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="{{route("$action")}}" method="{{$method}}">
        
            {{$slot}}

            <div class="flex w-full justify-between">
                <x-secondary-button href="#" class="bg-red-500 ">
                    {{__('Cancelar')}}
                </x-secondary-butto>
                <x-primary-button>
                    {{__('Cadastrar')}}
                </x-primary-butto>
            </div>
          </form>
        </div>
    </div>
</div>
