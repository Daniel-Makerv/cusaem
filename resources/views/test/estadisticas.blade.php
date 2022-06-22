@extends('layouts.menuadmin')
@section('header')
<link rel="stylesheet" href="{{ asset('test/graficos.css') }}">
@endsection
@section('contenido')
<center>
<div>
  <h1>1.-Promedio entre respuesta de Si/No Examen Psicológico.</h1>
    <canvas id="psicologico"></canvas>
</div></center>
<center>
<div>
  <h1>2.-Promedio entre respuesta de Si/No Segundo E. Psicológico.</h1>
    <canvas id="segundoPsicologico"></canvas>
</div></center>

<center>
<div>
  <h1>3.-Promedio entre respuesta de Si/No Examen Psicometrico.</h1>
    <canvas id="psicometrico"></canvas>
</div></center>

<center>
<div>
  <h1>4.-Promedio entre respuesta de Si/No Examen segundo Psicometrico.</h1>
    <canvas id="segundoPsicometrico"></canvas>
</div></center>
  @section('js')
<script>
    let unosi = <?php echo json_encode($unosi)?>;
    let unono = <?php echo json_encode($unono)?>;
    let dossi = <?php echo json_encode($dossi)?>;
    let dosno = <?php echo json_encode($dosno)?>;
    let tressi = <?php echo json_encode($tressi)?>;
    let tresno = <?php echo json_encode($tresno)?>;
    let cuatrisi = <?php echo json_encode($cuatrisi)?>;
    let cuatrono = <?php echo json_encode($cuatrono)?>;
    let cincosi = <?php echo json_encode($cincosi)?>;
    let cincono = <?php echo json_encode($cincono)?>;
    let seissi = <?php echo json_encode($seissi)?>;
    let seisno = <?php echo json_encode($seisno)?>;
    let sietesi = <?php echo json_encode($sietesi)?>;
    let sienteno = <?php echo json_encode($sienteno)?>;
    let ochosi = <?php echo json_encode($ochosi)?>;
    let ochono = <?php echo json_encode($ochono)?>;
    let nuevesi = <?php echo json_encode($nuevesi)?>;
    let nueveno = <?php echo json_encode($nueveno)?>;
    let diezsi  = <?php echo json_encode($diezsi)?>;
    let diezno = <?php echo json_encode($diezno)?>;


    
  // Obtener una referencia al elemento canvas del DOM
  const ctx = document.getElementById('psicologico').getContext('2d');
const psicologico = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['pregunta uno: si','pregunta uno: no', 'pregunta dos: si','pregunta dos: no', 'pregunta tres: si','pregunta tres: no'
        ,'pregunta cuatro: si','pregunta cuatro: no' ,'pregunta cinco: si','pregunta cinco: no' ,'pregunta seis: si','pregunta seis: no' ,'pregunta siete: si','pregunta siete: no'
        ,'pregunta ocho: si','pregunta ocho: no' ,'pregunta nueve: si','pregunta nueve: no' ,'pregunta diez: si','pregunta diez: no'],
        datasets: [{
            label: '# of Votes',
            data: [unosi,unono,dossi,dosno,tressi,tresno,cuatrisi,cuatrono,cincosi,cincono,seissi,seisno,sietesi,sienteno,ochosi
            ,ochono,nuevesi,nueveno,diezsi,diezno],
            backgroundColor: [
                'rgba(223, 215, 107, 0.856)',
                'rgba(223, 215, 107, 0.856)', //uno
                'rgba(234, 137, 154)',
                'rgba(234, 137, 154)',//dos
                'rgba(178, 255, 255)',
                'rgba(178, 255, 255)',//tres
                'rgba(245, 245, 220)',
                'rgba(245, 245, 220)',//cuatro
                'rgba(253, 188, 180)',
                'rgba(253, 188, 180)',//cinco
                'rgba(156, 156, 156)',
                'rgba(156, 156, 156)',//seis
                'rgba(255, 164, 32)',
                'rgba(255, 164, 32)',//siete
                'rgba(130, 161, 177)',
                'rgba(130, 161, 177)',//ocho
                'rgba(0, 172, 238)',
                'rgba(0, 172, 238)',//nueve
                'rgba(191, 243, 99)',
                'rgba(191, 243, 99)',//diez
                
                
                
            ],
            borderColor: [
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)', //uno
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//dos
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//tres
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//cuatro
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',
              
            ],
            borderWidth: 1
        }]
    },
    
});

