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
        return $this->select("users.*, mahasiswa.*,dosen.nama as nama_dosen")->join("users", "users.username = nim")->join("dosen", "dosen.id = dosen_id")->get()->getResultArray();
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
