@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header">
      <a href="{{ route('contributors.create', $project->id) }}" class="btn btn-primary btn-sm">Create Contributor</a>
      <a href="{{ route('projects.show', $project->id) }}" class="btn btn-secondary btn-sm">back</a>
    </div>
  </div>
  <div class="card mt-2">
    <h5 class="card-header">Table Contributors</h5>
    <div class="table-responsive text-nowrap p-3">
      <table class="table" id="example">
        <thead>
          <tr class="text-nowrap table-dark">
            <th class="text-white">No</th>
            <th class="text-white">User Name</th>
            <th class="text-white">Project Name</th>
            <th class="text-white">Role</th>
            <th class="text-white">Status</th>
            <th class="text-white">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($contributors as $contributor)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $contributor->user->name }}</td>
            <td>{{ $contributor->project->name }}</td>
            <td>{{ $contributor->role }}</td>
            <td>{{ $contributor->status }}</td>
            <td>
                <form action="{{ route('contributors.update', $contributor->id) }}" method="POST" class="d-flex">
                    @csrf
                    @method('PATCH')
                    <div class="input-group input-group-sm mx-2 w-50">
                      <select name="status" class="form-select form-select-sm">
                        <option value="pending" {{ $contributor->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="rejected" {{ $contributor->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                        <option value="cancelled" {{ $contributor->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        <option value="active" {{ $contributor->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $contributor->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        <option value="fired" {{ $contributor->status == 'fired' ? 'selected' : '' }}>Fired</option>
                        <option value="completed" {{ $contributor->status == 'completed' ? 'selected' : '' }}>Completed</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-warning btn-sm mx-2">Update</button>
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