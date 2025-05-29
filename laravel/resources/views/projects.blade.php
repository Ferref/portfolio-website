@extends('layouts.app')

@section('content')
<div class="project-container container-fluid d-flex flex-column flex-lg-row gap-3">
@if(!empty($projects))
    @foreach($projects as $project)
        <div class="card card-border col-12 col-md-6 col-lg-4">
        <img src="{{ asset('images/projects/' . $project->img_path) }}" class="card-img-top" alt="{{ $project['name'] }}">
        <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title">{{ $project['name'] }}</h5>
            <p class="card-text">{{ $project['description'] }}</p>
            <a href="{{ $project['link'] }}" class="btn btn-dark">Go to project</a>
        </div>
        </div>
    @endforeach
@endif
</div>
@endsection