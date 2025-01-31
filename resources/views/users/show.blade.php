@extends('layout')
@section('title', 'Users')
@section('content')
    <div class="px-5 container">
        <div>
            <div>
                <p>{{ $user['id'] }}</p>
                <p>{{ $user['username'] }}</p>
                <p>{{ $user['password'] }}</p>
                <p>{{ $user['dni'] }}</p>
                <p>{{ $user['api_token'] }}</p>
                <p>{{ $user['role'] }}</p>
            </div>
        </div>
    </div>
@endsection
