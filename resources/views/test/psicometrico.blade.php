@extends('layouts.menuadmin')
@section('header')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}"/>
@endsection
@section('contenido')
<div class="content-wrapper">
  <h1 align="center">Reporte Psicometrico </h1>
  <!-- <a href="{{ url('user/create') }}"> -->
  <a href="javascript:void(0)">
    <button value="Alta" title="Alta reporte psicometrico" class="btn btn-success" id="registrar"><i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a>
  <a href="{{ url('pdfuser') }}">
    <button title="PDF" class="btn btn-danger" id="pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
  </a>
  <a href="{{ url('export') }}">
    <button title="Excel" class="btn btn-success" id="excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button>
  </a><br><br>
  <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Pregunta veintiuno</th>
        <th>Pregunta veintidos</th>
        <th>Pregunta veintitres</th>
        <th>Pregunta veinticuatro</th>
        <th>Pregunta veinticinco</th>
        <th>Pregunta veintiseis</th>
        <th>Pregunta veintisiete</th>
        <th>Pregunta veintiocho</th>
        <th>Pregunta veintinuve</th>
        <th>Pregunta treinta</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($tests as $test)
      <tr>
        <td>{{ $test->id_test }}</td>
        <td>{{ $test->name_usu }} {{ $test->lastname_usu }}</td>
        <td>{{ $test->pregunta_veintiuno }}</td>
        <td>{{ $test->pregunta_veintidos }}</td>
        <td>{{ $test->pregunta_veintitres }}</td>
        <td>{{ $test->pregunta_veinticuatro }}</td>
        <td>{{ $test->pregunta_veinticinco }}</td>
        <td>{{ $test->pregunta_veintiseis }}</td>
        <td>{{ $test->pregunta_veintisiete }}</td>
        <td>{{ $test->pregunta_veintiocho }}</td>
        <td>{{ $test->pregunta_veintinueve }}</td>
        <td>{{ $test->pregunta_treinta }}</td>
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
  <div class="" id="register">
  <div class="modal fade" tabindex="-1" id="modalRep">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reporte detallado de test</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Nombre:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Escribe el nombre del usuario.</small>
                <label>Descripción:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe una descripción aquí."></textarea>
                <label>Periodo:</label>
                <select class="custom-select">
                  <option>Seleccione una opción</option>
                  <option>anual</option>
                  <option>mensual</option>
                  <option>semanal</option>
                </select>
                <label>Genero:</label>
                <select class="custom-select">
                  <option>Seleccione una opción</option>
                  <option>Todos</option>
                  <option>Masculino</option>
                  <option>Femenino</option>
                </select>
                <label>Registros:</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Todos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Insertados</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Modificados</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">Eliminados</label>
                </div><br>
                <label>Fecha:</label>
                <input type="date" class="form-control" id="" name="" value="{{ date('Y-m-d') }}" disabled>
                <label>Hora:</label>
                <input type="time" class="form-control" id="" name="" value="{{ date('H:i') }}" disabled>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Crear</button>
            </div>
        </div>
    </div>
  </div>
</div>

  </div>
</div>
@section('js')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
<!-- <script src="{{asset('SweetAlerts/sweetalert.js')}}"></script> -->
@endsection
@stop
