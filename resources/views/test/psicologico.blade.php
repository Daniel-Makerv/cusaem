@extends('layouts.menuadmin')
@section('header')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}"/>
@endsection
@section('contenido')
<div class="content-wrapper">
  <h1 align="center">Reporte de preguntas psicológico</h1>
  <!-- <a href="{{ url('user/create') }}"> -->
  <a href="javascript:void(0)">
    <button value="Alta" title="Alta reporte psicometrico" class="btn btn-success" id="registrar"><i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a>
  <a href="{{ url('pdfuser') }}">
    <button title="PDF" class="btn btn-danger" id="pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
  </a>
  <a href="{{ url('export') }}">
    <button title="Excel" class="btn btn-success" id="excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
  </a>
  <a href="javascript:void(0)" class="a">
    <button value="Alta" title="Alta usuario" class="btn btn-success" id="reportdet" data-bs-toggle="modal" data-bs-target="#modalRep"><i class="fa fa-file-text" aria-hidden="true"></i></button>
  </a><br><br>

  <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Pregunta uno</th>
        <th>Pregunta dos</th>
        <th>Pregunta tres</th>
        <th>Pregunta cuatro</th>
        <th>Pregunta cinco</th>
        <th>Pregunta seis</th>
        <th>Pregunta siete</th>
        <th>Pregunta ocho</th>
        <th>Pregunta nueve</th>
        <th>Pregunta diez</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($tests as $test)
      <tr>
        <td>{{ $test->id_test }}</td>
        <td>{{ $test->name_usu }} {{ $test->lastname_usu }}</td>
        <td>{{ $test->pregunta_uno }}</td>
        <td>{{ $test->pregunta_dos }}</td>
        <td>{{ $test->pregunta_tres }}</td>
        <td>{{ $test->pregunta_cuatro }}</td>
        <td>{{ $test->pregunta_cinco }}</td>
        <td>{{ $test->pregunta_seis }}</td>
        <td>{{ $test->pregunta_siete }}</td>
        <td>{{ $test->pregunta_ocho }}</td>
        <td>{{ $test->pregunta_nueve }}</td>
        <td>{{ $test->pregunta_diez }}</td>
        <td>
          <form action="{{ url('/user/'.$user->id ) }}" method="post" class="eliminar">
            @csrf
            {{ method_field('DELETE') }}
            <a href="{{url('destroy', ['id'=>$user->id])}}">
              <button id="eliminar" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
            </a>
          </form>
            @if($user->deleted_at)
              <a href="{{url('activar', ['id'=>$user->id])}}">
                <button id="activar" class="btn btn-success">Activar</button>
              </a>
              @else
              <a href="{{ url('/user/'.$user->id.'/edit') }}">
                <button class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>
                  </a>
              <a href="{{url('desactivar', ['id'=>$user->id])}}">
                <button id="desactivar" class="btn btn-warning">Desactivar</button>
              </a>
              @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- Registrar -->
  <form class="form" action="{{ route('altareportepsicologico.altatest') }}" method="POST">
    @csrf
    <div class="modal fade" tabindex="-1" id="modalRep">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Reporte detallado de examenes test</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" id="" name="name_reporttest">
                  <small id="emailHelp" class="form-text text-muted">Escribe el nombre del reporte aquí.</small>
                  <label>Descripción:</label>
                  <textarea class="form-control" name="descripcion_reportest" id="" rows="3" placeholder="Escribe una descripción aquí."></textarea>
                  <label>Periodo:</label>
                  <select class="custom-select" name="period_reporttest">
                    <option>Seleccione una opción</option>
                    <option value="Anual">Anual</option>
                    <option value="Mensual">Mensual</option>
                    <option value="Semanal">Semanal</option>
                  </select>
                  <label>Generos:</label>
                  <select class="custom-select" name="generos_reporttest">
                    <option>Seleccione una opción</option>
                    <option value="Todos">Todos</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                  <label>Registros:</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="registros_reporttest" id="" value="Todos">
                    <label class="form-check-label" for="inlineRadio1">Todos</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="registros_reporttest" id="" value="Insertados">
                    <label class="form-check-label" for="inlineRadio2">Insertados</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="registros_reporttest" id="" value="Modificados">
                    <label class="form-check-label" for="inlineRadio3">Modificados</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="registros_reporttest" id="" value="Eliminados">
                    <label class="form-check-label" for="inlineRadio3">Eliminados</label>
                  </div><br>
                  <label>Fecha:</label>
                  <input type="date" class="form-control" id="" name="date_reporttest" value="{{ date('Y-m-d') }}" disabled>
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
<!-- <script src="{{asset('SweetAlerts/sweetalert.js')}}"></script> -->
@endsection
@stop
