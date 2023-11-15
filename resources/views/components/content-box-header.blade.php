@props([
    'title',
    'route'
])

<div class="">
    <button>
        <a href="{{route($route)}}">{{__($title)}}</a>
    </button>
</div>