<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
      
            $educations = Education::paginate();
            $skills = Skill::paginate();
            $experiences = Experience::paginate();
            $projects = Project::paginate();
            $certificates = Certificate::paginate();
      
        $user=User::where('id',1)->first();
        return view('home', ['user'=>$user,'educations'=>$educations,'skills'=>$skills,
           'experiences'=>$experiences,'projects'=>$projects,'certificates'=>$certificates]);
    }
}
