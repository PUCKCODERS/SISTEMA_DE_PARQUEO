@extends('adminlte::page')

@section('content_header')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">REGISTRO DE NUEVO USUARIO</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">INICIO</a></li>
              <li class="breadcrumb-item"><a href="{{url('/admin/usuarios')}}">LISTADO USUARIOS</a></li>
            </ol>
          </div>
        </div>
      </div>

      <hr style="border: 1px solid #212529;">

@stop

@section('content')

<form action="{{url('/admin/usuarios/create')}}" method="POST">
                    @csrf
    <div class="row" >
        <div class="col-md-12" >
            <div class="card  card-primary" >
              <div class="card-header">
                <h3 class="card-title" >LLENE EL FORMULARIO</h3>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">ROLES</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                    </div>
                                   <select name="rol" class="form-control" id="">
                                    <option value="">SELECCIONE UN ROL</option>
                                    @foreach ($roles as $role)
                                        @if (!($role->name == 'SUPER ADMIN'))
                                        <option value="{{$role->name}}"
                                        {{old('rol') == $role->neme ? 'selected' : ''}}>
                                        {{$role->name}}
                                    </option>
                                        @endif
                                    @endforeach
                                   </select>
                                </div>
                                @error('rol')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombres">NOMBRES</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="nombres" id="nombres"
                                     value="{{old('nombres')}}"
                                     placeholder="Ej. JOSE LUIS" required>
                                </div>
                                @error('nombres')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellidos">APELLIDOS</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos"
                                     value="{{old('apellidos')}}"
                                     placeholder="Ej. PEREZ SANCHEZ" required>
                                </div>
                                @error('apellidos')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">CORREO ELECTRONICO</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="email" id="email"
                                     value="{{old('email')}}"
                                     placeholder="Ejemplo123@gmail.com" required>
                                </div>
                                @error('email')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tipo_documento">TIPO DE DOCUMENTO</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <select class="form-control" name="tipo_documento" id="tipo_documento" required>
                                        <option value="">SELECCIONE......</option>
                                        <option value="DNI" {{old('tipo_documento') == 'DNI' ? 'selected' : ''}}>
                                            (DNI)  DOCUMENTO NACIONAL DE IDENTIDAD</option>
                                            <option value="CARNET DE EXTRANJERO"
                                             {{old('tipo_documento') == 'CARNET DE EXTRANJERO' ? 'selected' : ''}}>
                                            CARNET DE EXTRANJERO</option>
                                            <option value="PASAPORTE"
                                             {{old('tipo_documento') == 'PASAPORTE' ? 'selected' : ''}}>
                                            PASAPORTE</option>
                                            <option value="RUC"
                                             {{old('tipo_documento') == 'RUC' ? 'selected' : ''}}>
                                            (RUC)  REGISTRO ÚNICO DE CONTRIBUYENTES</option>
                                            <option value="CI"
                                             {{old('tipo_documento') == 'CI' ? 'selected' : ''}}>
                                            (CI)  CEDULA DE IDENTIDAD</option>
                                    </select>
                                </div>
                                @error('tipo_documento')
                                    <small style="color red">{{ $message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="numero_documento">NÚMERO DE DOCUMENTO</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="numero_documento" id="numero_documento"
                                     value="{{old('numero_documento')}}"
                                     placeholder="Ej. 1234567890" required>
                                </div>
                                @error('numero_documento')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="celular">CELULAR</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="celular" id="celular"
                                     value="{{old('celular')}}"
                                     placeholder="Ej. 0968873896" required>
                                </div>
                                @error('celular')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fecha_nacimiento">FECHA DE NACIMIENTO</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                                     value="{{old('fecha_nacimiento')}}"
                                     placeholder="" required>
                                </div>
                                @error('fecha_nacimiento')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="genero">GÉNERO</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                    </div>
                                    <select class="form-control" name="genero" id="genero" required>
                                        <option value="">SELECCIONE......</option>
                                            <option value="Masculino" {{old('genero') == 'Masculino' ? 'selected' : ''}}>
                                            MASCULINO</option>
                                            <option value="Femenino"
                                             {{old('genero') == 'Femenino' ? 'selected' : ''}}>
                                            FEMENINO</option>
                                            <option value="Otro"
                                             {{old('genero') == 'Otro' ? 'selected' : ''}}>
                                            OTRO</option>

                                    </select>
                                </div>
                                @error('genero')
                                    <small style="color red">{{ $message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="direccion">DIRECCIÓN</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="direccion" id="direccion"
                                     value="{{old('direccion')}}"
                                     placeholder="Ej. AV. MORO MORO Y ALBERTO SPENCER" required>
                                </div>
                                @error('direccion')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>

    <div class="row" >
        <div class="col-md-12" >
            <div class="card card-info" >
              <div class="card-header">
                <h3 class="card-title" >CONTACTOS DE EMERGENCIA</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="contacto_nombre">NOMBRE</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-shield"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="contacto_nombre" id="contacto_nombre"
                                     value="{{old('contacto_nombre')}}"
                                     placeholder="Ej. JOSE LUIS PEREZ PAEZ" required>
                                </div>
                                @error('contacto_nombre')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                         </div>
                     </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="contacto_telefono">TELEFONO</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="contacto_telefono" id="contacto_telefono"
                                     value="{{old('contacto_telefono')}}"
                                     placeholder="Ej. 0968873896" required>
                                </div>
                                @error('contacto_telefono')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                         </div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="contacto_parentesco">PARENTESCO</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="contacto_parentesco" id="contacto_parentesco"
                                     value="{{old('contacto_parentesco')}}"
                                     placeholder="Ej. HERMANO" required>
                                </div>
                                @error('contacto_parentesco')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                         </div>
                     </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>

     <hr style="border: 1px solid #212529;">

        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <a href="{{url('/admin/usuarios')}}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> REGRESAR</a>
                    <button type="submit" class="btn btn-primary "><i class="fas fa-save"></i> GUARDAR</button>
            </div>
        </div>
        <br>
   </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
