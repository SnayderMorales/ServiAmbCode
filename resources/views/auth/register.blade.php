@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">@lang('auth.register_title')</div>
				<div class="panel-body">
					@include('partials/errors')
  <form method="POST" action="{{ route('register') }}" accept-charset="UTF-8" enctype="multipart/form-data">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation" >
							</div>
						</div>

						<div class="form-group">
						<label class="col-md-4 control-label">Intereses</label>
							<div class="col-md-6">
                          <input type="checkbox" name="comprador" value="1">Comprar
                          <input type="checkbox" name="vendedor" value="1">Vender
													<input type="checkbox" name="gestor" value="1">Gestor
												</div>
												</div>

												<div class="form-group">
						              <label class="col-md-4 control-label">Interes de Residuo</label>
						              <div class="col-md-6">
						                <select name="residuo" class="form-control">
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
													<label class="col-md-4 control-label">Nit</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name="nit">
													</div>
												</div>

												<div class="form-group">
												  <label class="col-md-4 control-label">Camara de Comercio</label>
												  <div class="col-md-6">
												    <input type="file" class="form-control" name="file" >
												  </div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Direccion</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name="direccion">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Telefono</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name="telefono">
													</div>
												</div>



												<div class="form-group">
													<label class="col-md-4 control-label">Razon Social</label>
													<div class="col-md-6">
														<textarea type="text" class="form-control" name="razonSocial" cols="40" rows="5"></textarea>
													</div>
												</div>




						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									@lang('auth.register_button')
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
