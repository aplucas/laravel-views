<?php

namespace App\Http\Controllers;

class ProdutoControlador extends Controller {
	public function listar() {
		$produtos = [
			"Notebook Asus 17 16GB",
			"Mouse e teclado Microsoft USB",
			"Monitor 21 - Samsung",
			"Impressora HP",
			"Disco SSD 512GB",
		];
		return view('produtos', compact('produtos'));
	}

	public function secaoprodutos($palavra) {
		return view('secao_produtos', compact('palavra'));
	}

	public function mostrar_opcoes() {
		return view('mostrar_opcoes');
	}

	public function opcoes($opcao) {
		return view('opcoes', compact('opcao'));
	}
}
