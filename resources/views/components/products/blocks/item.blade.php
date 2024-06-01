@props([
    'product',
])

<div class="border-b border-dark border-opacity-25">
    <div class="container py-[30px] grid grid-cols-3">
        <div class="h-full col-span-1">
            <img class="h-full w-full object-cover rounded-l" src="{{ asset($product->image()) }}" alt="Изображение">
        </div>
        <div class="h-full col-span-2 bg-accentGray flex flex-col gap-[25px] p-[30px] rounded-r">
            <div class="flex flex-col gap-[15px]">
                @php
                    $items = [
                        [
                            'title' => 'Стоимость',
                            'value' => (int) $product->price !== 0 ? $product->price . ' ₽' : 'бесплатно',
                        ],
                        [
                            'title' => 'Телефон',
                            'value' => $product->phone,
                        ],
                        [
                            'title' => 'Город',
                            'value' => $product->city,
                        ],
                        [
                            'title' => 'Адрес',
                            'value' => $product->address,
                        ],
                    ];
                @endphp
                @foreach($items as $item)
                    <x-products.item :item="(object) $item"/>
                @endforeach
            </div>
            <p class="text-[12px] text-opacity-75">{!! $product->description !!}</p>
        </div>
    </div>
</div>
