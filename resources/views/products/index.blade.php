@extends('layout')
@section('title', 'Products')
@section('content')
<div class="px-5 container">
<div class="row row-cols-4">
    @forelse ($products as $product)
        <div class="col">
            <div class="card d-flex flex-column gap-2 align-items-center">
                <img src="{{$product["image"]}}" alt="{{$product["name"]}}" class="img-fluid">
                <p>{{$product["name"]}}</p>
                <p>{{$product["price"]}}</p>
                <a href="{{ route('Products.show',$product["id"]) }}" class="btn btn-primary mb-2">Ver producto</a>
            </div>
        </div>
    @empty
        <p>NO hay productos</p>
    @endforelse


</div>
</div>
@endsection
