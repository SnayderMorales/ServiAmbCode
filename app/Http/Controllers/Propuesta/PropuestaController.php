<?php

namespace App\Http\Controllers\Propuesta;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Respuesta;
use App\Negocio;
use Validator;
use DB;
use Carbon\Carbon;

class PropuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('propuesta/mipropuesta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $this ->validate($request, [
            'descripcion' => 'required|max:2000',
            'valor' => 'required|max:40',
        ]);
        $user = \Auth::user();
        $post = new Respuesta;
        $post -> descripcion = $request->descripcion;
        $post -> idEmpresa = $user->email;
        $post -> valor = $request->valor;
        $post -> idSolicitud = $request->idSolicitud;
        $post -> tipoRespuesta = $request->tipoRespuesta;
        $post ->save();
        $negocio = new Negocio;
        $negocio -> idSolicitud = $request->idSolicitud;
        $negocio -> idRespuesta = $post->id;
        $negocio -> estado = 1;
        $negocio ->save();
        return 	redirect('notices')->with('success', 'Ninguno');


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
    public function showPropuesta($id)
    {


      $respuestas = \DB::table('respuestas')
      ->select('*')
      ->where('idSolicitud',$id)
      ->orderBy('id','desc')->get();
      
      return view('propuesta/subasta',['respuestas'=>$respuestas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $solicitudes = \DB::table('solicitudes')
      ->select('*')
      ->orderBy('id','desc')->get();

      return view('propuesta/respuesta',['solicitudes'=>$solicitudes]);
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
