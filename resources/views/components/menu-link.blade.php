@props([
    'href'
])

<li class="transition duration-300 hover:text-accentBlue">
    <a href="{{ $href }}">{{ $slot }}</a>
</li>
