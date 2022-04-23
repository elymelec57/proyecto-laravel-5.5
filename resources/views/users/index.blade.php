
@extends('layout')

@section('title', "usuario")

@section('contenido')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Profesion</th>
      <th scope="col" class="text-center" >Accion</th>
    </tr>
  </thead>
  <tbody>
     @forelse($users as $u)
    <tr>
      <th scope="row">{{$u->id}}</th>
      <td>{{$u->name}}</td>
      <td>{{$u->email}}</td>
      <td class="text-center">{{$u->profesion_id}}</td>
      <td> 

      <div class="row">

        <a href="{{ route('users.show', $u->id) }}" class="col-4 mr-2 btn btn-primary btn-sm">Detalles</a>
        <a href="{{ route('users.edit', $u) }}" class="col-4 btn btn-success btn-sm">Editar</a>
        <a href="#" class="col-4 btn btn-danger btn-sm" data-toggle="modal" data-target="#{{$u->id}}">Eliminar</a>

         <!-- Modal -->
            <div class="modal fade" id="{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Informativo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ¿Seguro de eliminar este usuario?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form action="{{ route('users.delete', $u) }}" class="col-4" method="POST">
                    {!! csrf_field() !!}
                    {{ method_field('DELETE')}}
                      <button type="submit" class="btn btn-danger">Aceptar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

        </div>

      </td>
      @empty
      <td></td>
      <td></td>
      <td>no hay usuarios registrados</td>
      <td></td>
      <td></td>
    </tr>
    @endforelse
  </tbody>
</table>


@endsection
