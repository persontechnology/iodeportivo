@extends('layouts.app',['title'=>'Nuevo Usuario'])
@section('breadcrumbs', Breadcrumbs::render('nuevoUsuario'))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Nuevo usuario
                </div>

                <div class="card-body">
                    <form action="{{ route('guardarUsuario') }}" method="POST">
                        @csrf
                        <div class="md-form md-outline my-1">
                            <input type="text" id="identificacion" name="identificacion" class="form-control @error('identificacion') is-invalid @enderror " value="{{ old('identificacion') }}" required>
                            <label for="identificacion">Identificación<i class="text-danger">*</i></label>
                            @error('identificacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="apellidos" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos') }}"  required  type="text">
                                    <label for="apellidos">Apellidos<i class="text-danger">*</i></label>
                                    @error('apellidos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="nombres" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres') }}" required type="text">
                                    <label for="nombres">Nombres<i class="text-danger">*</i></label>
                                    @error('nombres')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="telefono" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono') }}"  required  type="number">
                                    <label for="telefono">Teléfono<i class="text-danger">*</i></label>
                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="direccion" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion') }}" required type="text">
                                    <label for="direccion">Dirección<i class="text-danger">*</i></label>
                                    @error('direccion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" autocomplete="off">
                                    <label for="email">Email</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" type="password" autocomplete="off">
                                    <label for="password">Contraseña</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>



                        <!-- Sign up button -->
                        <button class="btn btn-elegant my-2 btn-block" type="submit">Guardar</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@prepend('linksPie')
    <script>
    $('#menuUsuarios').addClass('active');
    </script>
@endprepend
@endsection
