@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar Cargo</h3>
            <?php $form_mode = "edit" ?>
            @include('cargos._form')
        </div>
    </div>
@endsection
