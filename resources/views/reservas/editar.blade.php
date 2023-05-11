@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1> Editar la reserva</h1>
            <br>

              <br>
              <p></p>


              <div class="row">
                <div class="col-lg-12">

                    <form method="POST" action="{{route('reservas.update', $reserva->id)}}" class="row g-3 needs-validation" novalidate>

                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="fecha_reserva" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Fecha de reserva:')}} <span class="text-danger"> *</span></b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="date" class="form-control @error('fecha_reserva') is-invalid @enderror" id="fecha_reserva" name="fecha_reserva" value="{{ old('fecha_reserva', $reserva->fecha_reserva) }}" autocomplete="fecha_reserva" autofocus>
                                @error('fecha_reserva')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="hora_reserva" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Hora de reserva:')}}<span class="text-danger"> *</span></b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="time" class="form-control @error('hora') is-invalid @enderror" name="hora_reserva" value="{{ old('hora_reserva', $reserva->hora_reserva) }}" required autocomplete="hora_reserva">
                                @error('hora_reserva')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="numero_personas" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Número de personas:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="number" class="form-control @error('numero_personas') is-invalid @enderror" id="numero_personas" name="numero_personas" value="{{ old('numero_personas', $reserva->numero_personas) }}" autocomplete="numero_personas" autofocus maxlength="10">
                                @error('numero_personas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="mayores_18" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Número de personas mayores de 18:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="number" class="form-control @error('mayores_18') is-invalid @enderror" id="mayores_18" name="mayores_18" value="{{ old('mayores_18', $reserva->mayores_18) }}" autocomplete="mayores_18" autofocus maxlength="10">
                                @error('mayores_18')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="menores_18" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Número de personas menores de 18:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="number" class="form-control @error('menores_18') is-invalid @enderror" id="menores_18" name="menores_18" value="{{ old('menores_18', $reserva->menores_18) }}" autocomplete="menores_18" autofocus maxlength="10">
                                @error('menores_18')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="tipo_plan" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Tipo de plan:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <select class="form-select  @error('tipo_plan') is-invalid @enderror" id="tipo_plan" name="tipo_plan" autocomplete="tipo_plan">
                                    <option selected value="{{$reserva->tipo_plan}}">{{$reserva->tipo_plan}}</option>
                                    <option value="nunguno">{{__('Ninguno')}}</option>
                                    <option value="senderismo">{{__('Senderismo')}}</option>
                                    <option value="observacion_de_fauna_y_flora_silvestre">{{__('Observación de Fauna y Flora Silvestre')}}</option>
                                    <option value="fotografia_y_video">{{__('Fotografía y Video')}}</option>
                                    <option value="investigacion_y_educacion_ambiental">{{__('Investigación y Educación Ambiental')}}</option>
                                  </select>
                                @error('tipo_plan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="servicio_adicional" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Servicio adicional:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <select class="form-select  @error('servicio_adicional') is-invalid @enderror" id="servicio_adicional" name="servicio_adicional" autocomplete="servicio_adicional">
                                    <option selected value="{{$reserva->servicio_adicional}}">{{$reserva->servicio_adicional}}</option>
                                    <option value="nunguno">{{__('Ninguno')}}</option>
                                    <option value="alojamiento">{{__('Alojamiento')}}</option>
                                    <option value="cafeteria">{{__('Cafetería')}}</option>
                                    <option value="zona_de_camping">{{__('Zona de Camping')}}</option>
                                    <option value="auditorio">{{__('Auditorio')}}</option>
                                  </select>
                                @error('servicio_adicional')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>


                          <div class="row mb-3">
                            <label for="valor_reserva" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Valor de reserva:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="number" class="form-control @error('valor_reserva') is-invalid @enderror" id="valor_reserva" name="valor_reserva" value="{{ old('valor_reserva', $reserva->valor_reserva) }}" required autocomplete="nombre" autofocus>
                                @error('valor_reserva')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="estado_pago" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Esatdo del pago:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <select class="form-select  @error('estado_pago') is-invalid @enderror" id="estado_pago" name="estado_pago" autocomplete="estado_pago">
                                    <option selected value="{{$reserva->estado_pago}}">{{$reserva->estado_pago}}</option>
                                    <option value="pagado">{{__('Pagado')}}</option>
                                    <option value="pendiente">{{__('Pendiente')}}</option>
                                    <option value="abono">{{__('Abono')}}</option>
                                  </select>
                                @error('estado_pago')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="cliente_id" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Cliente:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <select class="form-select @error('cliente_id') is-invalid @enderror" id="cliente_id" name="cliente_id" autocomplete="cliente_id">
                                    <option select value="{{$reserva->cliente_id}}">{{$reserva->clientes->nombre}}</option>
                                    @forelse ( $clientes as $cliente)
                                    <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                    @empty
                                    <option value="">{{__('No existen clientes')}}</option>
                                    @endforelse
                                  </select>
                                @error('cliente_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>


                      <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100" type="submit">{{ __('Editar') }}</button>
                      </div>
                      <div class="col-12">
                        {{-- <button type="submit" class="btn btn-danger w-100" type="submit"></button> --}}
                        <a href="{{route ('reservas.index')}}" class="btn btn-danger w-100" role="button" aria-disabled="true">{{ __('Regresar') }}</a>
                      </div>
                    </form><!-- End Custom Styled Validation -->

                </div>


              </div>


        </div>


    </div>
</div>
@endsection
