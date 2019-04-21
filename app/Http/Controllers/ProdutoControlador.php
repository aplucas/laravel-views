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

	public function loopfor($n) {
		return view('loop_for', compact('n'));
	}

	public function loopforeach() {
		$produtos = [
			['id' => '1', 'nome' => 'Computador'],
			['id' => '2', 'nome' => 'Mouse'],
			['id' => '3', 'nome' => 'Impressora'],
			['id' => '4', 'nome' => 'Monitor'],
			['id' => '5', 'nome' => 'Teclado'],
		];
		return view('foreach', compact('produtos'));
	}
}
