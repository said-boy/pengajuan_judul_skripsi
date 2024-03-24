<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryPerkuliahan extends Model
{
    protected $table            = 'history_perkuliahan';
    protected $returnType       = 'array';

    public function getAllSKSMahasiswa()
    {
        return $this->selectSum("matkul.sks")->join("matkul", "matkul.id = matkul_id")->get()->getResultArray();
    }

    public function getSKSByIdMahasiswa($id)
    {
        return $this->selectSum("matkul.sks")->join("matkul", "matkul.id = matkul_id")->where("mahasiswa_id", $id)->get()->getResultArray();
    }

    public function isAllCompletedMetodologiPenelitian()
    {
        return $this->where("keterangan", "LOLOS")->where("matkul_id", "1")->get()->getResultArray();
    }

    public function isCompletedMetodologiPenelitian($id) : bool
    {
        if ($this->where("mahasiswa_id", $id)->where("keterangan", "LOLOS")->where("matkul_id", "1")->first() == null){
            return false;
        }
        return true;
    }
}
