@props([
    'product'
])

@php
    $values = [
        [
            'name' => 'Стоимость',
            'value' => (int) $product->price !== 0 ? $product->price . ' ₽' : 'бесплатно'
        ],
        [
            'name' => 'Телефон',
            'value' => $product->phone
        ],
        [
            'name' => 'Город',
            'value' => $product->city
        ],
        [
            'name' => 'Адрес',
            'value' => $product->address
        ],
    ];
@endphp

<div class="flex flex-col gap-[15px] bg-accentGray rounded">
    <div class="h-[300px] w-full">
        <img class="h-full w-full object-cover rounded-top" src="{{ $product->image() }}" alt="Изображение">
    </div>
    <div class="flex flex-col justify-between gap-[20px] p-[30px] pt-0">
        <div class="flex flex-col gap-[15px]">
            <h3 class="font-bold text-sm text-opacity-75">{{ $product->name }}</h3>
            <div class="flex flex-col gap-[10px]">
                @foreach($values as $value)
                    <x-catalog.option name="{{ $value['name'] }}" :value="$value['value']"/>
                @endforeach
            </div>
        </div>
        <a href="{{ route('products.show', $product->id) }}" class="text-center text-[12px] py-3 w-full px-[30px] rounded bg-accentBlue text-white transition duration-300 hover:bg-accentDarkerBlue">Подробнее</a>
    </div>
</div>
