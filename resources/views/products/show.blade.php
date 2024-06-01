<x-layout>
    <x-slot:title>{{ $section->name }}</x-slot:title>
    <x-header/>
    <main class="flex-auto">
        <x-title :title="$section->name"/>
        <x-products.blocks.item :product="$section"/>
        <div>
            <div class="container pt-[30px] pb-[70px] flex flex-col gap-[30px]">
                <h2 class="text-[48px] leading-[130%]">Форма для записи</h2>
                <x-form action="{{ route('applications.create') }}" class="flex flex-col items-start gap-[30px]">
                    <x-error field="section_id" class="text-red-500"/>
                    <x-input type="hidden" name="section_id" value="{{ $section->id }}"/>
                    <div class="flex flex-col gap-[15px] w-full">
                        <div class="flex flex-col gap-4 w-full">
                            <x-input type="text" name="phone" placeholder="Контактный номер" class="input"/>
                            <x-error field="phone" class="text-red-500"/>
                        </div>
                        <div class="flex flex-col gap-4 w-full">
                            <x-input type="text" name="full_name" placeholder="ФИО" class="input"/>
                            <x-error field="full_name" class="text-red-500"/>
                        </div>
                        <div class="flex flex-col gap-4 w-full">
                            <x-input type="email" name="email" placeholder="Email" class="input"/>
                            <x-error field="email" class="text-red-500"/>
                        </div>
                        <div class="flex flex-col gap-4 w-full">
                            <x-select name="schedule_id" placeholder="Расписание" :items="$schedules"/>
                            <x-error field="schedule_id" class="text-red-500"/>
                        </div>
                    </div>
                    <x-button px="42px" py="15px" size="base">Записаться</x-button>
                </x-form>
            </div>
        </div>
    </main>
    <x-footer/>
</x-layout>
