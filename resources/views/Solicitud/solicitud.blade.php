@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Post</div>
				<div class="panel-body">
          @include('partials/errors')
					ffvsdgvd
          <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">



              </form>
@endsection
