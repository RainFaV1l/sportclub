@if ($exists())
    <div x-data="{ show: true}" x-init="setTimeout(() => show = false, 3000)">
        <div role="alert" {{ $attributes }} x-transition x-show="show">
            @if ($slot->isEmpty())
                {{ $message() }}
            @else
                {{ $slot }}
            @endif
        </div>
    </div>
@endif
