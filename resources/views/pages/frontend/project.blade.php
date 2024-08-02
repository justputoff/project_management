@extends('layouts.frontend.main')

@section('content')

<div class="card mb-4">
    <div class="card-body">
        <ul class="nav nav-tabs row" id="myTab" role="tablist">
            <li class="nav-item col-md-3" role="presentation">
                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
            </li>
            <li class="nav-item col-md-3" role="presentation">
                <button class="nav-link" id="chapters-tab" data-bs-toggle="tab" data-bs-target="#chapters" type="button" role="tab" aria-controls="chapters" aria-selected="false">Chapters</button>
            </li>
            <li class="nav-item col-md-3" role="presentation">
                <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" role="tab" aria-controls="comments" aria-selected="false">Comments</button>
            </li>
            <li class="nav-item col-md-3" role="presentation">
                <button class="nav-link" id="contributors-tab" data-bs-toggle="tab" data-bs-target="#contributors" type="button" role="tab" aria-controls="contributors" aria-selected="false">Contributors</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="description-container bg-white text-dark" style="max-height: 600px; overflow-y: auto;">
                    <p class="mt-3 description text-dark bg-white">{!! $project->description !!}</p>
                </div>
            </div>
            <div class="tab-pane fade" id="chapters" role="tabpanel" aria-labelledby="chapters-tab">
                    @foreach($project->chapters as $chapter)
                        <div class="d-flex justify-content-between align-items-center text-dark bg-white p-2 border-bottom">
                            <a href="{{ route('chapters.edit', $chapter->id) }}" class="text-dark">{{ $chapter->name }}</a>
                            <span class="badge bg-primary">{{ $chapter->status }}</span>
                        </div>
                    @endforeach
                    @if ($project->chapters->isEmpty())
                    <div class="d-flex justify-content-between align-items-center text-dark bg-white p-2 border-bottom">
                        <p class="text-center text-muted mt-3 bg-white">No chapters found</p>
                        @if ($project->user_id == Auth::user()->id)
                            <a href="{{ route('chapters.create', $project->id) }}" class="btn btn-success">Add Chapter</a>
                        @endif
                    </div>
                    @else
                        @if ($project->user_id == Auth::user()->id)
                        <div class="d-flex justify-content-end bg-white p-3">
                            <a href="{{ route('chapters.index', $project->id) }}" class="btn btn-success">View All Chapters</a>
                        </div>
                        @endif
                    @endif
            </div>
            <div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab" style="max-height: 400px; overflow-y: auto; overflow-x:hidden">
                @foreach ($project->comments as $comment)
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
                @if ($project->comments->isEmpty())
                <div class="bg-white p-3 text-center">
                    <p class="text-muted mt-3">No comments found</p>
                </div>
                @endif
                <div class="bg-white p-3 text-start">
                    <form action="{{ route('comments.store', $project->id) }}" method="post" class="mt-2 comment-form" style="display: none;">
                        @csrf
                        <input type="text" name="comment" id="comment" class="form-control">
                        <button type="submit" class="btn btn-sm btn-success mt-2">Submit</button>
                    </form>
                </div>
                <div class="d-flex justify-content-end bg-white p-3">
                    <button class="btn btn-sm btn-success mt-2" onclick="toggleCommentForm()">Comment</button>
                </div>
            </div>
            <div class="tab-pane fade" id="contributors" role="tabpanel" aria-labelledby="contributors-tab">
                @foreach($project->contributors->where('status', 'active') as $contributor)
                <div class="d-flex justify-content-between align-items-center text-dark bg-white p-2 border-bottom">
                    <a href="{{ route('chapters.edit', $contributor->id) }}" class="text-dark">{{ $contributor->user->name }}</a>
                    <span class="badge bg-primary">{{ $contributor->role }}</span>
                </div>
            @endforeach
            @if ($project->contributors->where('status', 'active')->isEmpty())
                <p class="text-center text-muted mt-3 bg-white">No contributors found</p>
                <div class="d-flex justify-content-end bg-white p-3">
                    <a href="{{ route('contributors.index', $project->id) }}" class="btn btn-success">View All Contributors</a>
                </div>
            @else
                @if ($project->user_id == Auth::user()->id)
                    <div class="d-flex justify-content-end bg-white p-3">
                        <a href="{{ route('contributors.index', $project->id) }}" class="btn btn-success">View All Contributors</a>
                    </div>
                @endif
            @endif
            </div>
        </div>
    </div>
</div>

@endsection