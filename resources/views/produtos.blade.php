<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{ URL::to('css/app.css') }}">
	</head>
	<body>
		<div class="container">
			@if (isset($produtos))
				@if (count($produtos) == 0)
					<h1>Nenhum produto</h1>
				@elseif (count($produtos) === 1)
					<h1>Um produto</h1>
				@else
					<h1>Temos vários produtos</h1>
				@endif
			@else
				<h2>Variável produtos não foi passada como parâmetro.</h2>
			@endif

			@empty($produtos)
			    Sem produtos
			@endempty
		</div>
		{{-- script --}}
		<script src="{{ URL::to('js/app.js') }}" type="text/javascript" ></script>
	</body>
</html>