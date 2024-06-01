<?php

namespace App\Http\Controllers;

use App\Http\Requests\Subscribe\SubscribeRequest;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function subscribe(SubscribeRequest $request)
    {
        $data = $request->validated();

        Subscribe::query()->create($data);

        session()->flash('success', 'Успешная подписка на рассылку.');

        return back();
    }
}
