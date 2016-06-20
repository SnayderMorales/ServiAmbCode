@extends('layout1')

@section('content')

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Nueva Solicitud</div>
				<div class="panel-body">
          @include('partials/errors')

          <form class="form-horizontal" role="form" method="POST" action="{{ route('newpost') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label class="col-md-3 control-label">Titulo</label>
              <div class="col-md-8">
                <input name="titulo" type="text" class="form-control">
              </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Descripcion</label>
                <div class="col-md-8">
                <textarea type="text" class="form-control" name="descripcion" cols="40" rows="5"></textarea>
                </div>
                </div>

								<div class="form-group">
									<label class="col-md-3 control-label">Residuo</label>
									<div class="col-md-8">
										<select name="tipoResiduo" class="form-control">
											<option value="" selected="selected">- selecciona -</option>
											@forelse ($residuos as $residuo)
											<option value="{{ $residuo->nombre }}">{{ $residuo->nombre }}</option>
											@empty
													<p>No hay nada por ahora...</p>
											@endforelse
										</select>
									</div>
									</div>


									<div class="form-group">
		                <label class="col-md-3 control-label">Cantidad</label>
		                <div class="col-md-8">
		                <input type="text" class="form-control" name="cantidad" cols="5" rows="5">
		                </div>
		                </div>

										<div class="form-group">
		                  <label class="col-md-3 control-label">Unidad</label>
		                  <div class="col-md-8">
		                    <select name="unidad" class="form-control">
		                      <option value="" selected="selected">- selecciona -</option>
		                      <option value="kg">Kg</option>
		                      <option value="tn">Tn</option>
		                    </select>
		                  </div>
		                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Tipo de Solicitud</label>
                    <div class="col-md-8">
                      <select name="tipoSolicitud" class="form-control">
                        <option value="" selected="selected">- selecciona -</option>
                        <option value="Vender">Vender</option>
                        <option value="Gestionar">Gestionar</option>
                      </select>
                    </div>
                    </div>

                    <div class="form-group">
        							<div class="col-md-8 col-md-offset-4">
        								<button type="submit" class="btn btn-primary">
        									Publicar
        								</button>
        							</div>
        						</div>

              </form>
						</div>
						</div>
					</div>
@endsection
