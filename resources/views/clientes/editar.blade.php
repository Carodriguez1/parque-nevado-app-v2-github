@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1> Editar datos del cliente</h1>
            <br>

              <br>
              <p></p>


              <div class="row">
                <div class="col-lg-12">

                    <form method="POST" action="{{route('clientes.update', $cliente->id)}}" class="row g-3 needs-validation" novalidate>

                        @csrf
                        @method('PUT')
                          <div class="row mb-3">
                            <label for="tipo_doc" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Tipo de Documento:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <select class="form-select  @error('tipo_doc') is-invalid @enderror" id="tipo_doc" name="tipo_doc" autocomplete="tipo_doc">
                                    <option selected value="{{$cliente->tipo_doc}}">{{$cliente->tipo_doc}}</option>
                                    {{-- <option value="CC_DIG">{{__('Cédula digital')}}</option>
                                    <option value="TI">{{__('Tarjeta de identidad')}}</option>
                                    <option value="CC_EXT">{{__('Cédula de Extranjería')}}</option>
                                    <option value="PASS">{{__('Pasaporte')}}</option> --}}
                                  </select>
                                @error('tipo_doc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>


                        <div class="row mb-3">
                            <label for="numero_doc" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Número de Cédula:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control @error('numero_doc') is-invalid @enderror" id="numero_doc" name="numero_doc" value="{{ old('numero_doc',  $cliente->numero_doc) }}" autocomplete="numero_doc" autofocus maxlength="10">
                                @error('numero_doc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Nombre completo:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" required autocomplete="nombre" autofocus>
                                @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                        <div class="row mb-3">
                            <label for="correo" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Correo Electrónico:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="email" class="form-control @error('correo') is-invalid @enderror" id="correo" name="correo" value="{{ old('correo', $cliente->correo) }}" autocomplete="correo" autofocus>
                                @error('correo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                        <div class="row mb-3">
                            <label for="telefono" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('# Telefónico:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{ old('telefono', $cliente->telefono) }}" autocomplete="telefono" autofocus>
                                @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="departamento" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Departamento:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control @error('departamento') is-invalid @enderror" id="departamento" name="departamento" value="{{ old('departamento', $cliente->departamento) }}" autocomplete="departamento" autofocus>
                                @error('departamento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="ciudad" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Ciudad:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control @error('ciudad') is-invalid @enderror" id="ciudad" name="ciudad" value="{{ old('ciudad', $cliente->ciudad) }}" autocomplete="ciudad" autofocus>
                                @error('ciudad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                        <div class="row mb-3">
                            <label for="direccion" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Dirección:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{ old('direccion', $cliente->direccion) }}" autocomplete="direccion" autofocus>
                                @error('direccion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>


                        <div class="row mb-3">
                            <label for="fecha_nacimiento" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Fecha de Nacimiento:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $cliente->fecha_nacimiento) }}" autocomplete="fecha_nacimiento" autofocus>
                                @error('fecha_nacimiento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>

                        <div class="row mb-3">
                            <label for="edad" class="col-md-4 col-lg-3 col-form-label"><b class="card-title">{{__('Edad:')}}</b></label>
                            <div class="col-md-8 col-lg-9">
                                <input type="text" class="form-control @error('edad') is-invalid @enderror" id="edad" name="edad" value="{{ old('edad', $cliente->edad) }}" autocomplete="edad" autofocus>
                                @error('edad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>
                          </div>


                      <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">{{ __('Actualizar') }}</button>
                      </div>
                      <div class="col-12">
                        {{-- <button type="submit" class="btn btn-danger w-100" type="submit"></button> --}}
                        <a href="{{route ('clientes.index')}}" class="btn btn-danger w-100" role="button" aria-disabled="true">{{ __('Regresar') }}</a>
                      </div>
                    </form><!-- End Custom Styled Validation -->

                </div>


              </div>


        </div>


    </div>
</div>
@endsection
