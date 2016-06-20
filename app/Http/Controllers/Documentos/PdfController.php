<?php

namespace App\Http\Controllers\Documentos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Respuesta;
use App\Negocio;
use Validator;
use DB;
use Carbon\Carbon;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = \Auth::user();
      $respuestas = \DB::table('solicitudes')
      ->select('*')
      ->where('tipoSolicitud','Gestionar')
      ->where('estado',2)
      ->where('idEmpresa',$user->email)
      ->get();

      return view('documento/documentos',['respuestas'=>$respuestas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $respuestas = \DB::table('respuestas')
      ->select('*')
      ->where('idSolicitud',$id)
      ->first();
      $empresa = \DB::table('empresas')
      ->select('*')
      ->where('idEmpresa',$respuestas->idEmpresa)
      ->first();
      $solicitud = \DB::table('solicitudes')
      ->select('*')
      ->where('id',$respuestas->idSolicitud)
      ->first();
      $view =  \View::make('documento.invoice', compact('respuestas','empresa','solicitud'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('invoice');
    }

    public function getData()
   {
    /* $respuestas = \DB::table('respuestas')
     ->select('*')
     ->where('tipoRespuesta',$id)
     ->first();

       return $respuestas;*/
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
