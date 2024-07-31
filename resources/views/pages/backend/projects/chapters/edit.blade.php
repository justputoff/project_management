@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <h1>Edit Chapter</h1>
    <div class="row mb-3">
        <a href="{{ route('chapters.index', $chapter->project_id) }}" class="btn btn-sm btn-secondary col-md-1 mx-1">Back</a>
        <a href="https://filemanager.layananberhentikuliah.com/files" target="_blank" class="btn btn-sm btn-success col-md-1 mx-1">Upload Image</a>
    </div>
    <form action="{{ route('chapters.update', $chapter->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Chapter Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $chapter->name }}" required>
            </div>
            <div class="col-md-6">
                <label for="estimate_time" class="form-label">Estimate Time</label>
                <input type="text" class="form-control" id="estimate_time" name="estimate_time" value="{{ $chapter->estimate_time }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" style="height: 200px" required>{{ $chapter->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection