<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use App\Models\User;
use App\Models\StudyProgram;
use Illuminate\Support\Facades\Storage;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::all();
        return view('pages.backend.lecturers.index', compact('lecturers'));
    }

    public function create()
    {
        $users = User::whereHas('role', function($query) {
            $query->where('name', 'lecturer');
        })->get();

        $studyPrograms = StudyProgram::all();
        return view('pages.backend.lecturers.create', compact('users', 'studyPrograms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'study_program_id' => 'required|exists:study_programs,id',
            'nidn' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        Lecturer::create($data);

        return redirect()->route('lecturers.index')->with('success', 'Lecturer created successfully.');
    }

    public function edit(Lecturer $lecturer)
    {
        $studyPrograms = StudyProgram::all();
        return view('pages.backend.lecturers.edit', compact('lecturer', 'studyPrograms'));
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $request->validate([
            'study_program_id' => 'required|exists:study_programs,id',
            'nidn' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('profile_picture')) {
            if ($lecturer->profile_picture) {
                Storage::disk('public')->delete($lecturer->profile_picture);
            }
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $lecturer->update($data);

        return redirect()->route('lecturers.index')->with('success', 'Lecturer updated successfully.');
    }

    public function destroy(Lecturer $lecturer)
    {
        if ($lecturer->profile_picture) {
            Storage::disk('public')->delete($lecturer->profile_picture);
        }
        $lecturer->delete();
        return redirect()->route('lecturers.index')->with('success', 'Lecturer deleted successfully.');
    }
}