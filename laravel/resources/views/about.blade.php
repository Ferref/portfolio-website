@extends('layouts.app')

@section('content')
<div class="about-container container-fluid d-flex flex-column flex-lg-row gap-4 py-5">
    <div class="card-container container-fluid h-50 d-flex flex-row gap-3 flex-column flex-md-row p-5">
        @if(!empty($abouts))
            @foreach($abouts as $about)
                <div class="card card-border col-12 col-lg-6 p-3">
                <img src="{{ asset('images/abouts/' . $about->img_path) }}" class="card-img-top" alt="{{ $about['name'] }}">
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title">{{ $about['title'] }}</h5>
                    <p class="card-text">{{ $about['description'] }}</p>
                </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection