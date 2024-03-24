<?php

namespace App\Models;

use CodeIgniter\Model;

class Matkul extends Model
{
    protected $table            = 'matkul';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';


    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];

    public function getMatkulById($id) {
        return $this->where("id", $id)->first();
    }

}
