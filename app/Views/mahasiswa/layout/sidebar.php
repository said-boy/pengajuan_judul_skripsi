<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="<?= base_url() ?>/assets/images/logo.svg" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class='sidebar-title'>Main Menu</li>

                <li class="sidebar-item <?= ($_SERVER['REQUEST_URI'] == '/mahasiswa/dashboard') ? 'active' : ''?> ">
                    <a href="dashboard" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>

                </li>

                <li class='sidebar-title'>Perkuliahan</li>


                <li class="sidebar-item <?= ($_SERVER['REQUEST_URI'] == '/mahasiswa/jadwalKuliah') ? 'active' : '' ?> ">
                    <a href="jadwalKuliah" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i>
                        <span>Jadwal Kuliah</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($_SERVER['REQUEST_URI'] == '/mahasiswa/historyPerkuliahan') ? 'active' : '' ?> ">
                    <a href="historyPerkuliahan" class='sidebar-link'>
                        <i data-feather="layers" width="20"></i>
                        <span>History Perkuliahan</span>
                    </a>
                </li>

                <?php if($mahasiswa["status"] == "AKTIF" && $history[0]["sks"] >= 110 && $isCompletedMetodologiPenelitian):?>
                <li class='sidebar-title'>Proposal</li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i>
                        <span>Proposal</span>
                    </a>

                    <ul class="submenu ">

                        <li>
                            <a href="proposal">Daftar Pengajuan</a>
                        </li>

                        <li>
                            <a href="buatProposal">Buat Pengajuan</a>
                        </li>

                    </ul>

                </li>
                <?php endif;?>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>