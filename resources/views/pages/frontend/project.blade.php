@extends('layouts.frontend.main')

@section('content')
<div class="mt-4 container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="description-container bg-white text-dark" style="max-height: 1920px; overflow-y: auto;">
                        <p class="mt-3 description text-dark bg-white">{!! $project->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection