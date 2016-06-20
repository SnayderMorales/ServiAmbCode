@extends('layout1')

@section('content')


<div class="col-xs-12 col-sm-6 col-md-6"><!-- Secion de noticias -->
	@forelse ($respuestas as $respuesta)

	<div class="well"><!-- noticia Nunero 1 -->

		<ul class="media-list">
			<li class="li media">
				<div class="media-left">
					<div class="letra">
						<p class="text-big text-center"><b>S</b></h1>
					</div>
				</div>

				<div class="media-body">
					@if($respuesta->tipoRespuesta == 'Vender')
					<h1>{{ $respuesta->descripcion }}</h1>
					@else
					<h1>Tratamiento: {{ $respuesta->descripcion }}</h1>
					@endif
					<p>Mi oferta es: ${{ $respuesta->valor }} pesos</p>
					<small>{{ $respuesta->created_at }}</small>
				</div>

				<div class="row">

					<div class="col-md-6">
						<button class="btn btn-lg btn-block" type="button" name="button"><span class="glyphicon glyphicon-ok"> </span> Ignorar</button>
					</div>
					<div class="col-md-6">
						<form role="form" method="POST" action="{{ route('aceptar') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" class="form-control" name="aceptar" value="{{ $respuesta->id }}">

						<button class="btn btn-lg btn-block" type="submit" data-toggle="collapse" data-target="#" aria-expanded="false" aria-controls=""><span class="glyphicon glyphicon-usd"> </span> Aceptar</button>
							</form>
					</div>
					</div>
				</div>
			</li>
		</ul>


	@empty
			<p>No hay nada por ahora...</p>
	@endforelse
	</div>

          @endsection
