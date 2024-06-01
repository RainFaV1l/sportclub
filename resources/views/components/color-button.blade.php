@props([
    'px',
    'py',
    'size',
    'bg',
    'hoverBg',
    'color',
    'rounded' => true,
])

<button @isset($attributes->class) class="{{ $attributes->class }}" @endisset type="submit" style="padding: {{ $py }} {{ $px }};" class="transition duration-300 {{ $rounded ? 'rounded-full' : '' }}
    bg-{{ $bg }} text-{{ $color }} hover:bg-{{ $hoverBg }} {{ isset($size) ? 'text-'. $size : '' }}">{{ $slot }}
</button>
