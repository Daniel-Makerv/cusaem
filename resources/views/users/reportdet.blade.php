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
        <th>#</th>
        <th>Usuario</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Periodo</th>
        <th>Genero</th>
        <th>Registros</th>
        <th>Fecha y hora</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($detalle as $deta)
      <tr>
        <td>{{ $deta->id_report }}</td>
        <td>{{ $deta->name_usu }} {{ $deta->lastname_usu }}</td>
        <td>{{ $deta->name_report }}</td>
        <td>{{ $deta->descripcion_report }}</td>
        <td>{{ $deta->period_report }}</td>
        <td>{{ $deta->generos_report }}</td>
        <td>{{ $deta->registros_report }}</td>
        <td>{{ $deta->date_report }}</td>
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
</div>
@section('js')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
<script src="{{ asset('user/js/user-funciones.js') }}"></script>
<!-- <script src="{{asset('SweetAlerts/sweetalert.js')}}"></script> -->
@endsection
@stop
