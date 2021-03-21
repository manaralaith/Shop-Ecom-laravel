

@extends('master')

@section('content')

    <div class="container detail-page">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ $product['gallery'] }}" class="img-fluid treding-img d-block w-100" alt="Fotos">
            </div>
            <div class="col-sm-6">
                <a href="{{ url()->previous() }}">Go Back</a>
                <h2>{{ $product['name'] }}</h2>
                <h3>{{ $product['price'] }}</h3>
                <p>{{ $product['description'] }}</p>
                <h5>{{ $product['category'] }}</h5>
                <br><br>
                <form action="{{ url('add_to_cart') }}" method="POST">@csrf
                    <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                    <button class="btn btn-primary">Add To Cart</button>
                </form>
                <br><br>
                <button class="btn btn-success">Buy Now</button>
                <br><br>
            </div>
        </div>
    </div>

@endsection
