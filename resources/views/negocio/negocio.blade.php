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
        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><!-- EL progreso se coloca en la style="width:EL AVANCE;" -->
        </div>
      </div>

      <br>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="paso1">
          @if($respuestas->estado  == 1)
          <h3 class="text-center">Esperando Respuesta para contactar.</h3>
          <p class="text-justify">Propuesta: {{ $respuestas->descripcion }} Con VAlor:{{ $respuestas->valor }} </p>
          @else
          <h3 class="text-center">Su cliente ha aceptado su propuesta, gracias por usar nuestros servicios.</h3>
          @endif
        </div>

        <div role="tabpanel" class="tab-pane" id="paso2">
          @if($respuestas->estado  == 2)
          <h3 class="text-center"><a href="r/perfil/{{  $respuestas->id  }}" >Informacion del contacto.</a></h3>
          <p class="text-justify">Informacion basica de su cliente.</p>
          @else
            Debe esperar la confirmacion de su cliente.
          @endif</div>

        <div role="tabpanel" class="tab-pane" id="paso3">
          <h3 class="text-center">Negociaciones directas careo</h3>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

      </div>

    </div>






  </div>

</div>


@endsection
