<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.svg" type="image/x-icon">

</head>

<body>
    <div id="app">

        <?= $this->include("mahasiswa/layout/sidebar"); ?>
        
        <div id="main">

            <div style="position: sticky; top: 0; z-index: 1; background-color: white;">
                <?= $this->include("mahasiswa/layout/navbar"); ?>
            </div>
            
            <?= $this->renderSection("content"); ?>

            <?= $this->include("mahasiswa/layout/footer"); ?>
        </div>

    </div>

    <script src="<?= base_url() ?>/assets/js/feather-icons/feather.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/app.js"></script>

    <script src="<?= base_url() ?>/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/pages/dashboard.js"></script>

    <script src="<?= base_url() ?>/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>/assets/js/vendors.js"></script>

    <script src="<?= base_url() ?>/assets/js/main.js"></script>

</body>

</html>