<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Penunjukan Dosen Pembimbing Skripsi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Surat Penunjukan Dosen Pembimbing Skripsi</h2>
        </div>
        <div class="content">
            <p>Kepada Yth.</p>
            <p><strong>Dosen Pembimbing Skripsi</strong></p>
            <p>Di Tempat</p>
            <br>
            <p>Dengan hormat,</p>
            <p>Berdasarkan hasil rapat Dewan Pengarah Program Studi, telah menghasilkan keputusan untuk menunjuk <strong><?=$allDetailSkripsi[0]["nama"]?></strong> sebagai dosen pembimbing skripsi untuk mahasiswa:</p>
            <p><strong>Nama Mahasiswa:</strong> <?=$allDetailSkripsi[0]["mahasiswa_nama"]?></p>
            <p><strong>NIM Mahasiswa:</strong> <?=$allDetailSkripsi[0]["nim"]?></p>
            <p><strong>Jurusan:</strong> <?=$allDetailSkripsi[0]["mahasiswa_jurusan"]?></p>
            <p><strong>Judul Skripsi:</strong> <?=$allDetailSkripsi[0]["judul"]?></p>
            <br>
            <p>Dengan surat ini, kami mohon kesediaan <strong><?=$allDetailSkripsi[0]["nama"]?></strong> untuk menjadi dosen pembimbing skripsi tersebut. Kami mengharapkan bimbingan dan arahan dari <strong><?=$allDetailSkripsi[0]["nama"]?></strong> agar skripsi tersebut dapat diselesaikan dengan baik.</p>
            <p>Demikian surat penunjukan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
            <br>
            <p>Hormat kami,</p>
            <br>
        </div>
    </div>
</body>
</html>
