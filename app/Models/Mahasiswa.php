<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    public function getAllMahasiswa()
    {
        return $this->select("users.*, mahasiswa.*")->join("users", "users.username = nim")->get()->getResultArray();
    }

    public function getMahasiswaById($id)
    {
        return $this->where("id", $id)->first();
    }

    public function getMahasiswaByNim($nim)
    {
        return $this->where("nim", $nim)->first();
    }
}
