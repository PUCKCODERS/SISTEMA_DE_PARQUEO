@extends('adminlte::page')



@section('content_header')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CONFIGURACIÓN DEL SISTEMA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">INICIO</a></li>
              <li class="breadcrumb-item active">AJUSTES</li>
            </ol>
          </div>
        </div>
      </div>

      <hr style="border: 1px solid #007bff;">

@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">RELLENE LOS CAMPOS DEL FORMULARIO</h3>


                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre">NOMBRE DEL SISTEMA</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-building"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" placeholder="SISTEMA PARQUEO A" required>
                                    </div>
                                    @error('nombre')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="descripcion">DESCRIPCIÓN</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-align-left"></i>
                                            </span>
                                        </div>
                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="1"
                                        placeholder="DESCRIPCIÓN DEL NEGOCIO" required>{{old('descripcion')}}</textarea>
                                    </div>
                                    @error('descripcion')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sucursal">SUCURSAL</label><b> (*)</b>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                 <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="sucursal" name="sucursal" value="{{old('sucursal')}}" placeholder="SUCRURSAL CENTRO" required>
                                        </div>
                                         @error('sucursal')
                                             <small style="color: red">{{$message}}</small>
                                         @enderror
                                   </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="telefonos">TELEFONOS</label><b> (*)</b>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                 <i class="fas fa-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="telefonos" name="telefonos" value="{{old('telefonos')}}" placeholder="+593 968873896" required>
                                        </div>
                                         @error('telefonos')
                                             <small style="color: red">{{$message}}</small>
                                         @enderror
                                   </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="direccion">DIRECCIÓN</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-home"></i>
                                            </span>
                                        </div>
                                        <textarea class="form-control" id="direccion" name="direccion" rows="1"
                                        placeholder="AV. MORO MORO Y ALBERTO SPENCER" required>{{old('direccion')}}</textarea>
                                    </div>
                                    @error('direccion')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="divisa">MONEDA</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-dollar-sign"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" id="divisa" id="divisa" require>
                                            <option value="">SELECCIONA LA MONEDA</option>
                                            <option value="USD" {{old('divisa') == 'USD' ? 'selected':''}}>USD - DÓLAR</option>
                                            <option value="EUR" {{old('divisa') == 'EUR' ? 'selected':''}}>EUR - EURO</option>
                                        </select>
                                    </div>
                                     @error('divisa')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">abcd</div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
