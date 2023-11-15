@props([
    'route',
    'text'
])

<button 
{{$attributes->merge(['class' => 'sm:m py-2 px-4 text-sm cursor-pointer bg-black border-b font-bold border-black outline-green-500 text-green-500   rounded-md hover:text-green-700 hover:bg-black hover:border-gray focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'])}}>
    <a href="{{route($route)}}">{{$text}}</a>
</button>