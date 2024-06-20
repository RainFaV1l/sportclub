<?php

namespace App\Http\Controllers;

use App\Http\Requests\Application\CreateRequest;
use App\Models\Application;
use App\Models\SectionSchedule;

class ApplicationController extends Controller
{
    public function create(CreateRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->getAuthIdentifier();

        $check = Application::query()
            ->where('section_id', $data['section_id'])
            ->where('phone', $data['phone'])
            ->where('full_name', $data['full_name'])
            ->where('schedule_id', $data['schedule_id'])
            ->first();

        if(!empty($check))
        {
            session()->flash('warning', 'Вы уже отправили заявку. Дождитесь звонка.');

            return back();
        }

        $numberOfPeople = SectionSchedule::query()->where('section_id', $data['section_id'])->where('schedule_id', $data['schedule_id'])->first();

        $numberOfPeopleCheck = Application::query()->where('section_id', $data['section_id'])
            ->where('schedule_id', $data['schedule_id'])
            ->where('status', 'Принят')
            ->count();

        if($numberOfPeople->number_of_people <= $numberOfPeopleCheck) {

            session()->flash('danger', 'К сожалению группа уже набрана, запишитесь по другому расписанию!');

            return back();

        }

        Application::query()->create($data);

        session()->flash('success', 'Вы успешно отправили заявку. Дождитесь звонка.');

        return redirect()->route('user.profile');
    }
}
