<!DOCTYPE html>
<html>
	<head>
		<title></title>
		{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> --}}
		<link rel="stylesheet" type="text/css" href="{{ URL::to('css/app.css') }}">
	</head>
	<body>
		<div class="container">
			@component('components.meucomponente')
				<strong>Erro: </strong> Mensagem de erro.
			@endcomponent
		</div>
		{{-- script --}}
		{{-- <script src="{{ asset('js/app.js') }}" type="text/javascript" ></script> --}}
		<script src="{{ URL::to('js/app.js') }}" type="text/javascript" ></script>
	</body>
</html>
