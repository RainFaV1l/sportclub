<div>
    <div class="container px-5 lg:px-0 py-[70px] flex justify-between items-center flex-col-reverse lg:flex-row gap-[30px]">
        <div class="flex flex-col justify-between gap-[30px] w-full lg:w-[60%]">
            <div class="flex flex-col gap-[50px]">
                <div class="flex flex-col gap-[15px]">
                    <h2 class="font-alternates text-[48px] leading-[130%]">Контакты</h2>
                    <p class="text-[14px] text-opacity-75">Мы всегда готовы ответить на ваши вопросы и помочь вам выбрать идеальную  тренировку. Свяжитесь с нами любым удобным для вас способом: по  телефону, электронной почте или через социальные сети.</p>
                </div>
                <div class="flex flex-wrap items-center gap-[30px]">
                    <div class="flex flex-col gap-[14px] w-full sm:w-[46%]">
                        <span class="text-[14px] text-opacity-75">Номер телефона</span>
                        <span class="font-bold text-lg text-opacity-75">+7 (978) 546-78-54</span>
                    </div>
                    <div class="flex flex-col gap-[14px] w-full sm:w-[46%]">
                        <span class="text-[14px] text-opacity-75">Соцсети</span>
                        <div class="flex items-center gap-[20px]">
                            <div>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8_179)">
                                        <path d="M22.2385 5.23007L19.1798 19.9551C18.9491 20.9943 18.3473 21.253 17.4922 20.7634L12.8318 17.2576L10.5831 19.4655C10.3342 19.7195 10.1261 19.932 9.64648 19.932L9.9813 15.0868L18.6188 7.11919C18.9943 6.7774 18.5373 6.58802 18.0351 6.92982L7.35703 13.7935L2.76002 12.3247C1.76008 12.006 1.74198 11.3039 2.96815 10.8143L20.949 3.7428C21.7815 3.42409 22.51 3.93217 22.2385 5.23007V5.23007Z" fill="#22272A" fill-opacity="0.75"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8_179">
                                            <rect width="20.2703" height="23.6486" fill="white" transform="translate(2.02704 0.675781)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.6545 6.30497C23.8151 5.74157 23.6545 5.3269 22.8819 5.3269H20.3255C19.6745 5.3269 19.375 5.68297 19.2144 6.07961C19.2144 6.07961 17.9123 9.37438 16.072 11.5108C15.4774 12.1283 15.204 12.3266 14.8785 12.3266C14.7179 12.3266 14.4705 12.1283 14.4705 11.5649V6.30497C14.4705 5.62889 14.2882 5.3269 13.75 5.3269H9.73089C9.32291 5.3269 9.07985 5.64241 9.07985 5.93538C9.07985 6.5754 9.99999 6.72414 10.0955 8.52702V12.4393C10.0955 13.2957 9.94791 13.4534 9.62238 13.4534C8.75433 13.4534 6.64496 10.1451 5.39496 6.35906C5.14322 5.62438 4.89582 5.3269 4.24044 5.3269H1.68402C0.954851 5.3269 0.807281 5.68297 0.807281 6.07961C0.807281 6.78273 1.67534 10.2758 4.84808 14.8912C6.9618 18.0417 9.93922 19.75 12.6476 19.75C14.2752 19.75 14.4748 19.3714 14.4748 18.7178C14.4748 15.707 14.3272 15.4231 15.1432 15.4231C15.5208 15.4231 16.1719 15.6214 17.691 17.1403C19.4271 18.9432 19.7135 19.75 20.6858 19.75H23.2422C23.9713 19.75 24.3403 19.3714 24.1276 18.6232C23.6415 17.0502 20.3559 13.814 20.2083 13.5976C19.8307 13.0928 19.9392 12.8675 20.2083 12.4167C20.2127 12.4122 23.3333 7.85094 23.6545 6.30497V6.30497Z" fill="#22272A" fill-opacity="0.75"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-[14px] w-full sm:w-[46%]">
                        <span class="text-[14px] text-opacity-75">Почта</span>
                        <span class="font-bold text-lg text-opacity-75">example@example.com</span>
                    </div>
                    <div class="flex flex-col gap-[14px] w-full sm:w-[46%]">
                        <span class="text-[14px] text-opacity-75">Адрес</span>
                        <span class="font-bold text-lg text-opacity-75">г. Казань, ул. Example, 25</span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-[25px]">
                <p class="text-[14px] text-opacity-75">Подпишитесь на нашу рассылку и будьте в курсе всех новостей. Нажимая на кнопку подписаться вы соглашаетесь с политикой конфиденциальности</p>
                <x-form action="{{ route('index.subscribe') }}" class="flex flex-col gap-4 sm:gap-0 sm:flex-row sm:items-center">
                    <x-email class="input" placeholder="Email" class="bg-accentGray py-[20px] px-[30px] w-full sm:w-[462px] rounded-l outline-0" required/>
                    <button type="submit" class="py-[20px] px-[35px] bg-accentBlue transition duration-300 hover:bg-accentDarkerBlue text-white rounded-r">Подписаться</button>
                </x-form>
            </div>
        </div>
        <div class="w-full lg:w-[40%]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1333.904324475045!2d49.17613244704371!3d55.78714752263443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ead9cb2f09445%3A0xaea956008a4e5e01!2z0YPQuy4g0JDQtNC10LvRjyDQmtGD0YLRg9GPLCAzNSwg0JrQsNC30LDQvdGMLCDQoNC10YHQvy4g0KLQsNGC0LDRgNGB0YLQsNC9LCA0MjAwNzM!5e0!3m2!1sru!2sru!4v1714407892107!5m2!1sru!2sru" width="100%" height="513" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
