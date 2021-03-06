<?php

Route::get('/', function () {
	return view('welcome');
});

route::get('/primeiraview', function () {
	return view('minhaview');
});

route::get('/ola', function () {
	return view('minhaview')
		->with('nome', 'Lucas')
		->with('sobrenome', 'Pereira');
});

route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome) {
	/*
		    return view('minhaview')
		    ->with('nome', $nome)
		    ->with('sobrenome', $sobrenome);

		    parametros = [
			    'nome' => $nome,
			    'sobrenome' => $sobrenome,
		    ];
		    return view('minhaview', $parametros);
	*/

	return view('minhaview', compact('nome', 'sobrenome'));
});

route::get('/email/{email}', function ($email) {

	if (View::exists('email')) {
		return view('email', compact('email'));
	} else {
		return view('erro');
	}
});

Route::get('/filha', function () {
	return view('filha');
});

Route::get('/pagina', function () {
	return view('pagina');
});

Route::get('/produtos', 'ProdutoControlador@listar');

Route::get('/secao_produtos/{palavra}', 'ProdutoControlador@secaoprodutos');

Route::get('/mostraropcoes', 'ProdutoControlador@mostrar_opcoes');

Route::get('/opcoes/{opcao}', 'ProdutoControlador@opcoes');

Route::get('/loop/for/{n}', 'ProdutoControlador@loopfor');

Route::get('/loop/foreach', 'ProdutoControlador@loopforeach');
