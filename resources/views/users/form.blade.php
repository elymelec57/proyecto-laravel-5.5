
@extends('layout')

@section('title', "usuario")

@section('contenido')

  <div class="card mt-2">
    <div class="card-header bg-primary text-white">
      <h3>Crear Usuarios</h3>
    </div>

    <div class="card-body">
    <form class="" method="POST" action="{{ route('users.store')}}">

          {!! csrf_field() !!}


          @if($errors->any())
          <div class="alert alert-danger">
            <p>Es necesario cumplir con los campos:</p>
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
          </div>
          @endif

          <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name"  placeholder="name" value="{{ old('name')}}">

          </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email')}}">

          </div>

          <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-primary mt-3">Crear</button>

          </form>
    </div>
  </div>


@endsection
