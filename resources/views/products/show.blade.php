@extends('layout')
@section('title', $product['name'])
@section('content')
    <div class="px-5 container">
        <div class="row row-cols-2 h-50">
            <div class="col">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid rounded">
            </div>
            <div class="col">
                <div class="d-flex flex-column gap-2 align-items-center">
                    <p class="fs-1 fw-bold">{{ $product['name'] }}</p>
                    <p class="fs-3 fw-medium">{{ $product['price'] }}</p>
                    <fieldset>
                        <input type="text" class="form form-control" value="1">
                    </fieldset>
                    <a href="{{ route('Product', $product) }}" class="btn btn-dark">Comprar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
