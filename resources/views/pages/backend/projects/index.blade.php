@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a href="{{ route('projects.create') }}" class="btn btn-primary btn-sm">Create</a>
    </div>
  </div>
  <div class="card mt-2">
    <h5 class="card-header">Table Projects</h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">Name</th>
            <th class="text-white">Status</th>
            <th class="text-white">Start Date</th>
            <th class="text-white">End Date</th>
            <th class="text-white">Update Status</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $project->name }}</td>
            <td>{{ $project->status }}</td>
            <td>{{ date('l, d F Y', strtotime($project->start_date)) }}</td>
            <td>{{ date('l, d F Y', strtotime($project->end_date)) }}</td>
            <td>
              <form action="{{ route('projects.updateStatus', $project->id) }}" method="POST" class="d-flex">
                @csrf
                @method('PATCH')
                <div class="input-group input-group-sm mx-2 w-50">
                  <select name="status" class="form-select form-select-sm">
                    <option value="accepted" {{ $project->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="rejected" {{ $project->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    <option value="on_progress" {{ $project->status == 'on_progress' ? 'selected' : '' }}>On Progress</option>
                    <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
              </form>
            </td>
            <td>
              <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info btn-sm">Show</a>
              <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
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