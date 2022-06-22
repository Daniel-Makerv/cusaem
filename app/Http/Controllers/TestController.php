<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Reportetests;
use Illuminate\Support\Facades\Auth;
use DB;

class TestController extends Controller
{
    public function index(){
        $authuser = Auth::user()->id_usu;
        $examen = Test::select('id_usu')->where('id_usu',$authuser)->exists();  
        return view('test.examen',compact('authuser', 'examen'));

    }
    public function psicologicouno(){
        $datos['tests'] = Test::all();
        $consulta['tests'] = Test::withTrashed()->join('users', 'tests.id_usu','=','users.id_usu')
        ->select(
        'tests.id_test',
        'users.name_usu',
        'users.lastname_usu',
        'tests.pregunta_uno',
        'tests.pregunta_dos',
        'tests.pregunta_tres',
        'tests.pregunta_cuatro',
        'tests.pregunta_cinco',
        'tests.pregunta_seis',
        'tests.pregunta_siete',
        'tests.pregunta_ocho',
        'tests.pregunta_nueve',
        'tests.pregunta_diez')->get();
         return view('test.psicologico')->with($datos)->with($consulta);
        
    }



    public function psicologicodos(){
        $datos['tests'] = Test::all();
        $consulta['tests'] = Test::withTrashed()->join('users', 'tests.id_usu','=','users.id_usu')
        ->select(
        'tests.id_test',
        'users.name_usu',
        'users.lastname_usu',
        'tests.pregunta_once',
        'tests.pregunta_doce',
        'tests.pregunta_trece',
        'tests.pregunta_catorce',
        'tests.pregunta_quince',
        'tests.pregunta_dieciseis',
        'tests.pregunta_diecisiete',
        'tests.pregunta_dieciocho',
        'tests.pregunta_diecinueve',
        'tests.pregunta_veinte')->get();
         return view('test.psicologicosegundo')->with($datos)->with($consulta);
    }


    public function psicometricouno(){
        $datos['tests'] = Test::all();
        $consulta['tests'] = Test::withTrashed()->join('users', 'tests.id_usu','=','users.id_usu')
        ->select(
        'tests.id_test',
        'users.name_usu',
        'users.lastname_usu',
        'tests.pregunta_veintiuno',
        'tests.pregunta_veintidos',
        'tests.pregunta_veintitres',
        'tests.pregunta_veinticuatro',
        'tests.pregunta_veinticinco',
        'tests.pregunta_veintiseis',
        'tests.pregunta_veintisiete',
        'tests.pregunta_veintiocho',
        'tests.pregunta_veintinueve',
        'tests.pregunta_treinta')->get();
        return view ('test.psicometrico')->with($datos)->with($consulta);
    }


    public function psicometricodos(){
        $datos['tests'] = Test::all();
        $consulta['tests'] = Test::withTrashed()->join('users', 'tests.id_usu','=','users.id_usu')
        ->select(
        'tests.id_test',
        'users.name_usu',
        'users.lastname_usu',
        'tests.pregunta_treinta_y_uno',
        'tests.pregunta_treinta_y_dos',
        'tests.pregunta_treinta_y_tres',
        'tests.pregunta_treinta_y_cuatro',
        'tests.pregunta_treinta_y_cinco',
        'tests.pregunta_treinta_y_seis',
        'tests.pregunta_treinta_y_siete',
        'tests.pregunta_treinta_y_ocho',
        'tests.pregunta_treinta_y_nueve',
        'tests.pregunta_cuarenta')->get();
        return view ('test.psicometricosegundo')->with($datos)->with($consulta);
    }
    public function altatest(Request $request)
    {
         $report = $request->all();
         Reportetests::create($report);
         //return view('test.psicologico');
         return back();
    }

