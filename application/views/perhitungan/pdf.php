<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
        .kop-surat {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
        }
        .logo {
            float: left;
            width: 70px;
            height: 70px;
        }
        .judul {
            font-size: 16px;
            font-weight: bold;
        }
        .alamat {
            font-size: 12px;
        }
        .ttd {
            margin-top: 40px;
            width: 100%;
        }
        .ttd td {
            border: none;
            text-align: center;
            padding-top: 50px;
        }
    </style>
</head>
<body>

<div class="kop-surat">
    <img src="<?= site_url('assets/img/brebes.png'); ?>" class="logo">
    <div>
        <div class="judul">PEMERINTAH KABUPATEN BREBES<br>KECAMATAN TONJONG<br>DESA PEPEDAN</div>
        <div class="alamat">Jl. KH. Anshor Pepedan, Kec. Tonjong, Kab. Brebes, Jawa Tengah 52271<br>
        website: <a href="https://www.pepedan-brebes.desa.id">www.pepedan-brebes.desa.id</a> | Email: <a href="mailto:kantordesapepedan2018@gmail.com">kantordesapepedan2018@gmail.com</a> | Telp: 082324389815</div>
    </div>
</div>

<h3 style="text-align:center; margin-bottom:10px;">LAPORAN PERHITUNGAN METODE SAW</h3>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Alternatif</th>
            <th>Skor</th>
            <th>Klasifikasi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; foreach ($hasil as $h): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $h['nama_alternatif'] ?></td>
                <td><?= $h['skor'] ?></td>
                <td><?= $h['klasifikasi'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<!-- Tanda Tangan -->
<table class="ttd">
    <tr>
        <td width="70%"></td>
        <td>
            Pepedan, <?= date('d M Y') ?><br>
            Kepala Desa Pepedan<br><br><br><br>
            <strong><u>Nama Kepala Desa</u></strong>
        </td>
    </tr>
</table>

</body>
</html>
