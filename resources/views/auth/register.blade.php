<x-layout>
    <x-slot:title>Регистрация</x-slot:title>
    <x-header/>
    <main class="flex-auto">
        <x-title title="Регистрация"/>
        <div class="container py-[50px]">
            <div class="w-full lg:w-1/2">
                <x-form action="{{ route('register') }}" class="form">
                    <x-error field="section_id" class="text-red-500"/>
                    <div class="flex flex-col gap-4 w-full">
                        <x-input type="text" name="full_name" placeholder="ФИО" class="input" autofocus/>
                        <x-error field="full_name" class="text-red-500"/>
                    </div>
                    <div class="flex flex-col gap-4 w-full">
                        <x-input type="text" name="phone" placeholder="Телефон" class="input" autofocus/>
                        <x-error field="phone" class="text-red-500"/>
                    </div>
                    <div class="flex flex-col gap-4 w-full">
                        <x-email class="input" placeholder="Email" autofocus/>
                        <x-error field="email" class="text-red-500"/>
                    </div>
                    <div class="flex flex-col gap-4 w-full">
                        <x-password placeholder="Пароль" class="input" autofocus/>
                        <x-error field="password" class="text-red-500"/>
                    </div>
                    <div class="flex flex-col gap-4 w-full">
                        <x-password placeholder="Подтвердите пароль" class="input" name="password_confirmation" autofocus/>
                        <x-error field="password_confirmation" class="text-red-500"/>
                    </div>
                    <x-color-button
                        px="50px" py="15px" size="base"
                        bg="accentBlue" hoverBg="accentDarkerBlue"
                        color="white" class="hover:bg-accentDarkerGreen">Создать аккаунт</x-color-button>
                </x-form>
            </div>
        </div>
    </main>
    <x-footer/>
</x-layout>
