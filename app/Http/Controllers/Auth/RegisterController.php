<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_usu' => ['required', 'string', 'min:3', 'max:30'],
            'lastname_usu' => ['required', 'string', 'min:4', 'max:50'],
            'date_usu' => ['required', 'date_format:Y-m-d'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_usu' => ['required', 'numeric'],
            'sexo_usu' => ['required'],
            'terms_usu' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name_usu' => $data['name_usu'],
            'lastname_usu' => $data['lastname_usu'],
            'date_usu' => $data['date_usu'],
            'slug' => $data['slug'],
            'sexo_usu' => $data['sexo_usu'],
            'phone_usu' => $data['phone_usu'],
            'email' => $data['email'],
            'terms_usu' => $data['terms_usu'], 
            'id_rol' => $data['id_rol'],          
            'password' => Hash::make($data['password']),
        ]);
    }
}
