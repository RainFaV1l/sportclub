<!doctype html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'sportclub' }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{ asset('build/assets/app-D5rkvKEV.css') }}">--}}
{{--    <script src="{{ asset('build/assets/app-CrG2wnyX.js') }}"></script>--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ru.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="h-full">
    <div class="min-h-full flex flex-col text-dark font-montserrat text-base font-medium">
        <div class="fixed bottom-[30px] left-1/2 -translate-x-1/2 sm:right-[30px] sm:left-auto sm:-translate-x-0 w-full sm:w-auto px-5 sm:px-0">
            <x-alert type="success" class="bg-green-700 text-green-100 p-4 rounded flex items-center gap-2 w-full sm:w-auto">
                <x-heroicon-c-face-smile class="h-9"/>
                {{ $component->message() }}
            </x-alert>
            <x-alert type="danger" class="bg-red-700 text-red-100 p-4 rounded flex items-center gap-2 w-full sm:w-auto">
                <x-heroicon-c-face-frown class="h-9"/>
                {{ $component->message() }}
            </x-alert>
            <x-alert type="warning" class="bg-yellow-700 text-yellow-100 p-4 rounded flex items-center gap-2 w-full sm:w-auto">
                <x-heroicon-s-check-badge class="h-9"/>
                {{ $component->message() }}
            </x-alert>
        </div>
        {{ $slot }}
    </div>
</body>
</html>
