<?php

namespace App\Controllers;

use App\Models\Dosen;
use App\Models\Proposal;
use App\Models\Skripsi;
use App\Libraries\Pdfgenerator;

class DosenController extends BaseController
{

    protected $user, $dosen, $proposal, $skripsi;
    protected $data = [];

    public function __construct()
    {
        $this->user = session()->get("user");
        $this->dosen = new Dosen();
        $this->proposal = new Proposal();
        $this->skripsi = new Skripsi();

        $this->data["dosen"] = $this->dosen->getDosenByNidn($this->user["username"]);
        $this->data["allDosen"] = $this->dosen->getAllDosen();
        $this->data["allSkripsi"] = $this->skripsi->getAllSkripsi();
        $this->data["allDetailSkripsi"] = $this->skripsi->getAllAndDetailSkripsiByJurusan($this->data["dosen"]["jurusan"]);
        $this->data["proposal"] = $this->proposal->getProposalByMahasiswaAndDosen($this->data["dosen"]["id"]);
        $this->data["proposalStatusDiterima"] = $this->proposal->getAllProposalStatusDiterimaByJurusan($this->data["dosen"]["jurusan"]);
        $this->data["proposalGroupByJurusan"] = $this->proposal->getProposalByMahasiswaAndDosenAndJurusan($this->data["dosen"]["jurusan"]);
    }

    public function index()
    {
        return view("dosen/pages/dashboard", $this->data);
    }

    public function proposal()
    {
        return view("dosen/pages/proposal", $this->data);
    }

    public function updateStatusJudul($proposal_id)
    {
        $status = $this->request->getPost("status_judul");
        $this->proposal->updateStatusJudul($proposal_id, $status);
        return redirect()->to("dosen/proposal");
    }

    public function cekBerkasProposal()
    {
        return view("dosen/pages/cekBerkasProposal", $this->data);
    }

    public function updateStatusPerlengkapan($proposal_id)
    {
        $status = $this->request->getPost(["status_perlengkapan", "status_proposal"]);
        $this->proposal->updateStatusPerlengkapan($proposal_id, $status);
        return redirect()->to("dosen/cekBerkasProposal");
    }

    public function penentuanDPS()
    {
        return view("dosen/pages/penentuanDPS", $this->data);
    }

    public function tambahDps($proposal_id)
    {
        $dps = $this->request->getPost("dps");
        $this->skripsi->createSkripsi($proposal_id, $dps);
        return redirect()->to("dosen/penentuanDPS");
    }

    public function daftarSkripsi()
    {
        return view("dosen/pages/daftarSkripsi", $this->data);
    }

    // cetak surat
    public function printSuratPenunjukDosen($proposal_id)
    {
        $this->data["skripsiByIdProposal"] = $this->skripsi->getAllAndDetailSkripsiByJurusanAndId($proposal_id);
        $Pdfgenerator = new Pdfgenerator();
        // title dari pdf
        $this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_penjualan_toko_kita';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $html = view('dosen/pages/print/suratPenunjuk', $this->data);

        // run dompdf
        $Pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
