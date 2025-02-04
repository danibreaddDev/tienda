@extends('layout')
@section('title', 'create User')
@section('content')
    <div class="container">
        <h1>Create User</h1>
        <div class="row">
            <div class="col">
                <form action="{{ route('Users.store') }}" method="POST">
                    @csrf
                    <fieldset class="d-flex flex-column gap-2">
                        <label for="username">Username:</label>
                        <input type="text" name="username">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                        <label for="dni">DNI</label>
                        <input type="text" name="dni">
                        <label for="role">Role</label>
                        <select name="role">
                            <option value="admin">admin</option>
                            <option value="client">client</option>
                        </select>
                        <input type="submit" value="Create" class="btn btn-primary align-self-center">
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
@endsection
