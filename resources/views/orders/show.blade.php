@extends('layout')
@section('title', "pedido")
@section('content')
<pre>eo{{ $orderInfo }}</pre>
    @php
        var_dump($orderInfo["order_lines"]);
    @endphp
    <div class="px-5 container">

    </div>
@endsection
