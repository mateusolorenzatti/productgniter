<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class ProdutoController extends BaseController {

	public function lista_produtos(){

		$produtoModel = new ProdutoModel();

		$data['produtos'] = $produtoModel->findAll();

		echo view('shared/header.php');
		echo view('produto/list.php', $data);
		echo view('shared/footer.php');
	}

}