    public function store(Request $request){

        // para las validaciones de cada campo
        $request->validate([
            'pregunta_uno' => ['required'],
            'pregunta_dos' => ['required'],
            'pregunta_tres' => ['required'],
            'pregunta_cuatro' => ['required'],
            'pregunta_cinco' => ['required'],
            'pregunta_seis' => ['required'],
            'pregunta_siete' => ['required'],
            'pregunta_ocho' => ['required'],
            'pregunta_nueve' => ['required'],
            'pregunta_diez' => ['required'],
            'pregunta_once' => ['required'],
            'pregunta_doce' => ['required'],
            'pregunta_trece' => ['required'],
            'pregunta_catorce' => ['required'],   
            'pregunta_quince' => ['required'],   
            'pregunta_dieciseis' => ['required'],   
            'pregunta_diecisiete' => ['required'],  
            'pregunta_dieciocho' => ['required'],  
            'pregunta_diecinueve' => ['required'],  
            'pregunta_veinte' => ['required'],   
            'pregunta_veintiuno' => ['required'],   
            'pregunta_veintidos' => ['required'],   
            'pregunta_veintitres' => ['required'],   
            'pregunta_veinticuatro' => ['required'],   
            'pregunta_veinticinco' => ['required'],  
            'pregunta_veintiseis' => ['required'],  
            'pregunta_veintisiete' => ['required'],  
            'pregunta_veintiocho' => ['required'],  
            'pregunta_veintinueve' => ['required'],  
            'pregunta_treinta' => ['required'],  
            'pregunta_treinta_y_uno' => ['required'],  
            'pregunta_treinta_y_dos' => ['required'],  
            'pregunta_treinta_y_tres' => ['required'],  
            'pregunta_treinta_y_cuatro' => ['required'],  
            'pregunta_treinta_y_cinco' => ['required'],  
            'pregunta_treinta_y_seis' => ['required'],
            'pregunta_treinta_y_siete' => ['required'],
            'pregunta_treinta_y_ocho' => ['required'],
            'pregunta_treinta_y_nueve' => ['required'],
            'pregunta_cuarenta' => ['required'],
        ]);
        
      // guardar todo en base y redireccionar
      $examen = $request->all();
      Test::create($examen);
      return redirect()->route('tests.index');
}

public function estadisticas() {
    $unosi = DB::table('tests')->select('pregunta_uno')->where('pregunta_uno','=','si')->count();
    $unono = DB::table('tests')->select('pregunta_uno')->where('pregunta_uno','=','no')->count();
    
    $dossi = DB::table('tests')->select('pregunta_dos')->where('pregunta_dos','=','si')->count();
    $dosno = DB::table('tests')->select('pregunta_dos')->where('pregunta_dos','=','no')->count();

    $tressi = DB::table('tests')->select('pregunta_tres')->where('pregunta_tres','=','si')->count();
    $tresno = DB::table('tests')->select('pregunta_tres')->where('pregunta_tres','=','no')->count();

    $cuatrisi = DB::table('tests')->select('pregunta_cuatro')->where('pregunta_cuatro','=','si')->count();
    $cuatrono = DB::table('tests')->select('pregunta_cuatro')->where('pregunta_cuatro','=','no')->count();

    $cincosi = DB::table('tests')->select('pregunta_cinco')->where('pregunta_cinco','=','si')->count();
    $cincono = DB::table('tests')->select('pregunta_cinco')->where('pregunta_cinco','=','no')->count();

    $seissi = DB::table('tests')->select('pregunta_seis')->where('pregunta_seis','=','si')->count();
    $seisno = DB::table('tests')->select('pregunta_seis')->where('pregunta_seis','=','no')->count();

    $sietesi = DB::table('tests')->select('pregunta_siete')->where('pregunta_siete','=','si')->count();
    $sienteno = DB::table('tests')->select('pregunta_siete')->where('pregunta_siete','=','no')->count();

    $ochosi = DB::table('tests')->select('pregunta_ocho')->where('pregunta_ocho','=','si')->count();
    $ochono = DB::table('tests')->select('pregunta_ocho')->where('pregunta_ocho','=','no')->count();
    
    $nuevesi = DB::table('tests')->select('pregunta_nueve')->where('pregunta_nueve','=','si')->count();
    $nueveno = DB::table('tests')->select('pregunta_nueve')->where('pregunta_nueve','=','no')->count();
    
    $diezsi = DB::table('tests')->select('pregunta_diez')->where('pregunta_diez','=','si')->count();
    $diezno = DB::table('tests')->select('pregunta_diez')->where('pregunta_diez','=','no')->count();
    
    $oncesi = DB::table('tests')->select('pregunta_once')->where('pregunta_once','=','si')->count();
    $onceno = DB::table('tests')->select('pregunta_once')->where('pregunta_once','=','no')->count();

    $docesi = DB::table('tests')->select('pregunta_doce')->where('pregunta_doce','=','si')->count();
    $doceno = DB::table('tests')->select('pregunta_doce')->where('pregunta_doce','=','no')->count();

    $trecesi = DB::table('tests')->select('pregunta_trece')->where('pregunta_trece','=','si')->count();
    $treceno = DB::table('tests')->select('pregunta_trece')->where('pregunta_trece','=','no')->count();

    $catorcesi = DB::table('tests')->select('pregunta_catorce')->where('pregunta_catorce','=','si')->count();
    $catorceno = DB::table('tests')->select('pregunta_catorce')->where('pregunta_catorce','=','no')->count();

    $quincesi = DB::table('tests')->select('pregunta_quince')->where('pregunta_quince','=','si')->count();
    $quinceno = DB::table('tests')->select('pregunta_quince')->where('pregunta_quince','=','no')->count();

    $diecisiesi = DB::table('tests')->select('pregunta_dieciseis')->where('pregunta_dieciseis','=','si')->count();
    $diecisiesno = DB::table('tests')->select('pregunta_dieciseis')->where('pregunta_dieciseis','=','no')->count();

    $dicicietesi = DB::table('tests')->select('pregunta_diecisiete')->where('pregunta_diecisiete','=','si')->count();
    $dicicieteno = DB::table('tests')->select('pregunta_diecisiete')->where('pregunta_diecisiete','=','no')->count();

    $dieciochosi = DB::table('tests')->select('pregunta_dieciocho')->where('pregunta_dieciocho','=','si')->count();
    $dieciochono = DB::table('tests')->select('pregunta_dieciocho')->where('pregunta_dieciocho','=','no')->count();

    $diecinuevesi = DB::table('tests')->select('pregunta_diecinueve')->where('pregunta_diecinueve','=','si')->count();
    $diecinueveno = DB::table('tests')->select('pregunta_diecinueve')->where('pregunta_diecinueve','=','no')->count();

    $veintesi = DB::table('tests')->select('pregunta_veinte')->where('pregunta_veinte','=','si')->count();
    $veinteno = DB::table('tests')->select('pregunta_veinte')->where('pregunta_veinte','=','no')->count();

    $veintiunosi = DB::table('tests')->select('pregunta_veintiuno')->where('pregunta_veintiuno','=','si')->count();
    $veintiunono = DB::table('tests')->select('pregunta_veintiuno')->where('pregunta_veintiuno','=','no')->count();

    $veintidosi = DB::table('tests')->select('pregunta_veintidos')->where('pregunta_veintidos','=','si')->count();
    $veintidosno = DB::table('tests')->select('pregunta_veintidos')->where('pregunta_veintidos','=','no')->count();

    $veintitressi = DB::table('tests')->select('pregunta_veintitres')->where('pregunta_veintitres','=','si')->count();
    $veintitresno = DB::table('tests')->select('pregunta_veintitres')->where('pregunta_veintitres','=','no')->count();

    $veinticuatrosi = DB::table('tests')->select('pregunta_veinticuatro')->where('pregunta_veinticuatro','=','si')->count();
    $veinticuatrono = DB::table('tests')->select('pregunta_veinticuatro')->where('pregunta_veinticuatro','=','no')->count();

    $veinticincosi = DB::table('tests')->select('pregunta_veinticinco')->where('pregunta_veinticinco','=','si')->count();
    $veinticincono = DB::table('tests')->select('pregunta_veinticinco')->where('pregunta_veinticinco','=','no')->count();

    $veintiseisi = DB::table('tests')->select('pregunta_veintiseis')->where('pregunta_veintiseis','=','si')->count();
    $veintiseisno = DB::table('tests')->select('pregunta_veintiseis')->where('pregunta_veintiseis','=','no')->count();

    $veintisietesi = DB::table('tests')->select('pregunta_veintisiete')->where('pregunta_veintisiete','=','si')->count();
    $veintisieteno = DB::table('tests')->select('pregunta_veintisiete')->where('pregunta_veintisiete','=','no')->count();

    $veinteochosi = DB::table('tests')->select('pregunta_veintiocho')->where('pregunta_veintiocho','=','si')->count();
    $veinteochono = DB::table('tests')->select('pregunta_veintiocho')->where('pregunta_veintiocho','=','no')->count();

    $veintinuevesi = DB::table('tests')->select('pregunta_veintinueve')->where('pregunta_veintinueve','=','si')->count();
    $veintinueveno = DB::table('tests')->select('pregunta_veintinueve')->where('pregunta_veintinueve','=','no')->count();

    $treintasi = DB::table('tests')->select('pregunta_treinta')->where('pregunta_treinta','=','si')->count();
    $treintano = DB::table('tests')->select('pregunta_treinta')->where('pregunta_treinta','=','no')->count();

    $treintaunosi = DB::table('tests')->select('pregunta_treinta_y_uno')->where('pregunta_treinta_y_uno','=','si')->count();
    $treintaunono = DB::table('tests')->select('pregunta_treinta_y_uno')->where('pregunta_treinta_y_uno','=','no')->count();

    $treintadosi = DB::table('tests')->select('pregunta_treinta_y_dos')->where('pregunta_treinta_y_dos','=','si')->count();
    $treintadosno = DB::table('tests')->select('pregunta_treinta_y_dos')->where('pregunta_treinta_y_dos','=','no')->count();

    $treintatresi = DB::table('tests')->select('pregunta_treinta_y_tres')->where('pregunta_treinta_y_tres','=','si')->count();
    $treintatresno = DB::table('tests')->select('pregunta_treinta_y_tres')->where('pregunta_treinta_y_tres','=','no')->count();

    $treintacuatrosi = DB::table('tests')->select('pregunta_treinta_y_cuatro')->where('pregunta_treinta_y_cuatro','=','si')->count();
    $treintacuatrono = DB::table('tests')->select('pregunta_treinta_y_cuatro')->where('pregunta_treinta_y_cuatro','=','no')->count();

    $treintacincosi = DB::table('tests')->select('pregunta_treinta_y_cinco')->where('pregunta_treinta_y_cinco','=','si')->count();
    $treintacincono = DB::table('tests')->select('pregunta_treinta_y_cinco')->where('pregunta_treinta_y_cinco','=','no')->count();

    $treintaseisi = DB::table('tests')->select('pregunta_treinta_y_seis')->where('pregunta_treinta_y_seis','=','si')->count();
    $treintaseisno = DB::table('tests')->select('pregunta_treinta_y_seis')->where('pregunta_treinta_y_seis','=','no')->count();

    $treintasietesi = DB::table('tests')->select('pregunta_treinta_y_siete')->where('pregunta_treinta_y_siete','=','si')->count();
    $treintasieteno = DB::table('tests')->select('pregunta_treinta_y_siete')->where('pregunta_treinta_y_siete','=','no')->count();

    $treintaochosi = DB::table('tests')->select('pregunta_treinta_y_ocho')->where('pregunta_treinta_y_ocho','=','si')->count();
    $treintaochono = DB::table('tests')->select('pregunta_treinta_y_ocho')->where('pregunta_treinta_y_ocho','=','no')->count();

    $treintanuevesi = DB::table('tests')->select('pregunta_uno')->where('pregunta_treinta_y_nueve','=','si')->count();
    $trenueveno = DB::table('tests')->select('pregunta_uno')->where('pregunta_treinta_y_nueve','=','no')->count();

    $cuarentasi = DB::table('tests')->select('pregunta_cuarenta')->where('pregunta_cuarenta','=','si')->count();
    $cuarentano = DB::table('tests')->select('pregunta_cuarenta')->where('pregunta_cuarenta','=','no')->count();


    return view('test.estadisticas',compact('unosi','unono', 'dossi','dosno','tressi','tresno' ,'cuatrisi' ,'cuatrono','cincosi','cincono','seissi','seisno','sietesi'
    ,'sienteno','ochosi','ochono','nuevesi','nueveno','diezsi' ,'diezno','oncesi','onceno','docesi','doceno' ,'trecesi','treceno','catorcesi','catorceno','quincesi','quinceno'
    ,'diecisiesi','diecisiesno','dicicietesi','dicicieteno','dieciochosi','dieciochono','diecinuevesi', 'diecinueveno','veintesi' ,'veinteno', 'veintiunosi','veintiunono','veintidosi', 'veintidosno','veintitressi',
    'veintitresno','veinticuatrosi','veinticuatrono','veinticincosi','veinticincono', 'veintiseisi', 'veintiseisno','veintisietesi','veintisieteno', 'veinteochosi','veinteochono'
    ,'veintinuevesi','veintinueveno','treintasi','treintano','treintaunosi' ,'treintaunono','treintadosi' ,'treintadosno','treintatresi','treintatresno','treintacuatrosi'
    ,'treintacincosi','treintacincono','treintaseisi','treintaseisno','treintasietesi','treintasieteno','treintaochosi','treintaochono','treintanuevesi','trenueveno','cuarentasi','cuarentano'));
}
}
