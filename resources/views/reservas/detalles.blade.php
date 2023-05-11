@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1> Información de la reserva</h1>
            <br>
              <p></p>


              <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Nombre del cliente: {{$reserva->clientes->nombre}}</h5>
                          <h1 class="card-title">Fecha de reserva: {{$reserva->fecha_reserva}}</h1>
                          <br>

                          <div class="alert alert-warning" role="alert">
                            <b>Código de reserva: </b> {{$reserva->uuid}}
                          </div>

                          <p></p>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Hora de la reserva: {{$reserva->hora_reserva}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Número de personas: {{$reserva->numero_personas}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Mayores de 18: {{$reserva->mayores_18}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Menores de 18: {{$reserva->menores_18}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Tipo de plan: {{$reserva->tipo_plan}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Servicio adicional: {{$reserva->servicio_adicional}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Valor de la reserva: $ {{$reserva->valor_reserva}}</h6></li>
                            <li class="list-group-item"><h6 class="card-subtitle mb-2 text-body-secondary">Estado del pago: {{$reserva->estado_pago}}</h6></li>
                          </ul>
                          <a href="{{route ('reservas.index')}}" class="btn btn-danger w-100" role="button" aria-disabled="true">{{ __('Regresar') }}</a>
                        </div>
                      </div>



                </div>


              </div>


        </div>


    </div>
</div>
@endsection
