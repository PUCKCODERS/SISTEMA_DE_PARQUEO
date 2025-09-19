@extends('adminlte::page')



@section('content_header')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MODIFICAR ROL</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">INICIO</a></li>
              <li class="breadcrumb-item"><a href="{{url('/admin/roles')}}">LISTADO ROLES</a></li>
            </ol>
          </div>
        </div>
      </div>

      <hr style="border: 1px solid #212529;">

@stop

@section('content')
    <div class="row" >
        <div class="col-md-4" >
            <div class="card card-success" >
              <div class="card-header">
                <h3 class="card-title" >LLENE EL FORMULARIO</h3>






                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{url('/admin/rol/'.$role->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">NOMBRE DE ROL</label><b> (*)</b>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                    </div>
                                    <input type="text" class="form-control"
                                     value="{{old('name',$role->name)}}" name="name"
                                     placeholder="INGRESE NOMBRE DE ROL" required>
                                </div>
                                @error('name')
                                    <small style="color: red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <hr style="border: 1px solid #212529;">

                    <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <a href="{{url('/admin/roles')}}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> REGRESAR</a>
                            <button type="submit" class="btn btn-success "><i class="fas fa-save"></i> ACTUALIZAR</button>
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
