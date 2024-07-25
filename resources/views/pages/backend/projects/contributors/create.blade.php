@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <h1>Create Contributor</h1>
    <form action="{{ route('contributors.store', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection