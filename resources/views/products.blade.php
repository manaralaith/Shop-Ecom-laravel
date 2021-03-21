

@extends('master')

@section('content')

    <div class="product-page">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner" style="display: block">
                @foreach ($products as $item )
                    <div class="carousel-item {{ $item['id']==[27, 28, 29, 30, 31] }} {{ $item['id']==30?'active':'' }} ">
                        <a href="detail/{{ $item['id'] }}">
                            <img src="{{ $item['gallery'] }}" class="slider-img d-block w-100" alt="Fotos">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $item['name'] }}</h5>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="trending-wrapper">
        <h1>treding products</h1>
        @foreach ($products as $item )
            <div class="treding-content">
                <a href="detail/{{ $item['id'] }}">
                    <img src="{{ $item['gallery'] }}" class="img-fluid treding-img d-block w-100" alt="Fotos">
                    <div class="treding-desc">
                        <h5>{{ $item['name'] }}</h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

@endsection
