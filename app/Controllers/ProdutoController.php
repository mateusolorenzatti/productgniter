<?php

namespace App\Controllers;

use App\Models\ProdutoModel;
use App\Models\CategoriaModel;

class ProdutoController extends BaseController {

	public function index(){
		$produtoModel = new ProdutoModel();
		$categoriaModel = new CategoriaModel();

		$db = db_connect();

		$builder = $db->table('productgniter.produto p');
		$builder->select('p.*, c.nome as categoria__nome');
		$builder->join('productgniter.categoria c', 'p.categoria = c.id', 'LEFT');

		$query = $builder->get();

		$data['produtos'] = $query->getResultArray();

		// print_r($query->getResultArray());

		echo view('shared/header.php');
		echo view('produto/list.php', $data);
		echo view('shared/footer.php');
	}

	
	public function edit($idProduto){
		$produtoModel = new ProdutoModel();
		$categoriaModel = new CategoriaModel();
		$data['categorias'] = $categoriaModel->findAll();
		
		$data['produto'] = $produtoModel->where('id', $idProduto)->first();
		
		echo view('shared/header');
		echo view('produto/form', $data);
		echo view('shared/footer');
	}
	
	public function update(){
		$produtoModel = new ProdutoModel();
		
		$id = $this->request->getVar('id');
		
		$data = [
			'nome' => $this->request->getVar('nome'),
			'descricao' => $this->request->getVar('descricao'),
			'valor' => $this->request->getVar('valor'),
			'categoria' => $this->request->getVar('categoria'),
		];
		
		// print_r($data);

		$produtoModel->update($id, $data);
		
		return $this->response->redirect('/produtos');
	}
	
	public function create(){
		$categoriaModel = new CategoriaModel();
		
		$data['categorias'] = $categoriaModel->findAll();
		
		echo view('shared/header');
		echo view('produto/form', $data);
		echo view('shared/footer');
	}
	
	public function save(){
		$produtoModel = new ProdutoModel();
		
		$data = [
			'nome' => $this->request->getVar('nome'),
			'descricao' => $this->request->getVar('descricao'),
			'valor' => $this->request->getVar('valor'),
			'categoria' => $this->request->getVar('categoria'),
		];
		
		// print_r($data);
		
		$produtoModel->insert($data);
		
		return $this->response->redirect('/produtos');
	}
	
	public function detail($idProduto){
		$produtoModel = new ProdutoModel();
		$categoriaModel = new CategoriaModel();
		
		$data['produto'] = $produtoModel->where('id', $idProduto)->first();

		if(isset($data['produto'])){
			$data['categoria'] = $categoriaModel->where('id', $data['produto']['categoria'])->first();
		}		
		
		echo view('shared/header');
		echo view('produto/detail', $data);
		echo view('shared/footer');
	}

	public function delete($idProduto){
		$produtoModel = new ProdutoModel();
	
		$produtoModel->where('id', $idProduto)->delete($idProduto);
	
		return $this->response->redirect('/produtos');
	}	
}
