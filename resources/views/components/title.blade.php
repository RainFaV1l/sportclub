@props([
    'title',
    'subtitle'
])

<div class="border-b border-dark border-opacity-25">
    <div class="container py-[50px] flex flex-wrap gap-7 items-center justify-between">
        <div class="flex flex-col gap-[15px]">
            <h1 class="font-alternates text-[36px] sm:text-[48px] lg:text-[64px] leading-[130%]">{{ $title }}</h1>
            @isset($subtitle)
                <p class="text-sm sm:text-base md:text-lg text-opacity-75">{{ $subtitle }}</p>
            @endisset
        </div>
        {{ $slot }}
    </div>
</div>
