

@extends('master')

@section('content')

    <div class="search-page">
        <div class="search-wrapper row">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url()->previous() }}">Go Back</a>
            <div class="col-sm-4">
                <a href="#">Fillter</a>
            </div>
            <div class="col-sm-4">
                <h4>Result For products</h4>
                @foreach ($products as $item )
                    <div class="search-content">
                        <a href="detail/{{ $item['id'] }}">
                            <img src="{{ $item['gallery'] }}" class="img-fluid treding-img d-block" alt="Fotos">
                            <div class="search-desc">
                                <h2>{{ $item['name'] }}</h2>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
