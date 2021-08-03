<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model{

    protected $table = 'productgniter.categoria';

    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'nome'];
    
}