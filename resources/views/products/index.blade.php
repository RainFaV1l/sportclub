<x-layout>
    <x-slot:title>Каталог секций</x-slot:title>
    <x-header/>
    <main class="flex-auto">
        <x-title title="Каталог секций" subtitle="Лучшие секции в Казани для ваших тренировок!"/>
        <div class="container py-[50px]">
            <div class="grid grid-cols-3 gap-[30px]">
                @foreach($sections as $section)
                    <x-product :product="(object) $section"/>
                @endforeach
            </div>
        </div>
    </main>
    <x-footer/>
</x-layout>
