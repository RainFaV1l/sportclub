<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\SectionSchedule;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::all();

        return view('products.index', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $section = Section::query()->findOrFail($id);

        $schedules = SectionSchedule::query()->where('section_id', $section->id)->get();

        return view('products.show', compact('section', 'schedules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
