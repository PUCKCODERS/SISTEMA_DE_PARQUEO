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
        <div class="col-md-9" >
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
                            <table id="table1" class="table table-bordered table-striped table-hover table-sm">
                            <thead style="background-color: #007bff; color: white; text-align: center;">
                                <tr>
                                    <th style="width: 10px">NUMERO</th>
                                    <th>ROLES</th>
                                    <th >ACCIONES</th>
                                </tr>
                            </theadsty>
                            <tbody style="text-align: center;">
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$role->name}}</td>
                                    <td class="d-flex justify-content-center" style="gap: 5px;">
                                        <a href="#" class="btn btn-warning btn-sm" title="EDITAR"><i class="fas fa-check"></i> PERMISOS</a>
                                        <a href="{{url('/admin/rol/'.$role->id.'/edit')}}" class="btn btn-success btn-sm" title="EDITAR"><i class="fas fa-edit"></i> EDITAR</a>
                                        <form action="{{url('/admin/rol/'.$role->id)}}" method="POST" id="miFormulario{{ $role->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="preguntar{{$role->id}}(event)">
                                            <i class="fas fa-trash-alt"></i> ELIMINAR</button>

                                        </form>
                                        <script>
                                            function preguntar{{$role->id}}(event){
                                                event.preventDefault();
                                                Swal.fire({
                                                    title: '¿ESTA SEGURO DE ELIMINAR EL ROL?',
                                                    text: "NO PODRA RECUPERAR LA INFORMACION",
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'SI, ELIMINAR',
                                                    cancelButtonText: 'CANCELAR'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        document.getElementById('miFormulario{{ $role->id }}').submit();
                                                    }
                                                })
                                            }
                                        </script>

                                    </td>
                                </tr>
                                @endforeach
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
   <style>
    #table1_wrapper .dt-buttons{
        background-color: transparent;
        box-shadow: none;
        border: none;
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    #table1_wrapper .btn{
        color: #fff;
        border-radius: 5px;
        padding: 5px 15px;
        font-size: 11px;
    }

    .btn-danger{
        background-color: #dc3545;
        border: none;
    }
    .btn-danger:hover{
        background-color: #c82333;
        border-color: #bd2130;
    }
    .btn-info{
        background-color: #17a2b8;
        border-color: #17a2b8;
    }
    .btn-info:hover{
        background-color: #138496;
        border-color: #117a8b;
    }
    .btn-success{
        background-color: #28a745;
        border-color: #28a745;
    }
    .btn-success:hover{
        background-color: #218838;
        border-color: #1e7e34;
    }
    .btn-warning{
        background-color: #FF8C00 ;
        border-color: #FF8C00 ;
        color: #212529;
    }
    .btn-warning:hover{
        background-color: #b86614;
        border-color: #b86614;
        color: #212529;
    }
    .btn-default{
        background-color: #6c757d;
        border-color: #6c757d;
    }
    .btn-default:hover{
        background-color: #5a6268;
        border-color: #545b62;
    }


   </style>
@stop

@section('js')
    <script>
    $(function(){
        $("#table1").DataTable({
            "pageLength": 10,
            "language": {
                "emptyTable":     "NO HAY INFORMACION DISPONIBLE",
                "info":           "Mostrando _START_ a _END_ de _TOTAL_ Roles",
                "infoEmpty":      "MOSTRANDO 0 a 0 de 0 Roles",
                "infoFiltered":   "(filtrado de _MAX_ total de Roles)",
                "lengthMenu":     "Mostrar _MENU_ Roles",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search":         "Buscar:",
                "zeroRecords":    "No se encontraron registros coincidentes",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Ultimo",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            buttons: [
                {text: '<i class="fas fa-copy"></i> COPIAR',
                extend: 'copy',
                className: 'btn btn-default'
            },
                {text: '<i class="fas fa-file-pdf"></i> PDF',
                extend: 'pdf',
                className: 'btn btn-danger'
            },
                {text: '<i class="fas fa-print"></i> CVS',
                extend: 'print',
                className: 'btn btn-info'
            },
                {text: '<i class="fas fa-file-excel"></i> EXCEL',
                extend: 'excel',
                className: 'btn btn-success'
            },
                {text: '<i class="fas fa-print"></i> IMPRIMIR',
                extend: 'print',
                className: 'btn btn-warning'},
            ]
        }).buttons().container().appendTo('#table1_wrapper .row:eq(0)');
    })
    </script>
@stop
