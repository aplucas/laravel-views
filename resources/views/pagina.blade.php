<!DOCTYPE html>
<html>
	<head>
		<title></title>
		{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> --}}
		<link rel="stylesheet" type="text/css" href="{{ URL::to('css/app.css') }}">
	</head>
	<body>
		<div class="container">
			{{--
			@component('components.meucomponente', ['titulo'=>'Erro Fatal','tipo'=>'danger'] )
			@slot('titulo')
			Erro Fatal!
			@endslot
			@slot('tipo')
			danger
			@endslot
			<strong>Erro: </strong> Mensagem de erro.
			@endcomponent
			@component('components.meucomponente', ['titulo'=>'Atenção','tipo'=>'warning'] )
			<strong>Atenção: </strong> Mensagem de atenção.
			@endcomponent
			--}}

			@alerta(['titulo'=>'Atenção','tipo'=>'primary'] )
			<strong>Atenção: </strong> Mensagem de atenção.
			@endalerta
			@alerta(['titulo'=>'Atenção','tipo'=>'secondary'] )
			<strong>Atenção: </strong> Mensagem de atenção.
			@endalerta
			@alerta(['titulo'=>'Atenção','tipo'=>'success'] )
			<strong>Atenção: </strong> Mensagem de atenção.
			@endalerta
			@alerta(['titulo'=>'Atenção','tipo'=>'danger'] )
			<strong>Atenção: </strong> Mensagem de atenção.
			@endalerta
			@alerta(['titulo'=>'Atenção','tipo'=>'warning'] )
			<strong>Atenção: </strong> Mensagem de atenção.
			@endalerta
			@alerta(['titulo'=>'Atenção','tipo'=>'info'] )
			<strong>Atenção: </strong> Mensagem de atenção.
			@endalerta
			@alerta(['titulo'=>'Atenção','tipo'=>'light'] )
			<strong>Atenção: </strong> Mensagem de atenção.
			@endalerta
			@alerta(['titulo'=>'Atenção','tipo'=>'dark'] )
			<strong>Atenção: </strong> Mensagem de atenção.
			@endalerta

		</div>
		{{-- script --}}
		{{-- <script src="{{ asset('js/app.js') }}" type="text/javascript" ></script> --}}
		<script src="{{ URL::to('js/app.js') }}" type="text/javascript" ></script>
	</body>
</html>