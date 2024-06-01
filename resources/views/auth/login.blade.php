<x-layout>
    <x-slot:title>Авторизация</x-slot:title>
    <x-header/>
    <main class="flex-auto">
        <x-title title="Авторизация"/>
        <div class="container py-[50px]">
            <div class="w-full lg:w-1/2">
                <x-form action="{{ route('login') }}" class="flex flex-col items-start gap-[30px]">
                    <div class="flex flex-col gap-4 w-full">
                        <x-email class="input" placeholder="Email" autofocus/>
                        <x-error field="email" class="text-red-500"/>
                    </div>
                    <div class="flex flex-col gap-4 w-full">
                        <x-password placeholder="Пароль" class="input" autofocus/>
                        <x-error field="password" class="text-red-500"/>
                    </div>
                    <x-color-button
                        px="50px" py="15px" size="base"
                        bg="accentBlue" hoverBg="accentDarkerBlue"
                        color="white" class="hover:bg-accentDarkerGreen">Войти в аккаунт</x-color-button>
                </x-form>
            </div>
        </div>
    </main>
    <x-footer/>
</x-layout>
