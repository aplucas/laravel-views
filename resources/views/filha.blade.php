@extends('layout.app')

@section('titulo', 'Filha')

@section('barralateral')
	<p>Esta parte da sessão é do template FILHO</p>
	@parent
@endsection

@section('conteudo')
	<p>Este é o conteúdo do filho.</p>
@endsection
