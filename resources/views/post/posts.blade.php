@extends('layout1')

@section('content')

				<div class="col-xs-12 col-sm-6 col-md-6"><!-- Secion de noticias -->

					@forelse ($solicitudes as $solicitud)
					@if($solicitud->estado == 0)
					<div class="well"><!-- noticia Nunero 1 -->

						<ul class="media-list">
							<li class="li media">
								@if($solicitud->tipoSolicitud == 'Vender')
								<div class="media-left">
									<div class="letra">
										<p class="text-big text-center"><b>P</b></h1>
									</div>
								</div>
								@else
								<div class="media-left">
									<div class="letra">
										<p class="text-big text-center"><b>G</b></h1>
									</div>
								</div>
								@endif
								<div class="media-body">

									<h4 class="media-heading">{{ $solicitud->titulo }}<small> {{ $solicitud->created_at }}</small></h4>
									<p>{{ $solicitud->descripcion }}</p>
									<p>Cantidad: {{ $solicitud->cantidad }} {{ $solicitud->unidad }}</p>
									<p><h4>Filtros: </h4> <a href="#">{{ $solicitud->tipoResiduo }}</a></p>
								</div>

								<div class="row">
									@if(Auth::user()->email != $solicitud->idEmpresa)
									<div class="col-md-6">
										<button class="btn btn-lg btn-block" type="button" name="button"><span class="glyphicon glyphicon-ok"> </span> Interesado</button>
									</div>
									<div class="col-md-6">
										<button class="btn btn-lg btn-block" type="button" data-toggle="collapse" data-target="#{{ $solicitud->id }}" aria-expanded="false" aria-controls="{{ $solicitud->id }}"><span class="glyphicon glyphicon-usd"> </span> Ofertar</button>
									</div>
										@else
										<div class="col-md-6">
											<button class="btn btn-lg btn-block" type="button" name="button"><span class="glyphicon glyphicon-wrench"> </span>Actualizar</button>
										</div>
										<div class="col-md-6">
											<button class="btn btn-lg btn-block" type="button" data-toggle="collapse" data-target="#{{ $solicitud->id }}" aria-expanded="false" aria-controls="{{ $solicitud->id }}"><span class="glyphicon glyphicon-trash"> </span> Borrar</button>
										</div>
										@endif
								</div>
								@if($solicitud->tipoSolicitud == 'Vender')
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="collapse" id="{{ $solicitud->id }}">
												@include('partials/errors')
												<form role="form" method="POST" action="{{ route('propuesta') }}">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<div class="form-group has-feedback">
														<label class="control-label"></label>
														<div class="input-group">
															<span class="input-group-addon">$</span>
															<input name="valor" type="text" class="form-control" placeholder="Oferta Monetaria.">
														</div>
													</div>
													<label class="control-label">Descripcion de la Oferta</label>
													<br>
													<div class="input-group">
														<span class="input-group-addon"> </span>
														<textarea type="text" class="form-control" name="descripcion" cols="40" rows="5" placeholder="Depcripcion."></textarea>
													</div>
													<input type="hidden" class="form-control" name="idSolicitud" value="{{ $solicitud->id }}">
													<input type="hidden" class="form-control" name="tipoRespuesta" value="{{ $solicitud->tipoSolicitud }}">
													<br>
													<button type="submit" class="btn btn-default">Proponer</button>
												</form>

											</div>

										</div>
									</div>

								</div>
								@else
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="collapse" id="{{ $solicitud->id }}">
												@include('partials/errors')
												<form role="form" method="POST" action="{{ route('propuesta') }}">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<div class="form-group has-feedback">
														<label class="control-label"></label>
														<div class="input-group">
															<span class="input-group-addon">$</span>
															<input name="valor" type="text" class="form-control" placeholder="Oferta Monetaria.">
														</div>
													</div>
													<label class="control-label">Tipo Tratamiento</label>
													<br>
													<div class="input-group">
														<span class="input-group-addon"> </span>
														<input type="text" class="form-control" name="descripcion"  placeholder="Tipo tratamiento"></input>
													</div>
													<input type="hidden" class="form-control" name="idSolicitud" value="{{ $solicitud->id }}">
													<input type="hidden" class="form-control" name="tipoRespuesta" value="{{ $solicitud->tipoSolicitud }}">
													<br>
													<button type="submit" class="btn btn-default">Postular</button>
												</form>

											</div>

										</div>
									</div>

								</div>
				@endif
							</li>
						</ul>

					</div>
					@endif
					@empty
							<p>No hay nada por ahora...</p>
					@endforelse

					</div>


@endsection
