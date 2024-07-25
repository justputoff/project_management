<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Contributor;
use Illuminate\Support\Facades\Auth;

class ContributorController extends Controller
{
    public function index(Project $project)
    {
        $contributors = $project->contributors;
        return view('pages.backend.projects.contributors.index', compact('contributors', 'project'));
    }

    public function create(Project $project)
    {
        return view('pages.backend.projects.contributors.create', compact('project'));
    }
    
    public function store(Project $project, Request $request)
    {
        $request->validate([
            'role' => 'string|required',
        ]);

        $project->contributors()->create([
            'role' => $request->role,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('projects.index')->with('success', 'Contributor created successfully.');
    }

    public function update(Project $project, Contributor $contributor, Request $request)
    {
        $request->validate([
            'status' => 'string|required',
        ]);

        $contributor->update([
            'status' => $request->status,
        ]);
        return back()->with('success', 'Contributor updated successfully.');
    }
}
