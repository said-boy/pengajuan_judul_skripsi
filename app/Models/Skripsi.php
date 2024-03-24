<?php

namespace App\Models;

use CodeIgniter\Model;

class Skripsi extends Model
{
    protected $table            = 'skripsi';
    protected $returnType       = 'array';
    protected $allowedFields    = ["proposal_id", "dosen_id"];

    public function getAllSkripsi(){
        return $this->findAll();
    }

    public function getAllAndDetailSkripsiByJurusanAndId($proposal_id){
        return $this->select('proposal.id as proposal_id, proposal.*, mahasiswa.nama as mahasiswa_nama, mahasiswa.jurusan as mahasiswa_jurusan, mahasiswa.*, dosen.*')->join("proposal", "proposal.id = proposal_id")->join("dosen", "dosen.id = dosen_id")->join("mahasiswa", "mahasiswa.id = proposal.mahasiswa_id")->where("proposal_id", $proposal_id)->get()->getResultArray();
    }

    public function getAllAndDetailSkripsiByJurusan($jurusan){
        return $this->select('proposal.id as proposal_id, proposal.*, mahasiswa.nama as mahasiswa_nama, mahasiswa.jurusan as mahasiswa_jurusan, mahasiswa.*, dosen.*')->join("proposal", "proposal.id = proposal_id")->join("dosen", "dosen.id = dosen_id")->join("mahasiswa", "mahasiswa.id = proposal.mahasiswa_id")->where("mahasiswa.jurusan", $jurusan)->get()->getResultArray();
    }

    public function createSkripsi($proposal_id, $dps)
    {
        $isExist = $this->where("proposal_id", $proposal_id)->first();
        if ($isExist != null ){
            return $this->where("proposal_id", $proposal_id)->set("dosen_id", $dps)->update();
        }
        return $this->insert(["proposal_id" => $proposal_id, "dosen_id" => $dps]);
    }
}
