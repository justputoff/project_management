<?php

use App\Http\Controllers\ContributorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudyProgramController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProjectChapterController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('projects/list', [ProjectController::class, 'projectList'])->name('projects.projectList');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User routes
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::patch('users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Student routes
    Route::get('students', [StudentController::class, 'index'])->name('students.index');
    Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('students', [StudentController::class, 'store'])->name('students.store');
    Route::get('students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::patch('students/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

    // Lecturer routes
    Route::get('lecturers', [LecturerController::class, 'index'])->name('lecturers.index');
    Route::get('lecturers/create', [LecturerController::class, 'create'])->name('lecturers.create');
    Route::post('lecturers', [LecturerController::class, 'store'])->name('lecturers.store');
    Route::get('lecturers/{lecturer}/edit', [LecturerController::class, 'edit'])->name('lecturers.edit');
    Route::patch('lecturers/{lecturer}', [LecturerController::class, 'update'])->name('lecturers.update');
    Route::delete('lecturers/{lecturer}', [LecturerController::class, 'destroy'])->name('lecturers.destroy');

    // Department routes
    Route::get('departments', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('departments/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('departments', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::patch('departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

    // Study Program routes
    Route::get('study_programs', [StudyProgramController::class, 'index'])->name('study_programs.index');
    Route::get('study_programs/create', [StudyProgramController::class, 'create'])->name('study_programs.create');
    Route::post('study_programs', [StudyProgramController::class, 'store'])->name('study_programs.store');
    Route::get('study_programs/{studyProgram}/edit', [StudyProgramController::class, 'edit'])->name('study_programs.edit');
    Route::patch('study_programs/{studyProgram}', [StudyProgramController::class, 'update'])->name('study_programs.update');
    Route::delete('study_programs/{studyProgram}', [StudyProgramController::class, 'destroy'])->name('study_programs.destroy');

    //Project routes
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
    Route::patch('projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
    Route::patch('projects/{project}/status', [ProjectController::class, 'updateStatus'])->name('projects.updateStatus');
    
    //Project Comment routes
    Route::post('projects/{project}/comments', [ProjectController::class, 'commentStore'])->name('comments.store');
    Route::post('projects/comments/{comment}/reply', [ProjectController::class, 'commentReplyStore'])->name('comments.reply');

    //Project Contributor routes
    Route::get('projects/{project}/contributors', [ContributorController::class, 'index'])->name('contributors.index');
    Route::get('projects/{project}/contributors/create', [ContributorController::class, 'create'])->name('contributors.create');
    Route::post('projects/{project}/contributors', [ContributorController::class, 'store'])->name('contributors.store');
    Route::patch('projects/contributors/{contributor}', [ContributorController::class, 'update'])->name('contributors.update');

    //Project Chapter routes
    Route::get('projects/{project}/chapters', [ProjectChapterController::class, 'index'])->name('chapters.index');
    Route::get('projects/{project}/chapters/create', [ProjectChapterController::class, 'create'])->name('chapters.create');
    Route::post('projects/{project}/chapters', [ProjectChapterController::class, 'store'])->name('chapters.store');
    Route::get('projects/chapters/{chapter}/edit', [ProjectChapterController::class, 'edit'])->name('chapters.edit');
    Route::get('projects/chapters/{chapter}', [ProjectChapterController::class, 'show'])->name('chapters.show');
    Route::patch('projects/chapters/{chapter}', [ProjectChapterController::class, 'update'])->name('chapters.update');
    Route::delete('projects/chapters/{chapter}', [ProjectChapterController::class, 'destroy'])->name('chapters.destroy');
    Route::patch('projects/chapters/{chapter}/status', [ProjectChapterController::class, 'statusUpdate'])->name('chapters.statusUpdate');

    //Chapter Comment routes
    Route::post('projects/chapters/{chapter}/comments', [ProjectChapterController::class, 'chapterCommentStore'])->name('chapterComments.store');

});

require __DIR__.'/auth.php';