@extends('layouts.frontend.main')

@section('content')

<div class="container">
    <h1>{{ $project->name }}</h1>
    <p>{!! $project->description !!}</p>
</div>

@endsection