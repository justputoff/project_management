@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <h1>Create Project</h1>
    <div class="row mb-3">
        <a href="{{ route('projects.index') }}" class="btn btn-sm btn-secondary mx-3 col-md-1">Back</a>
        <a href="https://www.youtube.com" target="_blank" class="btn btn-sm btn-success col-md-1">Upload Image</a>
    </div>
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <?php
                    $levels = ['Beginner', 'Intermediate', 'Advanced'];
                    $randomLevel = $levels[array_rand($levels)];
                ?>
                <input type="text" class="form-control" id="name" name="name" value="Project {{ $randomLevel }}" required>
            </div>
            <div class="col-md-6">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-control">
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
            </div>
            <div class="col-md-6">
                <label for="estimate_time" class="form-label">Estimate Time / Days</label>
                <input type="number" class="form-control" id="estimate_time" name="estimate_time" value="10" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" style="height: 200px" required>{{ Str::random(1000) }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection