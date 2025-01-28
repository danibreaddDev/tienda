@extends('layout')
@section('title', 'login')
@section('content')
    <div class="container mt-5 pt-5">
        <h1>TIENDA</h1>
        @if (!empty($error))
            <div class="text-danger">
                {{ $error }}
            </div>
        @endif

        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <fieldset class="d-flex flex-column gap-2">
                            <label for="username">Username: </label>
                            <input type="text" name="username">
                            <label for="password">Password: </label>
                            <input type="password" name="password">
                            <input type="submit" name="submit" value="Login" class="btn btn-dark align-self-center">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
