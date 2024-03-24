<?= $this->extend("dosen/template"); ?>

<?= $this->section("content"); ?>

<div class="main-content container-fluid">
    <!--  -->
    <div class="page-title">
        <h3>Proposal</h3>
        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, eveniet.</p>
    </div>
    <!--  -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar pengajuan Proposal
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
                            <th>Aksi</th>
                            <th>Mini Proposal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proposalGroupByJurusan as $p) : ?>
                            <tr>
                                <td><?= $p["created_at"]; ?></td>
                                <td><?= $p["nim"]; ?></td>
                                <td><?= $p["mahasiswa_nama"]; ?></td>
                                <td><?= $p["semester"]; ?></td>
                                <td><?= $p["kelas"]; ?></td>
                                <td><?= $p["mahasiswa_jurusan"]; ?></td>
                                <td><?= $p["judul"]; ?></td>
                                <td><?= $p["status_judul"]; ?></td>
                                <td colspan="3">
                                    <form action="updateStatusPerlengkapan/<?= $p["proposal_id"]; ?>" method="post">
                                        <div style="display: flex; gap: 20px;">
                                            <select name="status_perlengkapan">
                                                <option value="DITERIMA" <?= ($p["status_perlengkapan"] == "DITERIMA") ? 'selected' : '' ?>>DITERIMA</option>
                                                <option value="PENDING" <?= ($p["status_perlengkapan"] == "PENDING") ? 'selected' : '' ?>>PENDING</option>
                                                <option value="DITOLAK" <?= ($p["status_perlengkapan"] == "DITOLAK") ? 'selected' : '' ?>>DITOLAK</option>
                                            </select>
                                            <select name="status_proposal">
                                                <option value="DITERIMA" <?= ($p["status_proposal"] == "DITERIMA") ? 'selected' : '' ?>>DITERIMA</option>
                                                <option value="PENDING" <?= ($p["status_proposal"] == "PENDING") ? 'selected' : '' ?>>PENDING</option>
                                                <option value="DITOLAK" <?= ($p["status_proposal"] == "DITOLAK") ? 'selected' : '' ?>>DITOLAK</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </td>
                                <td><a href="<?= base_url() . 'uploads/proposal/' . $p["file"] ?>"><?= $p["file"] ?></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>

<?= $this->endSection(); ?>