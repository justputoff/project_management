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
                            <h5 class="card-title mb-0">Dashboard</h5>
                            <p class="mb-0">Akses menu dan informasi penting lainnya di sini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4" >
            <div class="card">
                <div class="card-header" style="background-color: #0F2139">
                    <h1 class="card-title mb-0 text-white"><img src="{{ asset('frontend/assets/images/crown.svg') }}" alt="Crown" width="50"> <span class="mx-2">Leaderboard</span></h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar avatar-xl mb-3 m-auto m-auto">
                                        <img src="{{ asset('frontend/assets/images/avatar.svg') }}" alt="Avatar" class="rounded-circle bg-secondary">
                                    </div>
                                    <h5 class="card-title">Michal Mazur</h5>
                                    <p class="text-white rounded-pill badge bg-warning p-2">Project Manager</p>
                                    <h5 class="mb-0 p-3">7,235 <span class="badge bg-danger text-center"><img src="{{ asset('frontend/assets/images/crown.svg') }}" alt="Crown" width="20"><span class="mx-2">3</span></span></h5>
                                    <div class="mt-3 row">
                                        <div class="col-6 pt-3 border-top border-end">
                                            <a href="#" class="btn btn-outline-primary btn-sm">Project</a>
                                        </div>
                                        <div class="col-6 pt-3 border-top">
                                            <a href="#" class="btn btn-outline-secondary btn-sm">Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar avatar-xl mb-3 m-auto">
                                        <img src="{{ asset('frontend/assets/images/avatar.svg') }}" alt="Avatar" class="rounded-circle bg-secondary">
                                    </div>
                                    <h5 class="card-title">Nishar Ramzi</h5>
                                    <p class="text-white rounded-pill badge bg-primary p-2">Project Manager</p>
                                    <h5 class="mb-0 p-3">7,899 <span class="badge bg-primary"><img src="{{ asset('frontend/assets/images/crown.svg') }}" alt="Crown" width="20"><span class="mx-2">1</span></span></h5>
                                    <div class="mt-3 row">
                                        <div class="col-6 pt-3 border-top border-end">
                                            <a href="#" class="btn btn-outline-primary btn-sm">Project</a>
                                        </div>
                                        <div class="col-6 pt-3 border-top">
                                            <a href="#" class="btn btn-outline-secondary btn-sm">Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar avatar-xl mb-3 m-auto">
                                        <img src="{{ asset('frontend/assets/images/avatar.svg') }}" alt="Avatar" class="rounded-circle bg-secondary">
                                    </div>
                                    <h5 class="card-title">Jeni Kopter</h5>
                                    <p class="text-white rounded-pill badge bg-secondary p-2">Project Manager</p>
                                    <h5 class="mb-0 p-3">7,101 <span class="badge bg-secondary"><img src="{{ asset('frontend/assets/images/crown.svg') }}" alt="Crown" width="20"><span class="mx-2">2</span></span></h5>
                                    <div class="mt-3 row">
                                        <div class="col-6 pt-3 border-top border-end">
                                            <a href="#" class="btn btn-outline-primary btn-sm">Project</a>
                                        </div>
                                        <div class="col-6 pt-3 border-top">
                                            <a href="#" class="btn btn-outline-secondary btn-sm">Contact</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4">
            <div class="card">
                <h5 class="card-header">Table Leaderboard</h5>
                <div class="table-responsive text-nowrap p-3">
                  <table class="table" id="example">
                    <thead>
                      <tr class="text-nowrap table-dark">
                        <th class="text-white">No</th>
                        <th class="text-white">Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection