<?php

namespace App\Controllers;

use App\Models\ProdutoModel;

class Home extends BaseController {

	public function index(){

		return $this->response->redirect('/produtos');
	}

}
