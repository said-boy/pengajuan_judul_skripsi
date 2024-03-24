<?php

namespace App\Controllers;

use App\Models\HistoryPerkuliahan;
use App\Models\Mahasiswa;
use App\Models\Proposal;

class MahasiswaController extends BaseController
{

    protected $user, $mahasiswa, $history_perkuliahan, $completed_motodologi;
    protected $proposal;

    public function __construct()
    {
        $this->user = session()->get("user");

        $mahasiswa = new Mahasiswa();
        $this->mahasiswa = $mahasiswa->getMahasiswaByNim($this->user['username']);

        $history_perkuliahan = new HistoryPerkuliahan();
        $this->history_perkuliahan = $history_perkuliahan->getSKSByIdMahasiswa($this->mahasiswa['id']);
        $this->completed_motodologi = $history_perkuliahan->isCompletedMetodologiPenelitian($this->mahasiswa['id']);

        $proposal = new Proposal();
        $this->proposal = $proposal;
    }

    public function index(): string
    {
        $data = [
            "user" => $this->user,
            "mahasiswa" => $this->mahasiswa,
            "history" => $this->history_perkuliahan,
            "isCompletedMetodologiPenelitian" => $this->completed_motodologi,
        ];
        return view('mahasiswa/pages/dashboard', $data);
    }

    public function jadwalKuliah(): string
    {
        $data = [
            "user" => $this->user,
            "mahasiswa" => $this->mahasiswa,
            "history" => $this->history_perkuliahan,
            "isCompletedMetodologiPenelitian" => $this->completed_motodologi,
        ];
        return view('mahasiswa/pages/jadwalKuliah', $data);
    }

    public function historyPerkuliahan(): string
    {
        $data = [
            "user" => $this->user,
            "mahasiswa" => $this->mahasiswa,
            "history" => $this->history_perkuliahan,
            "isCompletedMetodologiPenelitian" => $this->completed_motodologi,
        ];
        return view('mahasiswa/pages/historyPerkuliahan', $data);
    }

    public function proposal()
    {
        if (!$this->completed_motodologi) {
            return redirect()->to('mahasiswa/dashboard');
        }
        $data = [
            "user" => $this->user,
            "mahasiswa" => $this->mahasiswa,
            "history" => $this->history_perkuliahan,
            "isCompletedMetodologiPenelitian" => $this->completed_motodologi,
            "proposal" => $this->proposal->getAllProposal($this->mahasiswa['id'])
        ];
        return view('mahasiswa/pages/proposal', $data);
    }

    public function buatProposal()
    {
        if (!$this->completed_motodologi) {
            return redirect()->to('mahasiswa/dashboard');
        }
        $data = [
            "user" => $this->user,
            "mahasiswa" => $this->mahasiswa,
            "history" => $this->history_perkuliahan,
            "isCompletedMetodologiPenelitian" => $this->completed_motodologi,
        ];
        return view('mahasiswa/pages/buatProposal', $data);
    }

    public function buatProposalProcess()
    {
        if (!$this->completed_motodologi) {
            return redirect()->to('mahasiswa/dashboard');
        }

        $judul = $this->request->getPost("judul");
        $file = $this->request->getFile("filename");

        if ($file->isValid() && $file->getExtension() === 'pdf' && $file->getMimeType() === 'application/pdf') {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/proposal', $newName);
            $this->proposal->saveProposal($this->mahasiswa['id'], $judul, $newName);

            $data = [
                "user" => $this->user,
                "mahasiswa" => $this->mahasiswa,
                "history" => $this->history_perkuliahan,
                "isCompletedMetodologiPenelitian" => $this->completed_motodologi,
            ];
            return view('mahasiswa/pages/buatProposal', $data);
        } else {
            return redirect()->back()->with('error', 'File yang diunggah harus berupa file PDF.');
        }
    }
}
