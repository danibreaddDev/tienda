@extends('layout')
@section('title', 'create User')
@section('content')
    <div class="container">
        <h1>Edit User</h1>
        <div class="row">
            <div class="col">
                <form action="{{ route('Users.update',$user->id) }}" method="POST">
                    @method("PUT")
                    @csrf
                    <fieldset class="d-flex flex-column gap-2">
                        <label for="username">Username:</label>
                        <input type="text" name="username" value="{{$user->username}}">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="{{$user->password}}">
                        <label for="dni">DNI</label>
                        <input type="text" name="dni" value="{{$user->dni}}">
                        <label for="role">Role</label>
                        <select name="role" value="{{$user->role}}">

                            <option value="admin">admin</option>
                            <option value="client">client</option>
                        </select>
                        <input type="submit" value="Edit" class="btn btn-primary align-self-center">
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
@endsection
