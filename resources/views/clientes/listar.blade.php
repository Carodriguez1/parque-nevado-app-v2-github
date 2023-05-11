@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1> Módulo de Clientes</h1>
            <br>
              <p></p>

              @if (session('success'))
            <p></p>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif


              <div class="row">
                <div class="col-lg-4">
                    <a class="btn btn-primary" href="{{route ('clientes.create')}}" role="button">+ Agregar</a>
                </div>

                <div class="col-lg-4">

                </div>

                <div class="col-lg-4">
                    <a class="btn btn-warning" href="{{route ('home')}}" role="button">Regresar al menú principal</a>
                </div>

                <div class="col-lg-12">
                    <p></p>
                    <div class="card" >
                        <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                          <tr>
                            <th scope="row">{{$cliente->id}}</th>
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->correo}}</td>
                            <td>{{$cliente->departamento}}</td>
                            <td>{{$cliente->ciudad}}</td>
                            <td>{{$cliente->edad}}</td>
                            <td>
                                <!-- Example single danger button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Acciones
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route ('clientes.edit', $cliente->id)}}">Editar</a></li>
                                <li><a class="dropdown-item" href="{{ route ('clientes.show', $cliente->id)}}">Detalles</a></li>
                                <li><form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline-block" onsubmit="return confirm('Esta seguro que desea eliminar este registro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light"><i class="ri ri-delete-bin-2-fill"></i> Eliminar</button>
                                </form>

                                </a></li>
                                </ul>
                            </div>
                            </td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    </div>
                </div>


              </div>


        </div>


    </div>
</div>
@endsection
