@extends('layout')
@section('title', "pedido")
@section('content')
    <pre>{{ $orderInfo }}</pre>
    <div class="px-5 container">
        <div class="row">
            <div class="col">
                <h1>ID de Pedido:  </h1>
                <h1>DNI: {{ auth()->user()->dni }}</h1>
                <h2>USERNAME: {{ auth()->user()->username }}</h2>
            </div>
        </div>
        <div class="row row-cols-2 h-50">
            @php
                $total = 0;

            @endphp

        </div>
    </div>
@endsection
