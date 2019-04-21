@extends('layout.meulayout')

@if (isset($produtos))
	@section('minha_secao_produtos')
		<p>Loop foreach - Array associativo </p>

		@foreach ($produtos as $p)
			@alerta(['titulo'=>'Produto','tipo'=>'primary'] )
				<strong>Id: </strong> {{ $p['id'] }}.
				<strong>Nome: </strong> {{ $p['nome'] }}.
			@endalerta
		@endforeach


	@stop
@endif