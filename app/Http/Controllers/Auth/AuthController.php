<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Empresa;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use  Illuminate\Http\Request;
use Input;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }


    public function register()
    {
      $residuos = \ DB::table('residuos')->get();

      return View('auth\register',['residuos'=>$residuos]);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:60',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:7',
            'residuo' => 'required',
            'nit' => 'required|max:60|unique:empresas',
            'razonSocial' => 'required|max:60',
            'direccion' => 'required|max:60',
            'telefono' => 'required|max:15',
            'file' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {

      if(isset($data['comprador'])){
        $comprador = $data['comprador'];
      }else{
        $comprador = 0;
      }
      if(isset($data['vendedor'])){
        $vendedor = $data['vendedor'];
      }else{
        $vendedor = 0;
      }
      if(isset($data['gestor'])){
        $gestor = $data['gestor'];
      }else{
        $gestor = 0;
      }
      //$request =  Request::all();
      $file = $data['file'];
      $nombre = $file->getClientOriginalName();
      $hash = hash_file('md5', $file);
      \Storage::disk('local')->put("/camara/".$nombre,  \File::get($file));

      Empresa::create([
        'idEmpresa'=>$data['email'],
        'nombre' => $data['name'],
        'nit' => $data['nit'],
        'comprador' => $comprador,
        'vendedor' => $vendedor,
        'gestor' => $gestor,
        'razonSocial' => $data['razonSocial'],
        'idEmpresaResiduo' => $data['residuo'],
        'telefono' => $data['telefono'],
        'direccion' => $data['direccion'],
        'camara' => $nombre,
        'hash' => $hash,
        ]);
      return User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
      ]);

    }


    public function loginPath()
    {
        return route('login');
    }


    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route('notices');
    }
}
