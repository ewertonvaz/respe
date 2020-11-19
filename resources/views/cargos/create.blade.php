@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<h3>Novo Cargo</h3>
			@include('cargos._form')
		</div>
	</div>
@endsection