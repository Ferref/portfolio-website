@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    @if(!empty($abouts))
        <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner align-items-stretch">
                @foreach($abouts as $index => $about)
                    <div class="carousel-item w-100 {{ $index === 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center align-items-center carousel-slide-wrapper">
                            <div class="card card-border carousel-card text-start">
                                <img src="{{ asset('images/abouts/' . $about->img_path) }}" class="card-img-top" alt="{{ $about['name'] }}">
                                
                                <div class="card-body d-flex flex-column text-start h-100 justify-content-around">
                                    <h5 class="card-title">{{ $about['title'] }}</h5>
                                    <p class="card-text">{{ $about['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev position-absolute top-50 start-0 translate-middle-y" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next position-absolute top-50 end-0 translate-middle-y" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    @endif
</div>
@endsection
