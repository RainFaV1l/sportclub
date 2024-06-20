@props([
    'product',
])

<div class="border-b border-dark border-opacity-25">
    <div class="container py-[30px] grid grid-cols-5">
        <div class="h-full col-span-2">
            <img class="h-full w-full object-cover rounded-l" src="{{ asset($product->image()) }}" alt="Изображение">
        </div>
        <div class="h-full col-span-3 bg-accentGray flex flex-col gap-[25px] p-[30px] rounded-r">
            <div class="flex flex-col gap-[15px]">
                @php
                    $items = [
                        [
                            'title' => 'Стоимость',
                            'value' => (int) $product->price !== 0 ? $product->price . ' ₽ за одно занятие' : 'бесплатно',
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
                        [
                            'title' => 'Тренер',
                            'value' => $product->trainer ? $product->trainerInfo->full_name : 'Нет',
                        ],
                        [
                            'title' => 'Период',
                            'value' => $product->period . ' месяцев',
                        ],
                        [
                            'title' => 'Возрастные рамки от',
                            'value' => !is_null($product->age_limit_min) ? $product->age_limit_min . ' лет' : 'нет',
                        ],
                        [
                            'title' => 'Возрастные рамки до',
                            'value' => !is_null($product->age_limit_max) ? $product->age_limit_max . ' лет' : 'нет',
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
