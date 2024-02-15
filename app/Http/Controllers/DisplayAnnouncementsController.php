<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;

use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;


class DisplayAnnouncementsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {

        if (Auth::check()) {
            // ? Si l'utilisateur connecte a un role 'Admin' il peut
            // ? consulter tout les annonces
            if (Auth::user()->hasRole('Admin')) {
                $announcements = Announcement::orderBy('created_at', 'desc')->get();
            } else {

                //? Si l'utilisateur connecte a un role 'Apprenant' ou un autre role :-(

                // ? Ici j'extracte les id's des Skills de l'user authentifier
                $userSkills = Auth::user()->skills->pluck('id')->toArray();

                // ? Ici je filtre les annonces qui ont au moins une compétence correspondant a l'utilisateur.
                $announcements = Announcement::whereHas('skills', function ($query) use ($userSkills) {
                    $query->whereIn('skills.id', $userSkills);
                })->get();

                // ? Ici j'ai filtrer les annonces , ils doivent avoir minimum 50% matching
                $announcements = $announcements->filter(
                    function ($announcement) use ($userSkills) {
                        $matchingSkillsCount = $announcement->skills()->whereIn('skills.id', $userSkills)->count();
                        $requiredMatchingSkillsCount = count($userSkills) * 0.5; // ! 50% match

                        return $matchingSkillsCount >= $requiredMatchingSkillsCount;
                    }
                )->sortByDesc('created_at');
            }
        } else {
            // !  Si l'utilisateur n'est pas connecter , il peut consulter touts les annonces ;°)
            $announcements = Announcement::orderBy('created_at', 'desc')->get();
        }

        // $companies = Company::all();

        // return view('allannouncements', compact('announcements', 'companies'));
        return view('allannouncements', compact('announcements'));
    }



    public function show($id)
    {
        $user = User::get();
        $announcement = Announcement::with('skills')->find($id);
        return view('showannouncement', compact('announcement', 'user'));
    }
}
