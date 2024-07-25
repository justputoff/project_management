<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudyProgram;
use App\Models\Department;

class StudyProgramController extends Controller
{
    public function index()
    {
        $studyPrograms = StudyProgram::all();
        return view('pages.backend.study_programs.index', compact('studyPrograms'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('pages.backend.study_programs.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:study_programs',
            'department_id' => 'required|exists:departments,id',
        ]);

        StudyProgram::create($request->all());

        return redirect()->route('study_programs.index')->with('success', 'Study Program created successfully.');
    }

    public function edit(StudyProgram $studyProgram)
    {
        $departments = Department::all();
        return view('pages.backend.study_programs.edit', compact('studyProgram', 'departments'));
    }

    public function update(Request $request, StudyProgram $studyProgram)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:study_programs,code,' . $studyProgram->id,
            'department_id' => 'required|exists:departments,id',
        ]);

        $studyProgram->update($request->all());

        return redirect()->route('study_programs.index')->with('success', 'Study Program updated successfully.');
    }

    public function destroy(StudyProgram $studyProgram)
    {
        $studyProgram->delete();
        return redirect()->route('study_programs.index')->with('success', 'Study Program deleted successfully.');
    }
}