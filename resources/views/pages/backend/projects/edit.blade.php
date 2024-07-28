@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <h1>Edit Project</h1>
    <div class="row mb-3">
        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-sm btn-secondary col-md-1">Back</a>
        <a href="https://www.youtube.com" target="_blank" class="btn btn-sm btn-success mx-3 col-md-1">Upload Image</a>
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
                <input type="text" class="form-control" id="level" name="level" value="{{ $project->level }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
            </div>
            <div class="col-md-6">
                <label for="estimate_time" class="form-label">Estimate Time</label>
                <input type="text" class="form-control" id="estimate_time" name="estimate_time" value="{{ $project->estimate_time }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="demo_url" class="form-label">Demo URL</label>
                <input type="url" class="form-control" id="demo_url" name="demo_url" value="{{ $project->demo_url }}">
            </div>
            <div class="col-md-6">
                <label for="github_url" class="form-label">GitHub URL</label>
                <input type="url" class="form-control" id="github_url" name="github_url" value="{{ $project->github_url }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea style="height: 200px" class="form-control" id="description" name="description">{{ $project->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection