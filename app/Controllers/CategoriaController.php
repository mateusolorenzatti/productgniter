<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class CategoriaController extends BaseController {

	public function index(){

		$categoriaModel = new CategoriaModel();

		$data['categorias'] = $categoriaModel->findAll();

		echo view('shared/header.php');
		echo view('categoria/list.php', $data);
		echo view('shared/footer.php');
	}

	
	public function edit($idCategoria){
		$categoriaModel = new CategoriaModel();
		
		$data['categoria'] = $categoriaModel->where('id', $idCategoria)->first();
		
		echo view('shared/header');
		echo view('categoria/form', $data);
		echo view('shared/footer');
	}
	
	public function update(){
		$categoriaModel = new CategoriaModel();
		
		$id = $this->request->getVar('id');
		
		$data = [
			'nome' => $this->request->getVar('nome'),
		];

		$categoriaModel->update($id, $data);
		
		return $this->response->redirect('/categorias/detail/'.$id);
	}
	
	public function create(){		
		echo view('shared/header');
		echo view('categoria/form');
		echo view('shared/footer');
	}
	
	public function save(){
		$categoriaModel = new CategoriaModel();
		
		$data = [
			'nome' => $this->request->getVar('nome'),
		];
		
		$categoriaModel->insert($data);
		
		return $this->response->redirect('/categorias');
	}
	
	public function detail($idCategoria){
		$categoriaModel = new CategoriaModel();
		
		$data['categoria'] = $categoriaModel->where('id', $idCategoria)->first();
		
		echo view('shared/header');
		echo view('categoria/detail', $data);
		echo view('shared/footer');
	}

	public function delete($idCategoria){
		$categoriaModel = new CategoriaModel();
	
		$categoriaModel->where('id', $idCategoria)->delete($idCategoria);
	
		return $this->response->redirect('/categorias');
	}	
}
