<div class="border-b border-dark border-opacity-25">
    <div class="container py-[70px] flex flex-col gap-[30px] sm:gap-[40px] lg:gap-[60px] px-5 lg:px-0">
        <div class="flex flex-wrap gap-4 items-center justify-between">
            <h2 class="text-[36px] lg:text-[48px] font-alternates basis-full sm:basis-[70%] leading-[130%]">Как тренировки помогут вам жить?</h2>
            <a href="{{ route('products.index') }}"><x-button px="40px" py="20px" size="base">Присоединиться</x-button></a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 grid-rows-2 gap-[30px]">
            <div class="relative sm:col-span-2 lg:h-[233px] flex items-start flex-col sm:flex-row bg-accentBlue bg-opacity-10 rounded">
                <p class="w-full sm:w-[64%] text-[14px] py-[30px] pl-[30px]">Регулярные тренировки укрепляют сердце, улучшают кровообращение и  помогают поддерживать здоровый вес, что в свою очередь повышает уровень  энергии и повседневную активность.</p>
                <div class="self-end w-full sm:w-[36%] flex items-end justify-center sm:justify-end">
                    <div class="h-[215px] w-[200px]">
                        <img class="h-full w-full object-contain" src="{{ asset('assets/images/sport-benefits/image-1.webp') }}" alt="Изображение">
                    </div>
                </div>
            </div>
            <div class="relative sm:row-span-2 flex flex-col justify-between gap-[50px] bg-accentGray rounded">
                <p class="text-[14px] p-[30px] pb-0">Тренировки часто проводятся в групповом формате, что способствует  расширению круга общения, созданию новых дружеских связей и укреплению  социальной поддержки</p>
                <div class="h-[269px] w-full">
                    <img class="h-full w-full object-contain" src="{{ asset('assets/images/sport-benefits/image-2.webp') }}" alt="Изображение">
                </div>
            </div>
            <div class="relative flex flex-col gap-[50px] bg-accentBlue bg-opacity-10 rounded">
                <p class="text-[14px] p-[30px] lg:pb-0">Тренировки стимулируют выработку серотонина, гормона счастья, что  способствует улучшению настроения и снижению риска развития депрессии</p>
            </div>
            <div class="relative flex flex-col gap-[50px] bg-accentGray rounded">
                <p class="text-[14px] p-[30px] lg:pb-0">Регулярные физические нагрузки помогают улучшить когнитивные функции,  такие как концентрация, память и обучаемость, что повышает продуктивность и общую качества жизни</p>
            </div>
            <div class="relative flex flex-col gap-[50px] bg-accentBlue bg-opacity-10 rounded">
                <p class="text-[14px] p-[30px] lg:pb-0">Достижения в тренировках, улучшение физической формы и достижение  поставленных целей способствуют укреплению самооценки и самодисциплины</p>
            </div>
            <div class="relative flex flex-col gap-[50px] bg-accentBlue bg-opacity-10 rounded">
                <p class="text-[14px] p-[30px] lg:pb-0">Физическая активность помогает нормализовать цикл сна и бодрствования,  что приводит к более качественному и восстановительному сну</p>
            </div>
        </div>
    </div>
</div>
