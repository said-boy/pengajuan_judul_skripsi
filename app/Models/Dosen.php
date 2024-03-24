<?php

namespace App\Models;

use CodeIgniter\Model;

class Dosen extends Model
{
    protected $table            = 'dosen';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    public function getAllDosen(){
        return $this->findAll();
    }

    public function getAllDosenJoinUser(){
        return $this->select("users.*, dosen.*")->join("users", "users.username = nidn")->get()->getResultArray();
    }

    public function getDosenByNidn($nidn){
        return $this->where("nidn", $nidn)->first();
    }
}
