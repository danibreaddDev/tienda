@extends('layout')
@section('title', $orderInfo['user_id'])
@section('content')

    <div class="px-5 container">
        <div class="row row-cols-2 h-50">

            {{ $orderInfo}}
        </div>
    </div>
@endsection
