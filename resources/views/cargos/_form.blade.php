@php
    $form_mode = !isset($form_mode) ? 'default' : $form_mode;
    switch ($form_mode) {
        case "delete":
            $action=route('cargos.destroy', ['cargo' => $cargo->id]);
            $bot_label="Deletar cargo";
            break;
        case "edit":
            $action=route('cargos.update', ['cargo' => $cargo]); 
            $bot_label="Atualizar cargo";
            break;
        default:
            $action=route("cargos.store");
            $bot_label="Salvar cargo";
            break;
    }
@endphp

<form action={{$action}} method="post">
    @csrf
    @if ($form_mode == "delete")
        @method('DELETE')
    @endif
    @if ($form_mode == "edit")
        @method('PUT')
    @endif

    <div>
        <label for="tipo">Tipo Cargo</label>
        <input type="text" id="tipo_cargo" name="tipo_cargo" value="{{isset($eqp) ? $cargo->tipo_cargo : old('tipo_cargo')}}" {{$form_mode == "delete" ? "disabled" : ""}}>
        @error('tipo_cargo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="sigla_cargo">Sigla cargo</label>
        <input type="text" id="sigla_cargo" name="sigla_cargo" value="{{isset($cargo) ? $cargo->sigla_cargo : old('sigla_cargo')}}" {{$form_mode == "delete" ? "disabled" : ""}}>
        @error('sigla_cargo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    @if ($form_mode == "delete")
        <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão do equipamento?</div>
    @endif
    <div>
    	<div class="form-group">
			<input type="submit" name="save_cargo" value="{{$bot_label}}">
			<input type="submit" name="cancel" value="Cancelar">
		</div>
	</div>
</form>