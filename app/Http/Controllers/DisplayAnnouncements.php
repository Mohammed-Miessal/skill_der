<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class DisplayAnnouncements extends Controller
{
    //
    // public function index()
    // {
    //     // $announcements = Announcement::all();

    //     $announcements = Announcement::orderBy('created_at', 'desc')->get();
    //     $companies = Company::all();

    //     //dd($announcements);
    //     return view('allannouncements', compact('announcements', 'companies'));
    // }


    // public function index()
    // {
    //     if (Auth::check()) {
    //         // If user is logged in and has the admin role, get all announcements
    //         if (Auth::user()->hasRole('Admin')) {
    //             $announcements = Announcement::orderBy('created_at', 'desc')->get();
    //         } else {
    //             // If user is logged in and does not have the admin role, get announcements related to their skills
    //             $userSkills = Auth::user()->skills->pluck('id')->toArray();

    //             $announcements = Announcement::whereHas('skills', function ($query) use ($userSkills) {
    //                 $query->whereIn('skills.id', $userSkills);
    //             })->orderBy('created_at', 'desc')->get();
    //         }
    //     } else {
    //         // If user is not logged in, get all announcements
    //         $announcements = Announcement::orderBy('created_at', 'desc')->get();
    //     }

    //     $companies = Company::all();

    //     return view('allannouncements', compact('announcements', 'companies'));
    // }


    public function index()
    {
        if (Auth::check()) {
            // If user is logged in and has the admin role, get all announcements
            if (Auth::user()->hasRole('Admin')) {
                $announcements = Announcement::orderBy('created_at', 'desc')->get();
            } else {
                // If user is logged in and does not have the admin role, get announcements related to their skills
                $userSkills = Auth::user()->skills->pluck('id')->toArray();

                $announcements = Announcement::whereHas('skills', function ($query) use ($userSkills) {
                    $query->whereIn('skills.id', $userSkills);
                })->get();

                // Filter announcements that match at least 50% of the user's skills
                $announcements = $announcements->filter(function ($announcement) use ($userSkills) {
                    $matchingSkillsCount = $announcement->skills()->whereIn('skills.id', $userSkills)->count();
                    $requiredMatchingSkillsCount = count($userSkills) * 0.5; // 50% match

                    return $matchingSkillsCount >= $requiredMatchingSkillsCount;
                })->sortByDesc('created_at');;
            }
        } else {
            // If user is not logged in, get all announcements
            $announcements = Announcement::orderBy('created_at', 'desc')->get();
        }

        $companies = Company::all();

        return view('allannouncements', compact('announcements', 'companies'));
    }



    public function show($id)
    {
        $user = User::get();

        // $announcement = Announcement::find($id);
        $announcement = Announcement::with('skills')->find($id);

        return view('showannouncement', compact('announcement' , 'user'));
    }
}
