<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model{

    protected $table = 'productgniter.produto';

    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'nome', 'descricao', 'valor', 'categoria', 'imagem'];
    
}