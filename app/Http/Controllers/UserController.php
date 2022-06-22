<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reporteusers;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view ('users.edit');
    }
    public function report()
    {
      $datos['users'] = User::all();
      $consulta['users'] = User::withTrashed()->join('rols', 'users.id_rol','=','rols.id_rol')
      ->select(
        'users.img_usu',
        'users.id_usu',
        'users.name_usu',
        'users.lastname_usu',
        'users.date_usu',
        'users.sexo_usu',
        'users.phone_usu',
        'users.email',
        'rols.name_rol',
        'users.deleted_at')->get();
     return view('users.report')->with($datos)->with($consulta);
    }
    public function reportdeta()
    {
      $datos['detalle'] = Reporteusers::all();
      $consulta['detalle'] = Reporteusers::withTrashed()->join('users', 'reporteusers.id_usu','=','users.id_usu')
      ->select(
        'users.name_usu',
        'users.lastname_usu',
        'reporteusers.name_report',
        'reporteusers.descripcion_report',
        'reporteusers.period_report',
        'reporteusers.generos_report',
        'reporteusers.registros_report',
        'reporteusers.date_report',
        'reporteusers.deleted_at')->get();
     return view('users.reportdet')->with($datos)->with($consulta);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return User::create([
            'name_usu' => $data['name_usu'],
            'lastname_usu' => $data['lastname_usu'],
            'date_usu' => $data['date_usu'],
            'sexo_usu' => $data['sexo_usu'],
            'phone_usu' => $data['phone_usu'],
            'email' => $data['email'],
            'terms_usu' => $data['terms_usu'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function altarep(Request $request)
    {
         $report = $request->all();
         Reporteusers::create($report);

         //falta corregir redireccionamiento a vista
         // return view('users.reportdet');
         return back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_usu)
    {
        $user = User::findOrFail($id_usu);
        return view('users.edit',compact('user'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_usu)
    {
        $request->validate([
            'img_usu' => ['image','mimes:jpeg,png,svg','max:1024'],
            'name_usu' => ['required'],
            'lastname_usu' => ['required'],
            'date_usu' => ['required'],
            'sexo_usu' => ['required'],
            'phone_usu' => ['required'],
            'email' => ['required'],

        ]);

        $user = User::find($id_usu);

        if($imagen = $request->file('img_usu')){
            $rutaGuardarImg = 'imagen/';
            $imagenUsuario = date('YmdHis') . "." . $imagen->
            getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenUsuario);
            $user['img_usu'] = "$imagenUsuario";
        }else{
            unset($user['img_usu']);
        }

        $user->name_usu = $request->name_usu;
        $user->lastname_usu = $request->lastname_usu;
        $user->date_usu = $request->date_usu;
        $user->sexo_usu = $request->sexo_usu;
        $user->phone_usu = $request->phone_usu;
        $user->email = $request->email;
        $user->id_rol = $request->id_rol;
        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function passedit($id_usu)
    {
        $user = User::findOrFail($id_usu);
        return view('users.password-reset',compact('user'));



    }

    public function pasreset(Request $request,$id_usu)
    {
        $request->validate([
            'password' => ['password'],
        ]);

        $user = User::find($id_usu);
        $user->password = $request->password;
        $user->save();

        return back();
    }


}
