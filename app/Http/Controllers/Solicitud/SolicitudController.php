<?php

namespace App\Http\Controllers\Solicitud;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Solicitud;
use Validator;
use DB;
use Carbon\Carbon;


class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $residuos = \ DB::table('residuos')->get();

      return view('post/post',['residuos'=>$residuos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
      $this ->validate($request, [
            'titulo' => 'required|max:40',
            'descripcion' => 'required|max:1000',
            'tipoResiduo' => 'required',
            'cantidad' => 'required|max:40',
            'unidad' => 'required',
            'tipoSolicitud' => 'required',

        ]);
        $user = \Auth::user();
        $post = new Solicitud;
        $post -> titulo = $request->titulo;
        $post -> descripcion = $request->descripcion;
        $post -> tipoResiduo = $request->tipoResiduo;
        $post -> cantidad = $request->cantidad;
        $post -> unidad = $request->unidad;
        $post -> tipoSolicitud = $request->tipoSolicitud;
        $post -> idEmpresa = $user->email;
        $post -> estado = 0;
        $post ->save();
        return 	redirect('notices')->with('success', 'Ninguno');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
      $user = \Auth::user();
      $empresa =  \DB::table('empresas')
      ->select('*')
      ->where('idEmpresa',$user->email)->first();
      $solicitudes = \DB::table('solicitudes')
      ->select('*')
      ->where('idEmpresa',$user->email)
      ->orWhere('tipoResiduo',$empresa->idEmpresaResiduo)
      ->orderBy('id','desc')->get();

      return view('post\posts',['solicitudes'=>$solicitudes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
