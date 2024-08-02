@extends('layouts.frontend.main')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="project-description overflow-hidden">
                        {!! $project->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .project-description {
        word-wrap: break-word;
        overflow-wrap: break-word;
        max-width: 100%;
    }
    .project-description img {
        max-width: 100%;
        height: auto;
    }
</style>
@endpush