@extends('layout')

@section('title', "Pagina no encontrada")

@section('contenido') 
    
    <h2>Pagina no encontrada</h2>
    <a href="{{ route('users')}}" class="btn btn-success">Volver</a>
@endsection