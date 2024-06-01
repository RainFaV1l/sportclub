@props([
    'item'
])

<div class="border-b border-dark border-opacity-25 flex items-center gap-[50px] pb-[15px]">
    <span class="text-base font-bold text-opacity-75 w-[15%]">{{ $item->title }}</span>
    <span class="text-base text-opacity-75 w-[85%]">{{ $item->value }}</span>
</div>
