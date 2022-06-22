@extends('layouts.menuadmin')
@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.css') }}" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css') }}" />
@endsection
@section('contenido')
<div class="content-wrapper">
    <h1 align="center">Reporte de Documentación</h1>
    <a href="{{ url('/export-pdf') }}">
        <button title="PDF" class="btn btn-danger" id="pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
    </a>
    <a href="{{ url('/export-excel') }}">
        <button title="Excel" class="btn btn-success" id="excel"><i class="fa fa-file-excel-o"
                aria-hidden="true"></i></button>
    </a><br><br>
    <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>No.</th>
            <th>Nombre del usuario</th>
            <th>Apellidos</th>
            <th>Documento fotografia</th>
            <th>Documento croquis</th>
            <th>Documento referencias</th>
            <th>Documento precartilla</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($documents as $document)
                <tr>
                    <td>{{ $document->id_doc }}</td>
                    <td>{{ $document->name_usu}}</td>
                    <td>{{ $document->lastname_usu}}</td>
                    <td>{{ $document->location_doc }}</td>
                    <td>{{ $document->referent_doc }}</td>
                    <td>{{ $document->depend_doc }}</td>
                    <td>{{ $document->letter_doc }}</td>
                    <td>
                        <form action="{{ url('/documents/'.$document->id ) }}" method="post"
                            class="eliminar">
                            @csrf
                            {{ method_field('DELETE') }}
                            <a
                                href="{{ url('destroy', ['id'=>$document->id]) }}">
                                <button id="eliminar" class="btn btn-danger"> <i class="fa fa-trash"
                                        aria-hidden="true"></i></button>
                            </a>
                        </form>
                        @if($document->deleted_at)
                            <a
                                href="{{ url('activar', ['id'=>$document->id]) }}">
                                <button id="activar" class="btn btn-success">Activar</button>
                            </a>
                        @else
                            <a
                                href="{{ url('/documents/'.$document->id.'/edit') }}">
                                <button class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></button>
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Registrar -->
    <div class="" id="register">

    </div>
</div>
@section('js')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{ asset('DataTables/datatables.js') }}">
</script>
<script src="{{ asset('DataTables/report.js') }}"></script>
<!-- <script src="{{ asset('SweetAlerts/sweetalert.js') }}"></script> -->
@endsection
@stop
