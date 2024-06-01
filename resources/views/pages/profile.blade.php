<x-layout>
    <x-slot:title>Профиль</x-slot:title>
    <x-header/>
    <main class="flex-auto">
        <x-title title="Профиль"><a href="{{ route('user.applications') }}">
                <x-color-button
                    px="50px" py="15px" size="base"
                    bg="accentBlue" hoverBg="accentDarkerBlue"
                    color="white" class="hover:bg-accentDarkerGreen">
                    Заявки
                </x-color-button>
            </a></x-title>
        <div class="container py-[50px]">
            <div class="flex flex-col gap-8 bg-accentGray p-7 rounded">
                <h3 class="font-alternates text-3xl leading-[130%]">Личные данные</h3>
                <x-form action="{{ route('user.update') }}" class="flex flex-col items-start gap-[30px] border-t border-dark border-opacity-25 pt-7">
                    <div class="flex flex-col gap-4 w-full">
                        <x-input type="text" name="full_name" placeholder="ФИО" class="input" value="{{ auth()->user()->full_name }}" autofocus/>
                        <x-error field="full_name" class="text-red-500"/>
                    </div>
                    <div class="flex flex-col gap-4 w-full">
                        <x-input type="text" name="phone" placeholder="Телефон" class="input" value="{{ auth()->user()->phone }}" autofocus/>
                        <x-error field="phone" class="text-red-500"/>
                    </div>
                    <div class="flex flex-col gap-4 w-full">
                        <x-email class="input" placeholder="Email" value="{{ auth()->user()->email }}" autofocus/>
                        <x-error field="email" class="text-red-500"/>
                    </div>
                    <x-color-button
                        px="50px" py="15px" size="base"
                        bg="accentBlue" hoverBg="accentDarkerBlue"
                        color="white" class="hover:bg-accentDarkerGreen">Сохранить</x-color-button>
                </x-form>
            </div>
            <div class="flex flex-col gap-8 mt-12 border-t bg-accentGray p-7 rounded">
                <h3 class="font-alternates text-3xl leading-[130%]">Смена пароля</h3>
                <x-form action="{{ route('user.updatePassword') }}" class="flex flex-col items-start gap-[30px] border-t border-dark border-opacity-25 pt-7">
                    <div class="flex flex-col gap-4 w-full">
                        <x-password placeholder="Старый пароль" class="input" autofocus/>
                        <x-error field="password" class="text-red-500"/>
                    </div>
                    <div class="flex flex-col gap-4 w-full">
                        <x-password placeholder="Новый пароль" class="input" name="new_password" autofocus/>
                        <x-error field="new_password" class="text-red-500"/>
                    </div>
                    <div class="flex flex-col gap-4 w-full">
                        <x-password placeholder="Повторите новый пароль" class="input" name="new_password_confirm" autofocus/>
                        <x-error field="new_password_confirm" class="text-red-500"/>
                    </div>
                    <x-color-button
                        px="50px" py="15px" size="base"
                        bg="accentBlue" hoverBg="accentDarkerBlue"
                        color="white" class="hover:bg-accentDarkerGreen">Сохранить</x-color-button>
                </x-form>
            </div>
        </div>
    </main>
    <x-footer/>
</x-layout>
