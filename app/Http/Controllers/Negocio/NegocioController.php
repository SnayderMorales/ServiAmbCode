<?php

namespace App\Http\Controllers\Negocio;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Respuesta;
use App\Negocio;
use App\Solicitud;
use Validator;
use DB;

class NegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = \Auth::user();
      $empresa =  \DB::table('empresas')
      ->select('*')
      ->where('idEmpresa',$user->email)->first();
      $solicitudes = \DB::table('solicitudes')
      ->select('*')
      ->where('idEmpresa',$user->email)
      ->where('estado','>','0')
      ->orderBy('id','desc')->get();
      return view('negocio/misnegocios',['solicitudes'=>$solicitudes]);

    }
    public function indexN($id)
    {

      $fase = \DB::table('negocios')
      ->select('*')
      ->where('idSolicitud',$id)
      ->first();

      $respuestas = \DB::table('respuestas')
      ->select('*')
      ->where('id',$fase->idRespuesta)
      ->first();


      return view('negocio/negocio',['respuestas'=>$respuestas]);
    }

    public function indexSello()
    {
      return \View::make('auth/sello');
    }



    public function indexP($id)
    {
      $fase = \DB::table('negocios')
      ->select('*')
      ->where('idRespuesta',$id)
      ->first();

      /*if($fase == null){
        for($i = 1; $fase != null;$i++){
          $fase = \DB::table('negocios')
          ->select('*')
          ->where('idRespuesta',$id)
          ->where('estado',$i)
          ->first();

        }
        return dd($fase);
        $solicitudes = \DB::table('solicitudes')
        ->select('*')
        ->where('id',$fase->idSolicitud)
        ->first();
      }else{
              $solicitudes = \DB::table('solicitudes')
              ->select('*')
              ->where('id',$fase->idSolicitud)
              ->first();
            }*/
            $solicitudes = \DB::table('solicitudes')
            ->select('*')
            ->where('id',$fase->idSolicitud)
            ->first();


      //return dd($solicitudes);



      return view('negocio/procesos',['solicitudes'=>$solicitudes]);

    }


    public function indexPr()
    {
      $user = \Auth::user();
      $empresa =  \DB::table('empresas')
      ->select('*')
      ->where('idEmpresa',$user->email)->first();
      $respuestas = \DB::table('respuestas')
      ->select('*')
      ->where('idEmpresa',$user->email)
      ->where('estado','>','0')
      ->orderBy('id','desc')->get();

      return view('negocio/misprocesos',['respuestas'=>$respuestas]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('negocios')
        ->select('[negocios.estado]')
        ->where('idRespuesta',$request->aceptar)
        ->update(['estado' => 2]);

        DB::table('respuestas')
        ->select('[respuestas.estado]')
        ->where('id',$request->aceptar)
        ->update(['estado' => 1]);

        $solicitud = DB::table('negocios')
        ->select('*')
        ->where('idRespuesta',$request->aceptar)
        ->first();

        DB::table('solicitudes')
        ->select('[solicitudes.estado]')
        ->where('id',$solicitud->idSolicitud)
        ->update(['estado' => 1]);


        return redirect('subasta')->with('success', 'Ninguno');
    }


    public function fasei(Request $request)
    {
      $this ->validate($request, [
            'aceptar' => 'required',
        ]);
      DB::table('negocios')
      ->select('[negocios.estado]')
      ->where('idSolicitud',$request->aceptar)
      ->where('estado','2')
      ->update(['estado' => 3]);

      DB::table('solicitudes')
      ->select('[solicitudes.estado]')
      ->where('id',$request->aceptar)
      ->update(['estado' => 2]);//error aqui para actualizar el estado de la respuesta.

      $solicitud = DB::table('negocios')
      ->select('*')
      ->where('idSolicitud',$request->aceptar)
      ->where('estado','3')
      ->first();

      DB::table('respuestas')
      ->select('[respuestas.estado]')
      ->where('id',$solicitud->idRespuesta)
      ->update(['estado' => 2]);

      return redirect('procesos')->with('success', 'Ninguno');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perfil($id)
    {

      $idEmpresa = DB::table('solicitudes')
      ->select('*')
      ->where('id',$id)
      ->first();

      $empresas = DB::table('empresas')
      ->select('*')
      ->where('idEmpresa',$idEmpresa->idEmpresa)
      ->first();

      return view('negocio/perfil',['empresas'=>$empresas]);
    }


    public function perfilr($id)
    {

      $idEmpresa = DB::table('respuestas')
      ->select('*')
      ->where('id',$id)
      ->first();

      $empresas = DB::table('empresas')
      ->select('*')
      ->where('idEmpresa',$idEmpresa->idEmpresa)
      ->first();

      return view('negocio/perfil1',['empresas'=>$empresas]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirmar(Request $request)
    {
      $this ->validate($request, [
            'file' => 'required'
        ]);
      $user = \Auth::user();
      $consulta = \DB::table('empresas')
      ->select(['empresas.camara','empresas.hash'])
      ->where('idEmpresa',$user->email)->first();

      $file = $request->file('file');
      $nombre = $file->getClientOriginalName();
      $hash = hash_file('md5', $file);
      \Storage::disk('local')->put("/camara/".$nombre,  \File::get($file));
      $consulta = \DB::table('empresas')
      ->select(['empresas.camara','empresas.hash'])
      ->where('idEmpresa',$user->email)
      ->update(['camara' => $nombre,
                'hash' => $hash]);
                return redirect('notices')->with('success', 'Ninguno');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
