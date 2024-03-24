<?= $this->extend("mahasiswa/template"); ?>

<?= $this->section("content"); ?>

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input</h3>
                <p class="text-subtitle text-muted">Fill data or information using input is better than
                    writing by pen.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <form action="buatProposalProcess" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="basicInput">Judul Proposal</label>
                                <input type="text" class="form-control" id="basicInput" name="judul" placeholder="Masukkan judul proposal..">
                            </div>

                            <div class="form-file">
                                <input type="file" class="form-file-input" name="filename" id="customFile" accept="application/pdf">
                                <label class="form-file-label" for="customFile">
                                    <span class="form-file-text">Upload mini proposal dalam betuk pdf...</span>
                                    <span class="form-file-button btn-primary "><i data-feather="upload"></i></span>
                                </label>
                            </div>
                            <button class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Basic Inputs end -->

</div>


<?= $this->endSection(); ?>