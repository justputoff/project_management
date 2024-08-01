@extends('layouts.backend.main')

@section('content')
<div class="container mt-3">
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Chapter Detail</h5>
            <p class="card-text">Akses menu dan informasi penting lainnya di sini</p>
            <a href="{{ route('chapters.index', $chapter->project->id) }}" class="btn btn-secondary btn-sm">back</a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2>{{ $chapter->name }}</h2>
                    <span class="badge bg-primary">{{ $chapter->status }}</span>
                    <p class="mt-2">
                        <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-2" alt="Avatar" width="30" height="30">
                        {{ $chapter->project->user->name }}<br>
                        <small class="text-muted">Project Manager</small>
                    </p>
                </div>
                <div>
                    <p>Durasi Chapter: {{ $chapter->estimate_time }} Days</p>
                    <a href="https://filemanager.layananberhentikuliah.com/files" target="_blank" class="btn btn-primary">Upload Image</a>
                </div>
            </div>
            <img src="{{ Storage::url($chapter->project->thumbnail) }}" class="img-fluid mt-3" style="max-width: 1080px" alt="Project Image">
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <ul class="nav nav-tabs row" id="myTab" role="tablist">
                <li class="nav-item col-md-6" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                </li>
                <li class="nav-item col-md-6" role="presentation">
                    <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" role="tab" aria-controls="comments" aria-selected="false">Comments</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <div class="description-container bg-white text-dark" style="max-height: 600px; overflow-y: auto;">
                        <p class="mt-3 description text-dark bg-white">{!! $chapter->description !!}</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
                    @foreach ($chapter->chapterComments as $comment)
                        <div class="row text-dark bg-white p-2 border-bottom">
                            <div class="col-md-2">
                                <p style="min-width: max-content">{{ $comment->user->name }}</p>
                            </div>
                            <div class="col-md-8">
                                <p class="px-4">{{ $comment->comment }}</p>
                            </div>
                            <div class="col-md-2">
                                <small class="text-muted" style="min-width: max-content">{{ $comment->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    @endforeach
                    @if ($chapter->chapterComments->isEmpty())
                    <div class="bg-white p-3 text-center">
                        <p class="text-muted mt-3">No comments found</p>
                    </div>
                    @endif
                    <div class="bg-white p-3 text-start text-dark">
                        <form action="{{ route('chapterComments.store', $chapter->id) }}" method="post" class="mt-2 comment-form" style="display: none;">
                            @csrf
                            <input type="text" name="comment" id="comment" class="form-control">
                            <button type="submit" class="btn btn-sm btn-success mt-2">Submit</button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-end bg-white p-3">
                        <button class="btn btn-sm btn-success mt-2" onclick="toggleCommentForm()">Comment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleCommentForm() {
        var form = document.querySelector('.comment-form');
        if (form.style.display === 'none') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }
    }
</script>
@endsection