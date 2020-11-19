@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>Listagem de Cargos</h3>
		</div>
		<div class="col-md-8">
			<a href="" class="btn btn-primary">Incluir Cargo</a>
		</div>
	</div>
    <div class="row">
    	<table class="table table-striped">
    		<thead>
    			<tr>
    				<th>Tipo cargo</th>
    				<th>Sigla</th>
    				<th>Ações</th>
    			</tr>
    		</thead>
    		<tbody>
    		@foreach($cargos as $cargo )
    			<tr>
    				<td>{{ $cargo->tipo_cargo }}</td>
    				<td>{{ $cargo->sigla_cargo}}</td>
    				<td>
    					<ul class="list-inline">
    						<li>
    						<a href="">Editar</a>
    						</li>
    						<li>
    						<a href="">Deletar</a>
							</li>
    					</ul>
    				</td>
    			</tr>
    		@endforeach
    		</tbody>
    	</table>
    </div>
</div>
@endsection
