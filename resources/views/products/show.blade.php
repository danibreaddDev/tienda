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

                    <form action="{{ route('ShopCardAdd') }}" method="POST">
                        @csrf
                        <fieldset>
                            <input type="hidden" name="idProducto" value="{{$product["id"]}}">
                            <input type="hidden" name="nombre" value="{{$product["name"]}}">
                            <input type="hidden" name="precio" value="{{$product["price"]}}">
                            <input type="text" name="cantidad" class="form form-control" value="1">
                            <input type="submit" value="comprar" class="btn btn-dark">
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
