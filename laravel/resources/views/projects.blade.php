@extends('layouts.app')

@section('content')
<div class="project-container container-fluid d-flex flex-column flex-lg-row gap-4 pb-5">
    <div class="card-container container-fluid h-50 d-flex flex-row gap-3 flex-column flex-md-row">
        @if(!empty($projects))
            @foreach($projects as $project)
                <div class="card card-border col-12 col-lg-6 col-xl-4 p-3">
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
</div>
@endsection