//segunda grafica para el examen 2
let oncesi = <?php echo json_encode($oncesi)?>;
let onceno = <?php echo json_encode($onceno)?>; 
let docesi = <?php echo json_encode($docesi)?>; 
let doceno = <?php echo json_encode($doceno)?>;
let trecesi = <?php echo json_encode($trecesi)?>;
let treceno = <?php echo json_encode($treceno)?>;
let catorcesi = <?php echo json_encode($catorcesi)?>;
let catorceno  = <?php echo json_encode($catorceno)?>;
let quincesi  = <?php echo json_encode($quincesi)?>;
let quinceno = <?php echo json_encode($quinceno)?>;
let diecisiesi = <?php echo json_encode($diecisiesi)?>;
let diecisiesno  = <?php echo json_encode($diecisiesno)?>;
let dicicietesi  = <?php echo json_encode($dicicietesi)?>;
let dicicieteno = <?php echo json_encode($dicicieteno)?>;
let dieciochosi  = <?php echo json_encode($dieciochosi)?>;
let dieciochono  = <?php echo json_encode($dieciochono)?>;
let diecinueveno  = <?php echo json_encode($diecinueveno)?>;
let diecinuevesi  = <?php echo json_encode($diecinuevesi)?>;
let veintesi  = <?php echo json_encode($veintesi)?>;
let veinteno = <?php echo json_encode($veinteno)?>;
    
  // Obtener una referencia al elemento canvas del DOM
  const ctxtwo = document.getElementById('segundoPsicologico').getContext('2d');
const segundoPsicologico = new Chart(ctxtwo, {
    type: 'pie',
    data: {
        labels: ['pregunta uno: si','pregunta uno: no', 'pregunta dos: si','pregunta dos: no', 'pregunta tres: si','pregunta tres: no'
        ,'pregunta cuatro: si','pregunta cuatro: no' ,'pregunta cinco: si','pregunta cinco: no' ,'pregunta seis: si','pregunta seis: no' ,'pregunta siete: si','pregunta siete: no'
        ,'pregunta ocho: si','pregunta ocho: no' ,'pregunta nueve: si','pregunta nueve: no' ,'pregunta diez: si','pregunta diez: no'],
        datasets: [{
            label: '# of Votes',
            data: [oncesi,onceno,docesi,doceno,trecesi,treceno,catorcesi,catorceno,quincesi,quinceno,diecisiesi,diecisiesno,dicicietesi,dicicieteno,dieciochosi
            ,dieciochono,diecinueveno,diecinuevesi,veintesi,veinteno],
            backgroundColor: [
                'rgba(223, 215, 107, 0.856)',
                'rgba(223, 215, 107, 0.856)', //uno
                'rgba(234, 137, 154)',
                'rgba(234, 137, 154)',//dos
                'rgba(178, 255, 255)',
                'rgba(178, 255, 255)',//tres
                'rgba(245, 245, 220)',
                'rgba(245, 245, 220)',//cuatro
                'rgba(253, 188, 180)',
                'rgba(253, 188, 180)',//cinco
                'rgba(156, 156, 156)',
                'rgba(156, 156, 156)',//seis
                'rgba(255, 164, 32)',
                'rgba(255, 164, 32)',//siete
                'rgba(130, 161, 177)',
                'rgba(130, 161, 177)',//ocho
                'rgba(0, 172, 238)',
                'rgba(0, 172, 238)',//nueve
                'rgba(191, 243, 99)',
                'rgba(191, 243, 99)',//diez
                
                
                
            ],
            borderColor: [
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)', //uno
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//dos
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//tres
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//cuatro
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',
              
            ],
            borderWidth: 1
        }]
    },
    
});



