@extends('layout.meulayout')

@if (isset($produtos))
	@section('minha_secao_produtos')
		<p>Loop foreach - Array associativo </p>
		@foreach ($produtos as $p)
<?php
if ($loop->first) {
	$titulo = "Produto (primeiro)";
} elseif ($loop->last) {
	$titulo = "Produto (último)";
} else {
	$titulo = "Produto";
}
?>
			@alerta(['titulo'=>"$titulo",'tipo'=>'primary'] )
				<strong>Índice: </strong>
				<span class='badge badge-secondary'>
					{{ $loop->index }}
				</span><br>
				<strong>Interação: </strong>
				<span class='badge badge-secondary'>
					{{ $loop->iteration }}
				</span><br>
				<strong>Quanto falta: </strong>
				<span class='badge badge-secondary'>
					{{ $loop->remaining }}
				</span><br>
				<strong>Total: </strong>
				<span class='badge badge-secondary'>
					{{ $loop->count }}
				</span><br>
				<strong>Id: </strong> {{ $p['id'] }}<br>
				<strong>Nome: </strong> {{ $p['nome'] }}
			@endalerta

		@endforeach
	@stop
@endif
<hr>