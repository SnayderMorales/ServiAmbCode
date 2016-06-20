@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">@lang('auth.register_title')</div>
				<div class="panel-body">
					@include('partials/errors')

					<form class="form-horizontal" role="form" method="POST" action="{{ route('nuevoresiduo') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label class="col-md-4 control-label">Nombre</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="nombre">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Descripcion</label>
              <div class="col-md-6">
                <textarea type="text" class="form-control" name="descripcion" cols="40" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Clase</label>
              <div class="col-md-6">
                <select name="clasificacion" class="form-control">
                  <option value="" selected="selected">- selecciona -</option>
                  <option value="organico">Organico</option>
                  <option value="inorganico">Inorganico</option>
                  <option value="peligroso">Peligroso</option>
                </select>
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