//tercera grafica para el examen 3
let veintiunosi  = <?php echo json_encode($veintiunosi)?>;
let veintiunono  = <?php echo json_encode($veintiunono)?>;
let veintidosi = <?php echo json_encode($veintidosi)?>;
let veintidosno = <?php echo json_encode($veintidosno)?>;
let veintitressi = <?php echo json_encode($veintitressi)?>;
let veintitresno = <?php echo json_encode($veintitresno)?>;
let veinticuatrosi = <?php echo json_encode($veinticuatrosi)?>;
let veinticuatrono = <?php echo json_encode($veinticuatrono)?>;
let veinticincosi = <?php echo json_encode($veinticincosi)?>;
let veinticincono = <?php echo json_encode($veinticincono)?>;
let veintiseisi = <?php echo json_encode($veintiseisi)?>;
let veintiseisno = <?php echo json_encode($veintiseisno)?>;
let veintisietesi = <?php echo json_encode($veintisietesi)?>;
let veintisieteno = <?php echo json_encode($veintisieteno)?>;
let veinteochosi = <?php echo json_encode($veinteochosi)?>;
let veinteochono   = <?php echo json_encode($veinteochono)?>;
let veintinuevesi  = <?php echo json_encode($veintinuevesi)?>;
let veintinueveno = <?php echo json_encode($veintinueveno)?>;
let treintasi = <?php echo json_encode($treintasi)?>;
let treintano = <?php echo json_encode($treintano)?>;




 // Obtener una referencia al elemento canvas del DOM
 const ctxtree = document.getElementById('psicometrico').getContext('2d');
const psicometrico = new Chart(ctxtree, {
    type: 'pie',
    data: {
        labels: ['pregunta uno: si','pregunta uno: no', 'pregunta dos: si','pregunta dos: no', 'pregunta tres: si','pregunta tres: no'
        ,'pregunta cuatro: si','pregunta cuatro: no' ,'pregunta cinco: si','pregunta cinco: no' ,'pregunta seis: si','pregunta seis: no' ,'pregunta siete: si','pregunta siete: no'
        ,'pregunta ocho: si','pregunta ocho: no' ,'pregunta nueve: si','pregunta nueve: no' ,'pregunta diez: si','pregunta diez: no'],
        datasets: [{
            label: '# of Votes',
            data: [veintiunosi,veintiunono,veintidosi,veintidosno,veintitressi,veintitresno,veinticuatrosi,veinticuatrono,veinticincosi,veinticincono,veintiseisi,veintiseisno,veintisietesi,veintisieteno,veinteochosi
            ,veintisieteno,veintinuevesi,veintinueveno,treintasi,treintano],
            backgroundColor: [
                'rgba(223, 215, 107, 0.856)',
                'rgba(223, 215, 107, 0.856)', //uno
                'rgba(234, 137, 154)',
                'rgba(234, 137, 154)',//dos
                'rgba(178, 255, 255)',
                'rgba(178, 255, 255)',//tres
                'rgba(245, 245, 220)',
                'rgba(245, 245, 220)',//cuatro
                'rgba(253, 188, 180)',
                'rgba(253, 188, 180)',//cinco
                'rgba(156, 156, 156)',
                'rgba(156, 156, 156)',//seis
                'rgba(255, 164, 32)',
                'rgba(255, 164, 32)',//siete
                'rgba(130, 161, 177)',
                'rgba(130, 161, 177)',//ocho
                'rgba(0, 172, 238)',
                'rgba(0, 172, 238)',//nueve
                'rgba(191, 243, 99)',
                'rgba(191, 243, 99)',//diez
                
                
                
            ],
            borderColor: [
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)', //uno
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//dos
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//tres
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//cuatro
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',
              
            ],
            borderWidth: 1
        }]
    },
    
});

