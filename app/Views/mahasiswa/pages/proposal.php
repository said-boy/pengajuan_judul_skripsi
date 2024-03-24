<?= $this->extend("mahasiswa/template"); ?>

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
                Pengajuan Judul
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Tanggal Pengajuan</th>
                            <th>Judul Pengajuan</th>
                            <th>Judul</th>
                            <th>Perlengkapan</th>
                            <th>Proposal</th>
                            <th>Mini Proposal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proposal as $p) : ?>
                            <tr>
                                <td><?= $p["created_at"] ?></td>
                                <td><?= $p["judul"] ?></td>
                                <td>
                                    <?php if ($p["status_judul"] == "DITERIMA") : ?>
                                        <span class="badge bg-success"><?= $p["status_judul"] ?></span>
                                    <?php elseif ($p["status_judul"] == "PENDING") : ?>
                                        <span class="badge bg-warning"><?= $p["status_judul"] ?></span>
                                    <?php elseif ($p["status_judul"] == "DITOLAK") : ?>
                                        <span class="badge bg-danger"><?= $p["status_judul"] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($p["status_perlengkapan"] == "DITERIMA") : ?>
                                        <span class="badge bg-success"><?= $p["status_perlengkapan"] ?></span>
                                    <?php elseif ($p["status_perlengkapan"] == "PENDING") : ?>
                                        <span class="badge bg-warning"><?= $p["status_perlengkapan"] ?></span>
                                    <?php elseif ($p["status_perlengkapan"] == "DITOLAK") : ?>
                                        <span class="badge bg-danger"><?= $p["status_perlengkapan"] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($p["status_proposal"] == "DITERIMA") : ?>
                                        <span class="badge bg-success"><?= $p["status_proposal"] ?></span>
                                    <?php elseif ($p["status_proposal"] == "PENDING") : ?>
                                        <span class="badge bg-warning"><?= $p["status_proposal"] ?></span>
                                    <?php elseif ($p["status_proposal"] == "DITOLAK") : ?>
                                        <span class="badge bg-danger"><?= $p["status_proposal"] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td><a href="<?= base_url() . 'uploads/proposal/'. $p["file"] ?>"><?= $p["file"] ?></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>

<?= $this->endSection(); ?>