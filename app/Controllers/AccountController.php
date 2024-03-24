<?php

namespace App\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\HistoryPerkuliahan;

class AccountController extends BaseController
{

    protected $mahasiswa, $dosen, $history_perkuliahan;
    protected $data = [];

    public function __construct()
    {
        $this->mahasiswa = new Mahasiswa();
        $this->data["mahasiswa"] = $this->mahasiswa->getAllMahasiswa();
        
        
        $this->dosen = new Dosen();
        $this->data["dosen"] = $this->dosen->getAllDosenJoinUser();


        // $mahasiswa = new Mahasiswa();
        // $this->mahasiswa = $mahasiswa->getMahasiswaByNim();

        $history_perkuliahan = new HistoryPerkuliahan();
        $this->history_perkuliahan = $history_perkuliahan;
        // $this->completed_motodologi = $history_perkuliahan->isCompletedMetodologiPenelitian($this->mahasiswa['id']);

    }

    public function checkIsActiveMahasiswa($id) : bool
    {
        $data = $this->mahasiswa->getMahasiswaById($id);
        if ($data["status"] == "AKTIF") {
            return true;
        }
        return false;
    }

    public function checkIsSksGreaterThanOrEqualTo110($id)
    {
        $data = $this->history_perkuliahan->getSKSByIdMahasiswa($id);
        if ($data[0]["sks"] >= 110) {
            return true;
        }
        return false;
    }
    public function checkIsCompletedMetodologiPenelitian($id)
    {
        return $this->history_perkuliahan->isCompletedMetodologiPenelitian($id);
    }

    public function index()
    {
        return view("account/index", $this->data);
    }
}
