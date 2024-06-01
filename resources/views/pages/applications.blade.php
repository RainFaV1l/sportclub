<x-layout>
    <x-slot:title>Заявки</x-slot:title>
    <x-header/>
    <main class="flex-auto">
        <x-title title="Заявки"/>
        <div class="container py-[50px]">

            <div class="relative overflow-x-auto">
                @if($applications->count() > 0)
                    <table class="w-full text-sm text-left rtl:text-right text-dark">
                        <thead class="text-xs text-white uppercase bg-dark">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Телефон</th>
                            <th scope="col" class="px-6 py-3">ФИО</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Секция</th>
                            <th scope="col" class="px-6 py-3">Расписание</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($applications as $application)
                            <tr class="bg-white border">
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    {{ $application->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $application->phone }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $application->full_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $application->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $application->section->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {!! $application->schedule->name !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-accentBlue font-medium">К сожалению, у вас нет активных заявок</p>
                @endif
            </div>
        </div>
    </main>
    <x-footer/>
</x-layout>
