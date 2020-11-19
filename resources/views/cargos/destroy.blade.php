@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			{{Session::pull('message')}}
			<h3>Deletar Cargo</h3>
			<?php $form_mode = "delete" ?>
			@include('cargos._form')
		</div>
	</div>
@endsection