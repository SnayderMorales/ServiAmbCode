@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Mi Propuesta</div>
				<div class="panel-body">
          @include('partials/errors')

          <form class="form-horizontal" role="form" method="POST" action="{{ route('propuesta') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label class="col-md-4 control-label">Descripcion</label>
                <div class="col-md-6">
                <textarea type="text" class="form-control" name="descripcion" cols="40" rows="5"></textarea>
                </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label">Valor en Peso</label>
                  <div class="col-md-6">
                  <input type="text" class="form-control" name="valor" cols="5" rows="5">
                  </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                        Proponer
                      </button>
                    </div>
                  </div>



          </form>
@endsection
