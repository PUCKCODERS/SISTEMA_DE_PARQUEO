@extends('adminlte::page')



@section('content_header')

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">LISTADO DE ROLES</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">INICIO</a></li>
              <li class="breadcrumb-item active">ROLES</li>
            </ol>
          </div>
        </div>
      </div>

      <hr style="border: 1px solid #212529;">

@stop

@section('content')
    <div class="row" >
        <div class="col-md-6" >
            <div class="card card-outline card-primary" >
              <div class="card-header">
                <h3 class="card-title">ROLES REGISTRADOS</h3>

                <div class="card-tools">
                <a href="{{url('/admin/roles/create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> CREAR NUEVO</a>
                </div>




                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover table-sm">
                            <thead style="background-color: #007bff; color: white; text-align: center;">
                                <tr>
                                    <th style="width: 10px">NUMERO</th>
                                    <th>ROLES</th>
                                    <th >ACCIONES</th>
                                </tr>
                            </theadsty>
                            <tbody style="text-align: center;">
                            </tbody>

                        </table>
                        </div>
                    </div>
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
