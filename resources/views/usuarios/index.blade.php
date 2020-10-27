@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>Listagem de Usuários</h3>
		</div>
		<div class="col-md-8">
			<a href="" class="btn btn-primary">Incluir Usuário</a>
		</div>
	</div>
    <div class="row">
    	<table class="table table-striped">
    		<thead>
    			<tr>
    				<th>Id</th>
    				<th>Matrícula</th>
    				<th>Nome</th>
					<th>Nome de Guerra</th>
    				<th>Ações</th>
    			</tr>
    		</thead>
    		<tbody>
    		@foreach($usuarios as $usuario )
    			<tr>
    				<td>{{ $usuario->n }}</td>
    				<td>{{ $usuario->mat_serv }}</td>
    				<td>{{ $usuario->nom_serv }}</td>
					<td>{{ $usuario->nome_gue }}</td>
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
