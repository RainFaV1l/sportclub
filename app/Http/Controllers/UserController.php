<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdatePasswordRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\Application;
use App\Models\Section;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile()
    {
        return view('pages.profile');
    }

    public function applications()
    {
        if(auth()->user()->role === 'Тренер') {

            $query = Section::query()->where('trainer', auth()->user()->getAuthIdentifier());
            $sections = $query->orderByDesc('created_at')->get();
            $sectionIds = $query->select('id')->get();
            $applications = Application::query()->whereIn('section_id', $sectionIds)->orderByDesc('created_at')->get();

            return view('pages.applications', compact('applications', 'sections'));

        } else {

            $applications = Application::query()->where('user_id', auth()->user()->getAuthIdentifier())->get();

            return view('pages.applications', compact('applications'));

        }
    }

    public function update(UpdateRequest $request)
    {
        auth()->user()->update($request->validated());

        session()->flash('success', 'Вы успешно отредактировали профиль.');

        return back();
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $data = $request->validated();

        auth()->user()->update(['password' => Hash::make($data['new_password'])]);

        session()->flash('success', 'Вы успешно сменили пароль.');

        return back();
    }

}
