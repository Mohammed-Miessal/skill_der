<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $skills = Skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|min:3|string'
        ]);

        Skill::create($validated);
        return redirect()->route('admin.skills.index')->with('message', 'Skill created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $skill = Skill::find($id);
        return view('admin.skills.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
        $skills = Skill::all();
        return view('admin.skills.edit', compact('skill', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $validated = $request->validate([
            'name' => 'required|min:3|string'
        ]);

        $skill->update($validated);

        return redirect()->route('admin.skills.index')->with('message', 'Skill updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
        $skill->delete();
        return redirect()->route('admin.skills.index')->with('message', 'Skill deleted successfully');
    }
}
