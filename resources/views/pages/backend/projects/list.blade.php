@extends('layouts.backend.main')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('frontend/assets/images/dashboard.svg') }}" alt="Home" width="50">
                        <div class="ms-3">
                            <h5 class="card-title mb-0">Project List</h5>
                            <p class="mb-0">Project yang sudah di publish</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4" >
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach ($projects as $project)
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <span class="badge bg-primary mb-2">Programming & Tech</span>
                                    <h5 class="card-title text-truncate">{{ $project->name }}</h5>
                                    <img src="{{ Storage::url($project->thumbnail) }}" class="img-fluid mb-3 card p-1" alt="Project Image" style="max-height: 200px; min-width: max-content;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                                        </div>
                                        <small class="text-muted">{{ date('d F Y', strtotime($project->created_at)) }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection