<x-layout>
    <x-slot:title>Заявки</x-slot:title>
    <x-header/>
    <main class="flex-auto">
        <x-title title="Заявки"/>
        <div class="container py-[50px]">
            @if(auth()->user()->role  === 'Тренер')
                <div class="relative overflow-x-auto">
                    @if($sections->count() > 0)
                        <h2 class="text-xl font-bold my-5">Ваши секции</h2>
                        <table class="w-full text-sm text-left rtl:text-right text-dark">
                            <thead class="text-xs text-white uppercase bg-dark">
                            <tr>
                                <th scope="col" class="px-6 py-3">Название</th>
                                <th scope="col" class="px-6 py-3">Цена</th>
                                <th scope="col" class="px-6 py-3">Город</th>
                                <th scope="col" class="px-6 py-3">Адресс</th>
                                <th scope="col" class="px-6 py-3">Расписании</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sections as $section)
                                <tr class="bg-white border">
                                    <td class="px-6 py-4">
                                        {{ $section->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $section->price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $section->city }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $section->address }}
                                    </td>
                                    <td class="px-6 py-4 flex flex-col gap-4">
                                        @foreach($section->sectionSchedules as $sectionSchedules)
                                            <div class="flex items-center gap-4">
                                                <span>{!! $sectionSchedules->schedule->name !!}</span>
                                                <span>-</span>
                                                <span>группа из {{ $sectionSchedules->number_of_people }}</span>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-accentBlue font-medium">К сожалению, у вас нет активных заявок</p>
                    @endif
                    @if($applications->count() > 0)
                        <h2 class="text-xl font-bold my-5 mt-[50px]">Заявки ваших клиентов</h2>
                        <table class="w-full text-sm text-left rtl:text-right text-dark">
                            <thead class="text-xs text-white uppercase bg-dark">
                            <tr>
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
                        <p class="text-accentBlue font-medium mt-[30px]">К сожалению, у вас нет активных заявок</p>
                    @endif
                </div>
            @endif
            @if(auth()->user()->role !== 'Тренер')
                <div class="relative overflow-x-auto">
                    @if($applications->count() > 0)
                        <table class="w-full text-sm text-left rtl:text-right text-dark">
                            <thead class="text-xs text-white uppercase bg-dark">
                            <tr>
                                {{--<th scope="col" class="px-6 py-3">ID</th>--}}
                                <th scope="col" class="px-6 py-3">Телефон</th>
                                <th scope="col" class="px-6 py-3">ФИО</th>
                                <th scope="col" class="px-6 py-3">Email</th>
                                <th scope="col" class="px-6 py-3">Секция</th>
                                <th scope="col" class="px-6 py-3">Расписание</th>
                                <th scope="col" class="px-6 py-3">Ребенок</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applications as $application)
                                <tr class="bg-white border">
                                    {{--<th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">--}}
                                    {{--{{ $application->id }}--}}
                                    {{--</th>--}}
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
                                    <td class="px-6 py-4">
                                        {{ $application->is_child ? 'Да' : 'Нет' }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-accentBlue font-medium">К сожалению, у вас нет активных заявок</p>
                    @endif
                </div>
            @endif
        </div>
    </main>
    <x-footer/>
</x-layout>
