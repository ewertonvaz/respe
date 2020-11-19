@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>Listagem de Setores</h3>
		</div>
		<div class="col-md-8">
			<a href="" class="btn btn-primary">Incluir Setor</a>
		</div>
	</div>
    <div class="row">
    	<table class="table table-striped">
    		<thead>
    			<tr>
    				<th>Sigla setor</th>
					<th>Nível 1</th>
    				<th>Nível 2</th>
    				<th>Nível 3</th>
    				<th>Ações</th>
    			</tr>
    		</thead>
    		<tbody>
    		@foreach($setores as $setor )
    			<tr>
    				<td>{{ $setor->sigla_setor }}</td>
					<td>{{ $setor->nivel_um}}</td>
    				<td>{{ $setor->nivel_dois}}</td>
    				<td>{{ $setor->nivel_tres}}</td>
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
		{{$setores->links()}}
    </div>
</div>
@endsection
