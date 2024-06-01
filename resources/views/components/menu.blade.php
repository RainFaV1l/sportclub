@props([
    'links'
])

<ul class="flex items-center gap-[30px] text-sm sm:text-base">
    @foreach($links as $link)
        @if(isset($link->auth) && $link->auth && auth()->user())
            <x-menu-link :href="isset($link->hash) && $link->hash ? $link->routeName : route($link->routeName)">{{ $link->name }}</x-menu-link>
        @elseif(!isset($link->auth))
            <x-menu-link :href="isset($link->hash) && $link->hash ? $link->routeName : route($link->routeName)">{{ $link->name }}</x-menu-link>
        @endif
    @endforeach
</ul>
