@php
    $links = [
        (object) [
            'name' => 'Главная',
            'routeName' => 'index.index',
        ],
        (object) [
            'name' => 'Каталог',
            'routeName' => 'products.index',
        ],
        (object) [
            'name' => 'Контакты',
            'routeName' => '/#contacts',
            'hash' => true,
        ],
       (object) [
            'name' => 'Профиль',
            'routeName' => 'user.profile',
            'auth' => true
        ],
    ]
@endphp

<header class="border-b border-dark border-opacity-25">
    <div class="container px-5 lg:px-0 py-[15px] flex items-center flex-wrap justify-between gap-[20px] sm:gap-[30px]">
        <x-logo/>
        <x-menu :links="$links"/>
        <div class="flex items-center gap-[15px] text-sm sm:text-base">
            @guest
                <a href="{{ route('loginPage') }}"><x-button px="40px" py="15px" type="outline">Войти</x-button></a>
                <a href="{{ route('registerPage') }}"><x-button px="30px" py="15px">Создать аккаунт</x-button></a>
            @endguest
            @auth
                <x-logout class="button py-[15px] px-[40px] hover:bg-accentDarkerBlue hover:text-white">Выйти</x-logout>
            @endauth
        </div>
    </div>
</header>
