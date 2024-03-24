<?= $this->extend("dosen/template"); ?>

<?= $this->section("content"); ?>


<div class="main-content container-fluid">
    <!--  -->
    <div class="page-title">
        <h3>Daftar Skripsi</h3>
        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, eveniet.</p>
    </div>
    <!--  -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Daftar skripsi
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Judul Pengajuan</th>
                            <th>Dosen Pembimbing</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allDetailSkripsi as $p) : ?>
                            <tr>
                                <td><?= $p["nim"]; ?></td>
                                <td><?= $p["mahasiswa_nama"]; ?></td>
                                <td><?= $p["semester"]; ?></td>
                                <td><?= $p["kelas"]; ?></td>
                                <td><?= $p["mahasiswa_jurusan"]; ?></td>
                                <td><?= $p["judul"]; ?></td>
                                <td><?= $p["nama"]; ?></td>
                                <td><a href="printSuratPenunjukDosen/<?= $p["proposal_id"] ?>" class="btn btn-primary">Cetak Surat</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>

<?= $this->endSection(); ?>