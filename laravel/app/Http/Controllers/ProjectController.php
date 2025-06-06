<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request){
        $projects = Project::all();
        return view('projects', ['projects' => $projects]);
    }
}
