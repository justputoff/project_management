<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.frontend.landing', compact('projects'));
    }
}
