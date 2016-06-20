
@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">@lang('auth.register_title')</div>
				<div class="panel-body">
					@include('partials/errors')
          <form method="POST" action="{{ route('sello') }}" accept-charset="UTF-8" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
  <label class="col-md-4 control-label">Camara de Comercio</label>
  <div class="col-md-6">
    <input type="file" class="form-control" name="file" >
  </div>
</div>

<button type="submit" class="btn btn-primary">
  Confirmar
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
