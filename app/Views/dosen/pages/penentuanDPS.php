<?= $this->extend("dosen/template"); ?>

<?= $this->section("content"); ?>


<div class="main-content container-fluid">
    <!--  -->
    <div class="page-title">
        <h3>Penentuan Dosen Pembimbing Skripsi (DPS)</h3>
        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, eveniet.</p>
    </div>
    <!--  -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar Proposal Yang Diterima
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Tanggal Pengajuan</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Judul Pengajuan</th>
                            <th>Status judul</th>
                            <th>Status kelengkapan</th>
                            <th>Status proposal</th>
                            <th>Mini Proposal</th>
                            <th>Pembimbing</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proposalStatusDiterima as $p) : ?>
                            <tr>
                                <td><?= $p["created_at"]; ?></td>
                                <td><?= $p["nim"]; ?></td>
                                <td><?= $p["mahasiswa_nama"]; ?></td>
                                <td><?= $p["semester"]; ?></td>
                                <td><?= $p["kelas"]; ?></td>
                                <td><?= $p["mahasiswa_jurusan"]; ?></td>
                                <td><?= $p["judul"]; ?></td>
                                <td><?= $p["status_judul"]; ?></td>
                                <td><?= $p["status_perlengkapan"]; ?></td>
                                <td><?= $p["status_proposal"]; ?></td>
                                <td><a href="<?= base_url() . 'uploads/proposal/' . $p["file"] ?>"><?= $p["file"] ?></a></td>
                                <td colspan="2">
                                    <form action="tambahDps/<?= $p["proposal_id"]; ?>" method="post">
                                        <div style="display: flex; gap: 10px;">
                                            <select name="dps" id="">
                                                <option disabled selected>Pilih Dosen Pembimbing</option>
                                                <?php foreach ($allDosen as $d) : ?>
                                                    <?php if (count($allSkripsi) > 0) : ?>
                                                        <option value="<?= $d["id"]; ?>" <?= ($allSkripsi[0]["dosen_id"] == $d["id"]) ? 'selected' : '' ?>><?= $d["nama"]; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $d["id"]; ?>"><?= $d["nama"]; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                            <button class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>

<?= $this->endSection(); ?>