<?php

namespace App\Models;

use CodeIgniter\Model;

class Proposal extends Model
{
    protected $table            = 'proposal';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields       = ["judul", "mahasiswa_id", "file", "status_judul", "status_perlengkapan", "status_proposal"];

    public function saveProposal($mahasiswa_id, $judul, $file) {
        $data = [
            "mahasiswa_id" => $mahasiswa_id,
            "judul" => $judul,
            "file" => $file,
        ];
        $this->insert($data);
    }

    public function getAllProposal($mahasiswa_id) {
        return $this->where("mahasiswa_id", $mahasiswa_id)->get()->getResultArray();
    }

    // SELECT proposal.*, mahasiswa.* , dosen.* from proposal JOIN mahasiswa on mahasiswa_id = mahasiswa.id JOIN dosen ON mahasiswa.dosen_id = dosen.id; 
    public function getProposalByMahasiswaAndDosen($dosen_id) {
        return $this->select('proposal.id as proposal_id, proposal.*, mahasiswa.nama as mahasiswa_nama, mahasiswa.jurusan as mahasiswa_jurusan, mahasiswa.*, dosen.*')->join("mahasiswa","mahasiswa.id = mahasiswa_id")->join("dosen", "dosen.id = mahasiswa.id")->where("mahasiswa.dosen_id", $dosen_id)->get()->getResultArray();
    }

    public function getProposalByMahasiswaAndDosenAndJurusan($jurusan) {
        return $this->select('proposal.id as proposal_id, proposal.*, mahasiswa.nama as mahasiswa_nama, mahasiswa.jurusan as mahasiswa_jurusan, mahasiswa.*, dosen.*')->join("mahasiswa","mahasiswa.id = mahasiswa_id")->join("dosen", "dosen.id = mahasiswa.id")->where("mahasiswa.jurusan", $jurusan)->where("proposal.status_judul", "DITERIMA")->get()->getResultArray();
    }

    public function getAllProposalStatusDiterimaByJurusan($jurusan) {
        return $this->select('proposal.id as proposal_id, proposal.*, mahasiswa.nama as mahasiswa_nama, mahasiswa.jurusan as mahasiswa_jurusan, mahasiswa.*, dosen.*')->join("mahasiswa","mahasiswa.id = mahasiswa_id")->join("dosen", "dosen.id = mahasiswa.id")->where("mahasiswa.jurusan", $jurusan)->where("proposal.status_judul", "DITERIMA")->where("proposal.status_perlengkapan", "DITERIMA")->where("proposal.status_proposal", "DITERIMA")->get()->getResultArray();
    }

    public function updateStatusJudul($proposal_id, $status) {
        return $this->where("id", $proposal_id)->set("status_judul", $status)->update();
    }

    public function updateStatusPerlengkapan($proposal_id, $status) {
        return $this->where("id", $proposal_id)->set("status_perlengkapan", $status["status_perlengkapan"])->set("status_proposal", $status["status_proposal"])->update();
    }

}
