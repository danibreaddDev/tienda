@extends('layout')
@section('title', "pedido")
@section('content')
<pre>eo{{ $orderInfo }}</pre>
    @php
        print_r($orderInfo["order_lines"]);
    @endphp
    <div class="px-5 container">

    </div>
@endsection
