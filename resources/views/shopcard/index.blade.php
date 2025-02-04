@extends('layout')
@section('title', 'Users')
@section('content')
    <?php $total = 0; ?>
    <div class="container-fluid">
        <div class="row row-cols-1 g-5">
            @forelse ($shopCard as $linea)
                <?php $total += $linea['cantidad'] * $linea['precio']; ?>
                <div class="col d-flex flex-row gap-5 justify-content-evenly align-items-center">

                    <h2>producto: {{ $linea['nombre'] }}</h2>
                    <h2>Precio: {{ $linea['precio'] }}€</h2>
                    <h3>Total: {{ $linea['precio'] * $linea['cantidad'] }}€</h3>
                    <form action="{{ route('ShopCardUpdate') }}" method="POST"
                        class="d-flex flex-row gap-2 align-items-center">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" value="{{ $linea['id'] }}">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" class="form-control" name="cantidad" value="{{ $linea['cantidad'] }}">

                        <input type="submit" class="btn btn-warning" value="Actualizar">
                    </form>
                    <form action="{{ route('ShopCardDelete') }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" value="{{ $linea['id'] }}">
                        <input type="submit" class="btn btn-danger" value="Eliminar del carrito">
                    </form>

                </div>

            @empty
                <div class="col">No hay productos en el carrito</div>
            @endforelse
            @if ($shopCard)
                <div class="col d-flex flex-column gap-2 align-items-center">
                    <h1>Total: {{ $total }}€</h1>
                    <a href="" class="btn btn-success">REALIZAR PEDIDO</a>
                    <a href="{{ route('ProductList') }}" class="btn btn-secondary">Seguir Comprando</a>

                </div>
            @endif
        </div>
    </div>
@endsection
