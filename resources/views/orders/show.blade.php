@extends('layout')
@section('title', 'pedido')
@section('content')
    @php
        $total = 0;
    @endphp

    <div class="px-5 container">
        <h2 class="mb-4">Detalles del Pedido #{{ $order->id }}</h2>
        <h3>DNI CLIENTE: {{$order->user->dni}}</h3>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderlines as $line)
                @php
                    $total += $line->precio * $line->cantidad;
                @endphp
                    <tr>
                        <td>{{ $line->linea }}</td>
                        <td>{{ $line->nombre }}</td>
                        <td>{{ $line->cantidad }}</td>
                        <td>{{ $line->precio }}€</td>
                        <td>{{ $line->precio * $line->cantidad}}€</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3 text-end">
            <h4><strong>Total del Pedido:</strong>
               @php
                   echo "<h3>$total" . "€</h3>";
               @endphp
            </h4>
        </div>
        <a href="{{ route('ProductList') }}" class="btn btn-dark">Volver a los productos</a>

    </div>

@endsection
