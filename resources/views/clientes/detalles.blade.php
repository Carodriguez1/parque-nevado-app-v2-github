@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1> Información del Cliente</h1>
            <br>
              <p></p>


              <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Nombre: {{$cliente->nombre}}</h5>
                          @foreach ($reserva as $rs)
                          <h5 class="card-title">Nombre: {{$rs->fecha_reserva}}</h5>
                          @endforeach
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Tipo de documento: {{$cliente->tipo_doc}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Número de documento: {{$cliente->numero_doc}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Correo: {{$cliente->correo}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Teléfono: {{$cliente->telefono}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Departamento: {{$cliente->departamento}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Ciudad: {{$cliente->ciudad}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Dirección: {{$cliente->ciudad}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Fecha de Nacimiento: {{$cliente->fecha_nacimiento}}</h6></li>
                            <li class="list-group-item"> <h6 class="card-subtitle mb-2 text-body-secondary">Edad: {{$cliente->edad}}</h6></li>
                          </ul>
                          <a href="{{route ('clientes.index')}}" class="btn btn-danger w-100" role="button" aria-disabled="true">{{ __('Regresar') }}</a>
                        </div>
                      </div>
                </div>
                <br>
                <p></p>
                <p></p>
                <h1> Reservas del Cliente</h1>
                <p></p>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($reserva as $rs)
                          <h5 class="card-title">Fecha de la reserva: {{$rs->fecha_reserva}}</h5>

                          <h5 class="card-title">Hora de la reserva: {{$rs->hora_reserva}}</h5>

                          <h5 class="card-title">Valor de la reserva: $ {{$rs->valor_reserva}}</h5>

                          <div class="alert alert-warning" role="alert">
                            <b>Código de reserva: </b> {{$rs->uuid}}
                          </div>

                          <ul class="list-group list-group-flush">
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Número de personas: {{$rs->numero_personas}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Mayores de 18: {{$rs->mayores_18}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Menores de 18: {{$rs->menores_18}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Tipo de plan: {{$rs->tipo_plan}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Servicio adicional: {{$rs->servicio_adicional}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Esatado del pago: {{$rs->estado_pago}}</h6></li>
                          </ul>
                          @endforeach
                        </div>
                      </div>



                </div>


              </div>


        </div>


    </div>
</div>
@endsection