//cuarta grafica para el examen 4

let treintaunosi= <?php echo json_encode($treintaunosi)?>;
let treintaunono = <?php echo json_encode($treintaunono)?>;
let treintadosi = <?php echo json_encode($treintadosi)?>;
let treintadosno= <?php echo json_encode($treintadosno)?>;
let treintatresi= <?php echo json_encode($treintatresi)?>;
let treintatresno= <?php echo json_encode($treintatresno)?>;
let treintacuatrosi = <?php echo json_encode($treintacuatrosi)?>;
let treintacincosi   = <?php echo json_encode($treintacincosi)?>;
let treintacincono = <?php echo json_encode($treintacincono)?>;
let treintaseisi= <?php echo json_encode($treintaseisi)?>;
let treintaseisno= <?php echo json_encode($treintaseisno)?>;
let treintasietesi= <?php echo json_encode($treintasietesi)?>;
let treintasieteno= <?php echo json_encode($treintasieteno)?>;
let treintaochosi= <?php echo json_encode($treintaochosi)?>;
let treintaochono= <?php echo json_encode($treintaochono)?>;
let treintanuevesi= <?php echo json_encode($treintanuevesi)?>;
let trenueveno= <?php echo json_encode($trenueveno)?>;
let cuarentasi= <?php echo json_encode($cuarentasi)?>;
let cuarentano = <?php echo json_encode($cuarentano)?>;

 // Obtener una referencia al elemento canvas del DOM
 const ctxfourt = document.getElementById('segundoPsicometrico').getContext('2d');
const segundoPsicometrico = new Chart(ctxfourt, {
    type: 'pie',
    data: {
        labels: ['pregunta uno: si','pregunta uno: no', 'pregunta dos: si','pregunta dos: no', 'pregunta tres: si','pregunta tres: no'
        ,'pregunta cuatro: si','pregunta cuatro: no' ,'pregunta cinco: si','pregunta cinco: no' ,'pregunta seis: si','pregunta seis: no' ,'pregunta siete: si','pregunta siete: no'
        ,'pregunta ocho: si','pregunta ocho: no' ,'pregunta nueve: si','pregunta nueve: no' ,'pregunta diez: si','pregunta diez: no'],
        datasets: [{
            label: '# of Votes',
            data: [treintaunosi,treintaunono,treintadosi,treintadosno,treintatresno,treintatresi,treintacuatrosi,treintacincosi,treintacincosi,treintacincono,treintaseisi,treintaseisno,treintasietesi,treintasieteno,treintaochosi
            ,treintaochono,treintanuevesi,trenueveno,cuarentasi,cuarentano],
            backgroundColor: [
                'rgba(223, 215, 107, 0.856)',
                'rgba(223, 215, 107, 0.856)', //uno
                'rgba(234, 137, 154)',
                'rgba(234, 137, 154)',//dos
                'rgba(178, 255, 255)',
                'rgba(178, 255, 255)',//tres
                'rgba(245, 245, 220)',
                'rgba(245, 245, 220)',//cuatro
                'rgba(253, 188, 180)',
                'rgba(253, 188, 180)',//cinco
                'rgba(156, 156, 156)',
                'rgba(156, 156, 156)',//seis
                'rgba(255, 164, 32)',
                'rgba(255, 164, 32)',//siete
                'rgba(130, 161, 177)',
                'rgba(130, 161, 177)',//ocho
                'rgba(0, 172, 238)',
                'rgba(0, 172, 238)',//nueve
                'rgba(191, 243, 99)',
                'rgba(191, 243, 99)',//diez
                
                
                
            ],
            borderColor: [
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)', //uno
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//dos
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//tres
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',//cuatro
                'rgb(255, 255, 255)',
                'rgb(255, 255, 255)',
              
            ],
            borderWidth: 1
        }]
    },
    
});

</script>
@endsection
@stop
