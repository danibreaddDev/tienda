@extends('layout')
@section('title', 'Users')
@section('content')

    <div class="container">
        <div class="row row-cols-1">
            @forelse ($shopCard as $linea)
                <div class="col d-flex flex-row gap-2">

                    <h2>producto: {{ $linea['nombre'] }}</h2>
                    <h2>Precio: {{ $linea['precio'] }}</h2>
                    <form action="{{ route('ShopCardUpdate') }}" method="post">
                        @method('PUT')
                        @csrf
                        <label for="cantidad">Cantidad:</label>
                        <input type="hidden" name="id" value="{{$linea["id"]}}">
                        <input type="text" name="cantidad" value="{{ $linea['cantidad'] }}">
                        <input type="submit" class="btn btn-warning" value="Actualizar">
                    </form>
                    <form action="{{ route('ShopCardDelete') }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{$linea["id"]}}">
                        <input type="submit" class="btn btn-danger" value="Eliminar del carrito">
                    </form>

                </div>
            @empty
                <div class="col">No hay productos en el carrito</div>
            @endforelse
        </div>
    </div>
@endsection
