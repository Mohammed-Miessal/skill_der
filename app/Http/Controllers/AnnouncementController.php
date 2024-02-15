<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Company;
use App\Models\Skill;


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $announcements = Announcement::all();
        return view('admin.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $skills = Skill::all();
        $companies = Company::all();
        return view('admin.announcements.create', compact('companies', 'skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnnouncementRequest $request)
    {
        $validatedData = $request->validated();

        $announcement = new Announcement([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'content' => $validatedData['content'],
            'company_id' => $validatedData['company_id'],
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('announcements_images', 'public');
            $announcement->image = basename($imagePath);
        }

        $announcement->save();

        // Attach skills to the announcement
        if (!empty($validatedData['skills'])) {
            $announcement->skills()->attach($validatedData['skills']);
        }

        return redirect()->route('admin.announcements.index')->with('message', 'Announcement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $announcement = Announcement::with('skills')->find($id);
        return view('admin.announcements.show', compact('announcement'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
        $skills = Skill::all();
        $companies = Company::all();
        return view('admin.announcements.edit', compact('announcement', 'companies', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnouncementRequest $request, $id)
    {


        $validatedData = $request->validated();
        $announcement = Announcement::findOrFail($id);
        $announcement->title = $validatedData['title'];
        $announcement->description = $validatedData['description'];
        $announcement->content = $validatedData['content'];
        $announcement->company_id = $validatedData['company_id'];

        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete('announcements_images/' . $announcement->image);
            // Upload the new image
            $imagePath = $request->file('image')->store('announcements_images', 'public');
            $announcement->image = basename($imagePath);
        }

        $announcement->save();

        return redirect()->route('admin.announcements.index')->with('message', 'Announcement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
        if ($announcement->image) {
            Storage::disk('public')->delete('announcements_images/' . $announcement->image);
        }
        $announcement->delete();

        return redirect()->route('admin.announcements.index')->with('message', 'Announcement deleted successfully.');
    }




    public function apply($announcementId)
    {

        $user = auth()->user();
        $announcement = Announcement::findOrFail($announcementId);

        // Check if the user has already applied to this announcement
        if (!$user->announcements->contains($announcement)) {
            // Attach the user to the announcement
            $user->announcements()->attach($announcement);
            return redirect()->back()->with('success', 'Application successful!');
        } else {
            // User has already applied
            return redirect()->back()->with('error', 'You have already applied to this offer.');
        }
    }
}
