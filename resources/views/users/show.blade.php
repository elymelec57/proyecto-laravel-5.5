@extends('layout')

@section('title', "usuario {$user->id}")

@section('contenido')

    <div class="card mt-2">
        <div class="card-header bg-primary text-white">
            <h3>Usuario #{{$user->id}}</h3>
        </div>

        <div class="card-body">
            <p>Este es el nombre: {{$user->name}}</p>
           <p>Su correo: {{$user->email}}</p>
        </div>

        <div class="card-footer">
            <a href="{{ route('users')}}" class="btn btn-success">Volver</a>
            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>

@endsection
