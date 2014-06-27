@extends('layout')
@section('cuerpo')

<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="text-right">
				<h1>CMS</h1>
			</div>
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Loging</h3>
					</div>
					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" />
					</div>
					<div class="text-center">
						<a href="{{route('backend')}}" class="btn btn-primary">Entrar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop