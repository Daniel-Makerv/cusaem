@extends('layouts.menuadmin')

@section('content')
    <div class="card">
        <div class="card-header">
            Graficos
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <input value="period" type="radio" name="options"> Por periodo
                </div>
                <div class="col-md-3">
                    <input value="month" type="radio" name="options"> Por Mes
                </div>
                <div class="col-md-3">
                    <input value="weekend" type="radio" name="options"> Por semana
                </div>
            </div>

            <div id="contentOptions">

            </div>
            <button type="button" class="btn btn-success" id="button" hidden>Generar Gráfico</button>
            <div class="chart-container mt-4" style="position: relative; height:40vh; width:80vw" id="canvasContainer">
                <canvas id="chart"></canvas>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>

@endsection

@section('scripts')

<script src="{{ asset('Chart/moment.min.js') }}"></script>
<script src="{{ asset('Chart/Chart.min.js') }}"></script>
<script src="{{ asset('test/js/grafica.js') }}"></script>

@endsection