@extends('layout1')

@section('content')
	<div class="col-xs-12 col-sm-6 col-md-6">
		<div class="col-md-12">
			<div class="well">

				<div class="media">
					<div class="media-left">
						<div class="letra">
							<p class="text-big text-center"><b>N</b></h1>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Mis Negocios</h4>
						<p>
							@forelse ($respuestas as $respuesta)
							@if((Auth::user()->email == $respuesta->idEmpresa))
		          <div class="row">
		              <div class="col-sm-12 portfolio-item">
		                  <a href="procesos/{{ $respuesta->id }}"><h1>{{ $respuesta->descripcion }}</h1></a>
		                  <small>{{ $respuesta->created_at }}</small>
		              </div>
		          </div>
							@endif
		          @empty
		              <p>No hay nada por ahora...</p>
		          @endforelse
						</p>
					</div>
				</div>

      </div>
    </div>
  </div>

          @endsection
