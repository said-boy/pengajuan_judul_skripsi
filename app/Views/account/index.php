<?php

use App\Controllers\AccountController;

$account = new AccountController();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar akun</title>
</head>

<body>

    <h1>Daftar akun yang tersedia</h1>
    <p>Silahkan bisa login disini <a href="/login"><button>Login</button></a></p>

    <p>semua data dibuat dengan data palsu dan random. jadi saya membuat tabel ini untuk mempermudah memilih akun</p>
    
    <h1>Akun Mahasiswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Dosen PA</th>
                <th>Mahasiswa Aktif</th>
                <th>SKS >= 110</th>
                <th>Lolos Metodologi Penelitian</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $value) : ?>
                <tr>
                    <td><?= $value["username"]?></td>
                    <td><?= $value["password"]?></td>
                    <td><?= $value["nama"]?></td>
                    <td><?= $value["jurusan"]?></td>
                    <td><?= $value["nama_dosen"]?></td>
                    <?php if ($account->checkIsActiveMahasiswa($value["id"])) : ?>
                        <td>True</td>
                    <?php else : ?>
                        <td>False</td>
                    <?php endif; ?>
                    <?php if ($account->checkIsSksGreaterThanOrEqualTo110($value["id"])) : ?>
                        <td>True</td>
                    <?php else : ?>
                        <td>False</td>
                    <?php endif; ?>
                    <?php if ($account->checkIsCompletedMetodologiPenelitian($value["id"])) : ?>
                        <td>True</td>
                    <?php else : ?>
                        <td>False</td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h1>Akun Dosen</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Dijurusan</th>
                <th>Sebagai</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dosen as $value) : ?>
                <tr>
                    <td><?= $value["username"]?></td>
                    <td><?= $value["password"]?></td>
                    <td><?= $value["nama"]?></td>
                    <td><?= $value["jurusan"]?></td>
                    <td><?= $value["status"]?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    
</body>

</html>