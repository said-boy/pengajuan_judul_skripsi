<?= $this->extend("mahasiswa/template"); ?>

<?= $this->section("content"); ?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>jadwal Kuliah</h3>
        <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, numquam.</p>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Jadwal Pelajaran</h4>
            <div class="d-flex ">
                <i data-feather="download"></i>
            </div>
        </div>
        <div class="card-body px-0 pb-0">
            <div class="table-responsive">
                <table class='table mb-0'>
                    <thead>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>Hari</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Ruang</th>
                            <th>Sks</th>
                            <th>Dosen</th>
                            <th>Jenis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>vehicula.</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>vehicula.</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>Offenburg</td>
                        </tr>
                        <tr>
                            <td>Graiden</td>
                            <td>vehicula.</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>vehicula.</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>Offenburg</td>
                        </tr>
                        <tr>
                            <td>Graiden</td>
                            <td>vehicula.</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>vehicula.</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>Offenburg</td>
                        </tr>
                        <tr>
                            <td>Graiden</td>
                            <td>vehicula.</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>vehicula.</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>Offenburg</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>