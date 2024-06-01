<div class="border-b border-dark border-opacity-25">
    <div class="container py-[70px] flex flex-col gap-[40px]">
        <h2 class="font-alternates text-[36px] lg:text-[48px] leading-[130%] px-5 sm:px-0">Кто мы такие?</h2>
        <div class="flex flex-wrap-reverse lg:flex-nowrap items-start justify-between gap-[30px] lg:gap-0">
            <div class="flex flex-col items-start gap-[30px] w-full lg:w-[63.42%]">
                <div class="flex flex-wrap items-center py-[27px] bg-accentGreen w-full">
                    <div class="px-[30px] py-4 lg:py-0 border-b-2 w-full lg:w-auto lg:border-b-0 lg:border-r-2 border-dark border-opacity-25 flex items-center gap-[15px]">
                        <h3 class="font-alternates text-[48px] leading-[130%]">5</h3>
                        <span class="text-base font-alternates">опыта</span>
                    </div>
                    <div class="px-[30px] py-4 lg:py-0 border-b-2 w-full lg:w-auto lg:border-b-0 lg:border-r-2-2 border-dark border-opacity-25 flex items-center gap-[15px]">
                        <h3 class="font-alternates text-[48px] leading-[130%]">> 1000</h3>
                        <span class="text-base font-alternates">пользователей</span>
                    </div>
                    <div class="px-[30px] py-4 lg:py-0 flex items-center gap-[15px]">
                        <h3 class="font-alternates text-[48px] leading-[130%]">15</h3>
                        <span class="text-base font-alternates">секций</span>
                    </div>
                </div>
                <div class="flex flex-col gap-[30px] pr-[30px] px-5 sm:px-0">
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="font-bold text-lg">Вдохновение к изменениям</h3>
                        <p class="text-[14px] text-opacity-75">Мы - сообщество энтузиастов, знающих, что настоящее изменение начинается с нашего отношения к своему телу и здоровью. Мы стремимся быть источником вдохновения и мотивации для всех, кто стремится к здоровому образу жизни и достижению своих целей.</p>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="font-bold text-lg">Поддержка общего благополучия</h3>
                        <p class="text-[14px] text-opacity-75">В основе нашей работы лежит не только желание помочь вам выглядеть лучше, но и поддержать вас в вашем пути к общему благополучию. Мы верим в силу тренировок, в их способность преобразить не только физическое состояние, но и эмоциональное и духовное.</p>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="font-bold text-lg">Наставничество и поддержка</h3>
                        <p class="text-[14px] text-opacity-75">Наши тренеры - это не просто инструкторы, а настоящие наставники и  наставницы, которые вложат в вас не только знания о тренировках, но и  веру в ваши силы. Мы создаем атмосферу взаимной поддержки и вдохновения,  где каждый член нашего сообщества может раскрыть свой потенциал.</p>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h3 class="font-bold text-lg">Присоединяйтесь к нашему сообществу</h3>
                        <p class="text-[14px] text-opacity-75">Присоединяйтесь к нашему сообществу и начните свой путь к здоровью, силе и уверенности в себе прямо сейчас!</p>
                    </div>
                </div>
                <a class="px-5 sm:px-0" href="{{ route('products.index') }}">
                    <x-color-button
                        px="40px"
                        py="20px"
                        size="base"
                        bg="accentGreen"
                        hoverBg="accentDarkerGreen"
                        color="dark"
                        class="hover:bg-accentDarkerGreen"
                    >
                        Присоединиться
                    </x-color-button>
                </a>
            </div>
            <div class="w-full lg:w-[36.58%] h-[400px] lg:h-[678px]">
                <img class="h-full w-full object-cover" src="{{ asset('assets/images/about.webp') }}" alt="Изображение">
            </div>
        </div>
    </div>
</div>
