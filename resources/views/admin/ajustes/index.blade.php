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
                <form action="{{url('admin/ajustes/create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-md-8">
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
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre',$ajuste->nombre ?? '')}}" placeholder="SISTEMA PARQUEO A" required>
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
                                        placeholder="DESCRIPCIÓN DEL NEGOCIO" required>{{old('descripcion',$ajuste->descripcion ?? '')}}</textarea>
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
                                            <input type="text" class="form-control" id="sucursal" name="sucursal" value="{{old('sucursal',$ajuste->sucursal ?? '')}}" placeholder="SUCRURSAL CENTRO" required>
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
                                            <input type="text" class="form-control" id="telefonos" name="telefonos" value="{{old('telefonos',$ajuste->telefonos ?? '')}}" placeholder="+593 968873896" required>
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
                                        placeholder="AV. MORO MORO Y ALBERTO SPENCER" required>{{old('direccion',$ajuste->direccion ?? '')}}</textarea>
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
                                        <select class="form-control" name="divisa" id="divisa" require>
                                            <option value="">SELECCIONA LA MONEDA</option>
                                            @foreach ($divisas as $divisa)
                                                <option value="{{$divisa['symbol']}}"
                                                {{old('divisa',$ajuste->divisa ?? '') == $divisa['symbol'] ? 'selected' : ''}} >
                                                {{$divisa['name']."-(".$divisa['symbol'].")"}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                     @error('divisa')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="correo">CORREO ELECTRÓNICO</label><b> (*)</b>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                 <i class="fas fa-envelope"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" id="correo" name="correo" value="{{old('correo',$ajuste->correo ?? '')}}" placeholder="Ejemplo@parqueadero.com" required>
                                        </div>
                                         @error('correo')
                                             <small style="color: red">{{$message}}</small>
                                         @enderror
                                   </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pagina_web">PAGINA WEB</label><b> (*)</b>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                 <i class="fas fa-globe"></i>
                                                </span>
                                            </div>
                                            <input type="url" class="form-control" id="pagina_web" name="pagina_web" value="{{old('pagina_web',$ajuste->pagina_web ?? '')}}" placeholder="www.puckcoders.com" required>
                                        </div>
                                         @error('pagina_web')
                                             <small style="color: red">{{$message}}</small>
                                         @enderror
                                   </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">LOGO</label>
                                    @if(!isset($ajuste) || !$ajuste->logo)
                                    <b> (*)</b>
                                    @endif
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-image"></i>
                                            </span>
                                        </div>
                                        <input type="file" class="form-control" id="logo" name="logo" accept="image/*" onchange="mostrarImagen(event)" @if(!isset($ajuste) || !$ajuste->logo) required @endif>
                                    </div>
                                    <center>
                                        @if(isset($ajuste) && $ajuste->logo)
                                        <img id="preview1" src="{{asset('storage/logos/'.$ajuste->logo)}}"
                                        style="max-width: 100px; margin-top: 10px;">
                                    @else
                                    <img id="preview1" src=""
                                        style="max-width: 100px; margin-top: 10px;">
                                    @endif

                                    </center>
                                    @error('logo')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <script>
                                const mostrarImagen = e =>
                                  document.getElementById('preview1').src = URL.createObjectURL(e.target.files[0]);
                            </script>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo_auto">LOGO AUTO</label>
                                    @if(!isset($ajuste) || !$ajuste->logo_auto)
                                    <b> (*)</b>
                                    @endif
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-car"></i>
                                            </span>
                                        </div>
                                        <input type="file" class="form-control" id="logo_auto" name="logo_auto" accept="image/*" onchange="mostrarImagen2(event)" @if(!isset($ajuste) || !$ajuste->logo_auto) required @endif>
                                    </div>
                                     <center>
                                        @if(isset($ajuste) && $ajuste->logo_auto)
                                        <img id="preview2" src="{{asset('storage/logos/'.$ajuste->logo_auto)}}"
                                        style="max-width: 100px; margin-top: 10px;">
                                        @else
                                        <img id="preview2" src=""
                                        style="max-width: 100px; margin-top: 10px;">
                                    @endif

                                    </center>
                                    @error('logo_auto')
                                        <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <script>
                                const mostrarImagen2 = e =>
                                  document.getElementById('preview2').src = URL.createObjectURL(e.target.files[0]);
                            </script>
                        </div>
                    </div>
                </div>
                <hr style="border: 1px solid #007bff;">
                <div class="row">
                    <div class="col-md-12">
                       <p class="text-danger">(*) CAMPOS OBLIGATORIOS</p>
                       <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i> GUARDAR</button>
                    </div>

                </div>
                </form>
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
