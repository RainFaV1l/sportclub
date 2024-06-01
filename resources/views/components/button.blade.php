@props([
    'type',
    'px',
    'py',
    'size',
])

<button style="padding: {{ $py }} {{ $px }};"
    class="rounded-full transition duration-300 border border-dark border-opacity-25
    @isset($attributes->class) {{ $attributes->class }} @endisset
    {{ !empty($type) && $type === 'outline' ? 'hover:border-transparent hover:bg-accentBlue hover:text-white'
    : 'bg-accentBlue text-white hover:bg-transparent hover:text-dark hover:border-dark hover:border-opacity-25' }}
    {{ isset($size) ? 'text-'. $size : '' }}">
    {{ $slot }}
</button>
