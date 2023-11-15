<div>
  <div class="flex min-h-full flex-col justify-center px-6 py-10 lg:px-8 ">
    <div class="sm:mx-auto sm:w-full bg-white rounded-md shadow-md px-4 py-8 sm:max-w-lg">
        <div class="">
          <div class="bg-white rounded">
            {{-- <x-application-logo class="mx-auto h-14 w-auto"></x-application-logo> --}}
            <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{$title}}</h2>
          </div>
        </div>
        <div class="mt-10 ">
          {{$slot}}
        </div>
    </div>  
  </div>
</div>

