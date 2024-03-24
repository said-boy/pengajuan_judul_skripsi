<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AccountController::index');
$routes->get('/login', 'AuthController::index');
$routes->post('/loginProcess', 'AuthController::loginProcess');
$routes->get('/logout', 'AuthController::logout');

$routes->group("mahasiswa", static function ($routes) {
    $routes->get('dashboard', 'MahasiswaController::index',);
    $routes->get('jadwalKuliah', 'MahasiswaController::jadwalKuliah');
    $routes->get('historyPerkuliahan', 'MahasiswaController::historyPerkuliahan');
    $routes->get('proposal', 'MahasiswaController::proposal');
    $routes->get('buatProposal', 'MahasiswaController::buatProposal');
    $routes->post('buatProposalProcess', 'MahasiswaController::buatProposalProcess');
});

$routes->group("dosen", static function ($routes) {

    // Dosen PA
    $routes->get('dashboard', 'DosenController::index');
    $routes->get('proposal', 'DosenController::proposal');
    $routes->post('updateStatusJudul/(:any)', 'DosenController::updateStatusJudul/$1');

    // sek.prodi
    $routes->get('cekBerkasProposal', 'DosenController::cekBerkasProposal');
    $routes->post('updateStatusPerlengkapan/(:any)', 'DosenController::updateStatusPerlengkapan/$1');
    
    // kep.Prodi
    $routes->get('penentuanDPS', 'DosenController::penentuanDPS');
    $routes->post('tambahDps/(:any)', 'DosenController::tambahDps/$1');
    
    // OPT.Prodi
    $routes->get('daftarSkripsi', 'DosenController::daftarSkripsi');
    $routes->get('printSuratPenunjukDosen/(:any)', 'DosenController::printSuratPenunjukDosen/$1');
    // $routes->post('tambahDps/(:any)', 'DosenController::tambahDps/$1');

});



