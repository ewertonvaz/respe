@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>Listagem de Visitantes</h3>
		</div>
		<div class="col-md-8">
			<a href="" class="btn btn-primary">Incluir Visitante</a>
		</div>
	</div>
    <div class="row">
    	<table class="table table-striped">
    		<thead>
    			<tr>
    				<th>id</th>
    				<th>Nome</th>
					<th>R.G.</th>
    				<th>C.P.F</th>
    				<th>Endereço</th>
    				<th>Ações</th>
    			</tr>
    		</thead>
    		<tbody>
    		@foreach($visitantes as $visitante )
    			<tr>
    				<td>{{ $visitante->n }}</td>
    				<td>{{ $visitante->nome}}</td>
    				<td>{{ $visitante->rg}}</td>
    				<td>{{ $visitante->cpf}}</td>
    				<td>{{ $visitante->endereco}}</td>
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
		{{$visitantes->links()}}
    </div>
</div>
@endsection
