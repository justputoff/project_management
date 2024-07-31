@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <h1>Edit Project</h1>
    <div class="row mb-3">
        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-sm btn-secondary col-md-1">Back</a>
        <a href="https://filemanager.layananberhentikuliah.com/files" target="_blank" class="btn btn-sm btn-success mx-3 col-md-1">Upload Image</a>
    </div>
    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" required>
            </div>
            <div class="col-md-6">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-control">
                    <option value="beginner" {{ $project->level == 'beginner' ? 'selected' : '' }}>Beginner</option>
                    <option value="intermediate" {{ $project->level == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                    <option value="advanced" {{ $project->level == 'advanced' ? 'selected' : '' }}>Advanced</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                <a class="btn btn-sm btn-primary mt-2" href="{{ Storage::url($project->thumbnail) }}" target="_blank">Current Image</a>
            </div>
            <div class="col-md-6">
                <label for="estimate_time" class="form-label">Estimate Time</label>
                <input type="text" class="form-control" id="estimate_time" name="estimate_time" value="{{ $project->estimate_time }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea id="editor" class="form-control" id="description" name="description">{{ $project->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection