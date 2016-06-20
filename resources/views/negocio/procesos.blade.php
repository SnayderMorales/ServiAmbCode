@extends('layout1')

@section('content')

<div class="col-xs-12 col-sm-6 col-md-6"><!-- Secion de noticias -->

  <div class="well"><!-- ES -->


    <div>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentation" class="active"><a href="#paso1" aria-controls="paso1" role="tab" data-toggle="tab">Paso # 1</a></li>
        <li role="presentation"><a href="#paso2" aria-controls="paso2" role="tab" data-toggle="tab">Paso # 2</a></li>
        <li role="presentation"><a href="#paso3" aria-controls="paso3" role="tab" data-toggle="tab">Paso # 3</a></li>
      </ul>

      <br><!-- barra de progrso  -->
      <div class="progress">
        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: {{ $solicitudes->estado }}0%"><!-- EL progreso se coloca en la style="width:EL AVANCE;" -->
        </div>
      </div>

      <br>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="paso1">

          @if($solicitudes->estado  == 1)
          <h3 class="text-center">Desea continuar entrar en contacto.</h3>
          <p class="text-justify">La solicitud acordada: <h4>{{ $solicitudes->titulo }} </h4> </p>
          <p class="text-justify"> {{ $solicitudes->descripcion }} </p>
          <p class="text-justify"> {{ $solicitudes->cantidad }} {{ $solicitudes->unidad }}. </p>
          <form role="form" method="POST" action="{{ route('fasei') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
              <label class="control-label"></label>
              <div class="input-group">
                <span class="input-group-addon">Acepto terminos y condiciones.</span>
                <input name="aceptar" type="checkbox" class="form-control" value="{{ $solicitudes->id }}">
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-default">Aceptar</button>
          </form>
          @else
          <h3 class="text-center">Gracias por dar este primer paso.</h3>
          @endif
        </div>

        <div role="tabpanel" class="tab-pane" id="paso2">
          @if($solicitudes->estado  == 2)
          <h3 class="text-center"><a href="s/perfil/{{  $solicitudes->id  }}" >Informacion del contacto.</a></h3>








          @else
            Para continuar debe aceptar el primer paso.
          @endif
        </div>

        <div role="tabpanel" class="tab-pane" id="paso3">
          <h3 class="text-center">Acuerdo cerrado</h3>
          <p class="text-justify">Gracias por usar nuestro servicio.</p>
        </div>

      </div>

    </div>






  </div>

</div>

@endsection
