<?php

namespace App\Http\Controllers;

use App\Http\Requests\Application\CreateRequest;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function create(CreateRequest $request)
    {
        $data = $request->validated();

        if(auth()->check()) $data['user_id'] = auth()->user()->getAuthIdentifier();

        $check = Application::query()
            ->where('section_id', $data['section_id'])
            ->where('phone', $data['phone'])
            ->first();

        if(!empty($check))
        {
            session()->flash('warning', 'Вы уже отправили заявку. Дождитесь звонка.');

            return back();
        }

        Application::query()->create($data);

        session()->flash('success', 'Вы успешно отправили заявку. Дождитесь звонка.');

        return back();
    }
}
