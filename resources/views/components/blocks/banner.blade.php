<div class="border-b border-dark border-opacity-25">
    <div class="container py-[50px] flex items-center justify-between gap-[30px] flex-col-reverse md:flex-row">
        <div class="flex flex-col items-start gap-[20px] sm:gap-[30px] lg:gap-[40px] w-full md:w-[60%] px-5 sm:px-0">
            <div class="flex flex-col items-start gap-[30px]">
                <div class="flex items-center gap-[20px] sm:gap-[30px] lg:gap-[40px]">
                    <div class="h-[150px] md:h-[232px] w-[20px] md:w-[30px] bg-accentGreen rounded"></div>
                    <h1 class="text-[36px] sm:text-[48px] lg:text-[64px] leading-[130%] font-alternates">Записывайся <br> Тренируйся <br> Побеждай</h1>
                </div>
                <p class="text-dark text-opacity-75 text-sm sm:text-base lg:text-lg">Шагай к победе с нашими секциями! Записывайся сейчас, тренируйся у  профессионалов и готовься к победам, которые изменят твою жизнь!</p>
            </div>
            <a href="{{ route('products.index') }}"><x-button px="40px" py="20px" type="outline" size="base">Начать новую жизнь</x-button></a>
        </div>
        <div class="h-[350px] w-full md:h-[626px] md:w-[40%]">
            <img class="h-full w-full object-cover rounded" src="{{ asset('assets/images/banner.webp') }}" alt="Изображение">
        </div>
    </div>
</div>
