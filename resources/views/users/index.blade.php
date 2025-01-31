@extends('layout')
@section('title', 'Users')
@section('content')
<div class="px-5 container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th scope="col">dni</th>
            <th scope="col">token</th>
            <th scope="col">role</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <th scope="row">{{$user["id"]}}</th>
                <td><a href="{{ route('Users.show', $user) }}">{{$user["username"]}}</a></td>
                <td>{{$user["password"]}}</td>
                <td>{{$user["dni"]}}</td>
                <td>{{$user["api_token"]}}</td>
                <td>{{$user["role"]}}</td>
                <td><a href="">Editar</a></td>
                <td><a href="">eliminar</a></td>
            </tr>
            @empty

            @endforelse
        </tbody>
      </table>
</div>
@endsection
