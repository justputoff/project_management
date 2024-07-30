@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <h1>Create Chapter</h1>
    <div class="row mb-3">
        <a href="{{ route('chapters.index', $project->id) }}" class="btn btn-sm btn-secondary mx-3 col-md-1">Back</a>
        <a href="https://www.youtube.com" target="_blank" class="btn btn-sm btn-success col-md-1">Upload Image</a>
    </div>
    <form action="{{ route('chapters.store', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Chapter Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="estimate_time" class="form-label">Estimate Time</label>
                <input type="text" class="form-control" id="estimate_time" name="estimate_time" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="editor" name="description"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection