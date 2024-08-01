@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a href="{{ route('chapters.create', $project->id) }}" class="btn btn-primary btn-sm">Create Chapter</a>
      <a href="{{ route('projects.show', $project->id) }}" class="btn btn-secondary btn-sm">back</a>
    </div>
  </div>
  <div class="card mt-2">
    <h5 class="card-header">Table Chapters</h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Project Name</th>
            <th class="text-white">Chapter Name</th>
            <th class="text-white">Status</th>
            <th class="text-white">Update Status</th>
            <th class="text-white">Start Date</th>
            <th class="text-white">End Date</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($chapters as $chapter)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $chapter->project->name }}</td>
            <td>{{ $chapter->name }}</td>
            <td>{{ $chapter->status }}</td>
            <td>
              <form action="{{ route('chapters.statusUpdate', $chapter->id) }}" method="POST" class="d-flex">
                @csrf
                @method('PATCH')
                <div class="input-group input-group-sm mx-2 w-50">
                  <select name="status" class="form-select form-select-sm">
                    <option value="pending" {{ $chapter->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="accepted" {{ $chapter->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="rejected" {{ $chapter->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    <option value="on_progress" {{ $chapter->status == 'on_progress' ? 'selected' : '' }}>On Progress</option>
                    <option value="completed" {{ $chapter->status == 'completed' ? 'selected' : '' }}>Completed</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-warning btn-sm mx-2">Update</button>
            </form>
            </td>
            <td>{{ date('l, d F Y', strtotime($chapter->start_date)) }}</td>
            <td>{{ date('l, d F Y', strtotime($chapter->end_date)) }}</td>
            <td>
              <a href="{{ route('chapters.edit', $chapter->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="{{ route('chapters.show', $chapter->id) }}" class="btn btn-info btn-sm">Show</a>
              <form action="{{ route('chapters.destroy', $chapter->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- / Content -->
@endsection