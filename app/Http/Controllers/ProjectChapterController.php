<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectChapterController extends Controller
{
    public function index(Project $project)
    {
        $chapters = $project->chapters;
        return view('pages.backend.projects.chapters.index', compact('project', 'chapters'));
    }

    public function create(Project $project)
    {
        return view('pages.backend.projects.chapters.create', compact('project'));
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'estimate_time' => 'required|integer',
            'description' => 'required|string',
        ]);

        $data = $request->all();
        $data['start_date'] = date('Y-m-d');
        $data['end_date'] = date('Y-m-d', strtotime('+' . $request->estimate_time . ' days'));
        $project->chapters()->create($data);
        return redirect()->route('projects.show', $project->id)->with('success', 'Chapter created successfully.');
    }

    public function show(Chapter $chapter)
    {
        return view('pages.backend.projects.chapters.show', compact('chapter'));
    }

    public function edit(Chapter $chapter)
    {
        return view('pages.backend.projects.chapters.edit', compact('chapter'));
    }

    public function update(Request $request, Chapter $chapter)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'estimate_time' => 'required|integer',
            'description' => 'required|string',
        ]);

        $data = $request->all();
        $data['start_date'] = $chapter->created_at;
        $data['end_date'] = date('Y-m-d', strtotime('+' . $request->estimate_time . ' days', strtotime($chapter->created_at)));
        $chapter->update($data);

        return redirect()->route('projects.show', $chapter->project_id)->with('success', 'Chapter updated successfully.');
    }

    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return back()->with('success', 'Chapter deleted successfully.');
    }

    public function statusUpdate(Request $request, Chapter $chapter)
    {
        $chapter->update(['status' => $request->status]);
        return back()->with('success', 'Chapter status updated successfully.');
    }

    public function chapterCommentStore(Request $request, Chapter $chapter)
    {
        $chapter->chapterComments()->create(['comment' => $request->comment, 'user_id' => Auth::user()->id]);
        return back()->with('success', 'Comment added successfully.');
    }
}