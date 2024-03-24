<?= $this->extend("mahasiswa/template"); ?>

<?= $this->section("content"); ?>
<div class="main-content container-fluid">
    <!--  -->
    <div class="page-title">
        <h3>Histori Perkuliahan</h3>
        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, eveniet.</p>
    </div>
    <!--  -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                Mata Kuliah
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>Dosen</th>
                            <th>Nilai</th>
                            <th>SKS</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>Offenburg</td>
                            <td>Offenburg</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Ferdinand</td>
                            <td>Marlborough</td>
                            <td>Offenburg</td>
                            <td>
                                <span class="badge bg-danger">Inactive</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

</div>

<?= $this->endSection(); ?>
