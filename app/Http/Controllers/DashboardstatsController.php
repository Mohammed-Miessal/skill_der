<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use DB;
class DashboardstatsController extends Controller
{
    //
    public function index(){

    // Récupérer l'utilisateur authentifié
    $user = auth()->user();

    // Récupérer toutes les annonces auxquelles l'utilisateur a postulé
    $appliedAnnouncements = $user->announcements;

//      $mostpopulatedskill = DB::table('announcement_skill')
//     ->join('skillder.skills', 'announcement_skill.skill_id', '=', 'skillder.skills.id')
//     ->select('skillder.skills.name', DB::raw('COUNT(skill_id) as Compteur'))
//     ->groupBy('skill_id')
//     ->orderByDesc(DB::raw('COUNT(skill_id)'))
//     ->limit(1)
//     ->get();
//     // dd($mostpopulatedskill);
//    $name = $mostpopulatedskill[0]->name ;
//    $compteur = $mostpopulatedskill[0]->Compteur ;



    // dd($appliedAnnouncements);
    // Passer les annonces à la vue

    // $announcements = Announcement::count();
    return view('dashboard', compact('appliedAnnouncements' ));
    }

    public function view($id)
    {
        $announcement = Announcement::with('skills')->find($id);
        return view('admin.announcements.show', compact('announcement'));
    }


    // public function index()
    // {

    //      $mostpopulatedskill = DB::table('announcement_skill')
    // ->join('skillder.skills', 'announcement_skill.skill_id', '=', 'skillder.skills.id')
    // ->select('skillder.skills.name', DB::raw('COUNT(skill_id) as Compteur'))
    // ->groupBy('skill_id')
    // ->orderByDesc(DB::raw('COUNT(skill_id)'))
    // ->limit(1)
    // ->get();
    // // dd($mostpopulatedskill);
    //     $announcement = Announcement::with('skills')->findOrFail(1);
    //     $companyCount = $announcement->company_count;

    //     return view ('dashbord' , compact('companyCount' ,'announcement','mostpopulatedskill' ));
    //     // return view('dashboard', compact('companyCount' ,'mostpopulatedskill' ));
    // }




















}
