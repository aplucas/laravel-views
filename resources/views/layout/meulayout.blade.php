<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{ URL::to('css/app.css') }}">
	</head>
	<body>
		<div class="container">
			@hasSection('minha_secao_produtos')
			<div class="card">
				<div class="card-body">
					<div class="card" style="width: 18rem;">
						<div class="card-body">
							<h5 class="card-title">Produtos</h5>
							<p class="card-text">
								@yield('minha_secao_produtos')
							</p>
							<a href="#" class="card-link">Informações</a>
							<a href="#" class="card-link">Ajuda</a>
						</div>
					</div>
				</div>
			</div>
			@endif
		</div>
		{{-- script --}}
		<script src="{{ URL::to('js/app.js') }}" type="text/javascript" ></script>
	</body>
</html>