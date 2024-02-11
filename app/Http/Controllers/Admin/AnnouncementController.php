<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Company;
use App\Models\Skill;
use App\Models\User;
use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;


class AnnouncementController extends Controller
{
    //
    public function index()
    {
        // dd ( $announcements = Announcement::all());
        $announcements = Announcement::paginate(10);

        return view('admin.announcements.index', compact('announcements'));
    }



    public function create()
    {
        //
        $skills = Skill::all();
        $companies = Company::all();
        return view('admin.announcements.create', compact('companies', 'skills'));
    }


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
            $imagePath = $request->file('image')->store('announcement_images', 'public');
            $announcement->image = basename($imagePath);
        }

        $announcement->save();

        // Attach skills to the announcement
        if (!empty($validatedData['skills'])) {
            $announcement->skills()->attach($validatedData['skills']);
        }

        return redirect()->route('admin.announcements.index')->with('message', 'Announcement created successfully.');
    }



    public function show($id)
    {

        // $announcement = Announcement::find($id);
        $announcement = Announcement::with('skills')->find($id);
        // dd($announcement);
        return view('admin.announcements.show', compact('announcement'));
    }


    public function edit(Announcement $announcement)
    {
        $skills = Skill::all();
        $companies = Company::all();
        return view('admin.announcements.edit', compact('announcement', 'companies', 'skills'));
    }


    public function update(UpdateAnnouncementRequest $request, $id)
    {
        // dd($request);
        $validatedData = $request->validated();

        // Déboguer pour vérifier la valeur de $announcement
        $announcement = Announcement::findOrFail($id);
        // dd($announcement);

        $announcement->title = $validatedData['title'];
        $announcement->description = $validatedData['description'];
        $announcement->content = $validatedData['content'];
        // $announcement->user_id = $validatedData['user_id'];
        $announcement->company_id = $validatedData['company_id'];



        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete('announcement_images/' . $announcement->image);
            // Upload the new image
            $imagePath = $request->file('image')->store('announcement_images', 'public');
            $announcement->image = basename($imagePath);
        }



        $announcement->save();

        return redirect()->route('admin.announcements.index')->with('message', 'Announcement updated successfully.');
    }



    public function destroy(Announcement $announcement)
    {
        //
        // dd($announcement);
        if ($announcement->image) {
            Storage::disk('public')->delete('announcement_images/' . $announcement->image);
        }


        $announcement->delete();

        return redirect()->route('admin.announcements.index')->with('message', 'Announcement deleted successfully.');
    }






    // public function apply($announcementId)
    // {
    //     // Retrieve the authenticated user
    //     $user = auth()->user();

    //     // Find the announcement by ID
    //     $announcement = Announcement::findOrFail($announcementId);

    //     // Attach the user to the announcement
    //     $user->announcements()->attach($announcement);

    //     // You can also add additional logic here, such as sending notifications, etc.

    //     return redirect()->back()->with('success', 'Application successful!');
    // }



    public function apply($announcementId)
{
    // Retrieve the authenticated user
    $user = auth()->user();

    // Find the announcement by ID
    $announcement = Announcement::findOrFail($announcementId);

    // Check if the user has already applied to this announcement
    if (!$user->announcements->contains($announcement)) {
        // Attach the user to the announcement
        $user->announcements()->attach($announcement);

        // You can also add additional logic here, such as sending notifications, etc.

        return redirect()->back()->with('success', 'Application successful!');
    } else {
        // User has already applied
        return redirect()->back()->with('error', 'You have already applied to this offer.');
    }
}

}
