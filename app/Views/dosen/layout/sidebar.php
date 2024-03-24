<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="<?= base_url() ?>/assets/images/logo.svg" alt="" srcset="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class='sidebar-title'>Main Menu</li>

                <li class="sidebar-item <?= ($_SERVER['REQUEST_URI'] == '/dosen/dashboard') ? 'active' : ''?> ">
                    <a href="dashboard" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>

                </li>

                <li class="sidebar-item <?= ($_SERVER['REQUEST_URI'] == '/dosen/proposal') ? 'active' : ''?> ">
                    <a href="proposal" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i>
                        <span>Proposal</span>
                    </a>

                </li>

                <?php if($dosen["status"] == 'Sekertaris Prodi') :?>
                    <li class='sidebar-title'>Sekertaris Prodi</li>


                    <li class="sidebar-item <?= ($_SERVER['REQUEST_URI'] == '/dosen/cekBerkasProposal') ? 'active' : ''?> ">
                        <a href="cekBerkasProposal" class='sidebar-link'>
                            <i data-feather="briefcase" width="20"></i>
                        <span>Pengecekan berkas</span>
                    </a>
                </li>
                <?php endif; ?> 

                <?php if($dosen["status"] == 'Kepala Prodi') :?>
                    <li class='sidebar-title'>Kepala Prodi</li>


                    <li class="sidebar-item <?= ($_SERVER['REQUEST_URI'] == '/dosen/penentuanDPS') ? 'active' : ''?> ">
                        <a href="penentuanDPS" class='sidebar-link'>
                            <i data-feather="briefcase" width="20"></i>
                        <span>Penentuan DPS</span>
                    </a>
                </li>
                <?php endif; ?> 

                <?php if($dosen["status"] == 'Opt Prodi') :?>
                    <li class='sidebar-title'>Tentang Skripsi</li>

                    <li class="sidebar-item <?= ($_SERVER['REQUEST_URI'] == '/dosen/daftarSkripsi') ? 'active' : ''?> ">
                        <a href="daftarSkripsi" class='sidebar-link'>
                            <i data-feather="briefcase" width="20"></i>
                        <span>Daftar Skripsi</span>
                    </a>
                </li>
                <?php endif; ?> 

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>