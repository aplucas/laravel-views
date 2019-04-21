@extends('layout.meulayout')

@section('minha_secao_produtos')
	<p>Loop FOR: </p>

	@for ($i = 0; $i < $n; $i++)
		<a href="#" class="btn btn-primary btn-sm"
		role="button" aria-desabled="true" >Número: {{ $i }}</a>
	@endfor
@stop