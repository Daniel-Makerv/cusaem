@extends('layouts.menuadmin')
@section('header')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}"/>
@endsection
@section('contenido')
<div class="content-wrapper reporte">
  <h1 align="center">Reporte de Usuarios</h1>
  <!-- <a href="{{ url('user/create') }}"> -->
  <a href="javascript:void(0)" class="a">
    <button value="Alta" title="Alta usuario" class="btn btn-success" id="registrar"><i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a>
  <a href="{{ url('pdfuser') }}" class="a">
    <button title="PDF" class="btn btn-danger" id="pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
  </a>
  <a href="{{ url('export') }}" class="a">
    <button title="Excel" class="btn btn-success" id="excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
  </a>
  <a href="javascript:void(0)" class="a">
    <button value="Alta" title="Alta usuario" class="btn btn-success" id="reportdet" data-bs-toggle="modal" data-bs-target="#modalRep"><i class="fa fa-file-text" aria-hidden="true"></i></button>
  </a><br><br>
  <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <th>Foto</th>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de nacimiento</th>
        <th>sexo</th>
        <th>Teléfono</th>
        <th>Correo electrónico</th>
        <th>Rol</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
      <tr>
        <td><img src="/imagen/{{ ($user->img_usu) }}" width="100"></td>
        <td>{{ $user->id_usu }}</td>
        <td>{{ $user->name_usu }}</td>
        <td>{{ $user->lastname_usu }}</td>
        <td>{{ $user->date_usu }}</td>
        <td>{{ $user->sexo_usu }}</td>
        <td>{{ $user->phone_usu }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->name_rol }}</td>
        <td>
          <form action="{{ url('/user/'.$user->id ) }}" method="post" class="eliminar">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{url('destroy', ['id'=>$user->id])}}" class="a">
              <button id="eliminar" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
            </a>
          </form>
            @if($user->deleted_at)
              <a href="{{url('activar', ['id'=>$user->id])}}" class="a">
                <button id="activar" class="btn btn-success">Activar</button>
              </a>
              @else
              <a href="{{ url('/user/'.$user->id.'/edit') }}" class="a">
                <button class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>
                  </a>
              <a href="{{url('desactivar', ['id'=>$user->id])}}" class="a">
                <button id="desactivar" class="btn btn-warning">Desactivar</button>
              </a>
              @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- Registrar -->
  <form class="form" action="{{ route('reporte.altarep') }}" method="POST">
    @csrf
    <div class="modal fade" tabindex="-1" id="modalRep">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Reporte detallado de usuarios</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <input name="id_usu" type="hidden" class="form-group" value="{{ Auth::id('id_usu') }}" id="id_usu">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" id="" name="name_report">
                  <small id="emailHelp" class="form-text text-muted">Escribe el nombre del reporte aquí.</small>
                  <label>Descripción:</label>
                  <textarea class="form-control" name="descripcion_report" id="" rows="3" placeholder="Escribe una descripción aquí."></textarea>
                  <label>Periodo:</label>
                  <select class="custom-select" name="period_report">
                    <option>Seleccione una opción</option>
                    <option value="Anual">Anual</option>
                    <option value="Mensual">Mensual</option>
                    <option value="Semanal">Semanal</option>
                  </select>
                  <label>Generos:</label>
                  <select class="custom-select" name="generos_report">
                    <option>Seleccione una opción</option>
                    <option value="Todos">Todos</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                  <label>Registros:</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="registros_report" id="" value="Todos">
                    <label class="form-check-label" for="inlineRadio1">Todos</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="registros_report" id="" value="Insertados">
                    <label class="form-check-label" for="inlineRadio2">Insertados</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="registros_report" id="" value="Modificados">
                    <label class="form-check-label" for="inlineRadio3">Modificados</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="registros_report" id="" value="Eliminados">
                    <label class="form-check-label" for="inlineRadio3">Eliminados</label>
                  </div><br>
                  <label>Fecha:</label>
                  <input type="date" class="form-control" id="" name="date_report" value="{{ date('Y-m-d') }}" disabled>
                  <label>Hora:</label>
                  <input type="time" class="form-control" id="" value="{{ date('H:i') }}" disabled>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Crear</button>
              </div>
          </div>
      </div>
    </div>
  </form>
</div>
@section('js')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
<script src="{{ asset('user/js/user-funciones.js') }}"></script>
<!-- <script src="{{asset('SweetAlerts/sweetalert.js')}}"></script> -->
@endsection
@stop
