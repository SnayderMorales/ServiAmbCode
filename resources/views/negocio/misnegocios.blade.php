@extends('layout1')

@section('content')
	<div class="col-xs-12 col-sm-6 col-md-6">
		<div class="col-md-12">
			<div class="well">

				<div class="media">
					<div class="media-left">
						<div class="letra">
							<p class="text-big text-center"><b>Pr</b></h1>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Mis Negocios</h4>
						<p>
							@forelse ($solicitudes as $solicitud)
							@if((Auth::user()->email == $solicitud->idEmpresa))
		          <div class="row">
		              <div class="col-sm-12 portfolio-item">
		                  <a href="negocios/{{ $solicitud->id }}"><h1>{{ $solicitud->titulo }}</h1></a>
		                  <small>{{ $solicitud->created_at }}</small>
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
