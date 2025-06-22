@extends('layouts.app')

@section('content')
<div class="project-container container-fluid d-flex flex-column flex-lg-row py-5 w-100 p-0 m-0">
    <div class="card-container row justify-content-center g-4 w-100 p-0 m-0">
        @if(!empty($projects))
            @foreach($projects as $project)
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="card h-100 card-border">
                        <img src="{{ asset('images/projects/' . $project->img_path) }}" class="card-img-top" alt="{{ $project['name'] }}">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{ $project['name'] }}</h5>
                            <p class="card-text">{{ $project['description'] }}</p>
                            <a href="{{ $project['link'] }}" class="btn btn-dark">Go to project</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
