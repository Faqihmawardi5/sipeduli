<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan SAW</title>
    <link href="<?= base_url('assets/css/cetak.css') ?>" rel="stylesheet">
</head>
<body onload="window.print()">
<div class="kop-surat">
    <img src="<?= site_url('assets/img/brebes.png'); ?>" class="logo">
    <div>
        <div class="judul">PEMERINTAH KABUPATEN BREBES<br>KECAMATAN TONJONG<br>DESA PEPEDAN</div>
        <div class="alamat">Jl. KH. Anshor Pepedan, Kec. Tonjong, Kab. Brebes, Jawa Tengah 52271<br>
        website: <a href="https://www.pepedan-brebes.desa.id">www.pepedan-brebes.desa.id</a> | Email: <a href="mailto:kantordesapepedan2018@gmail.com">kantordesapepedan2018@gmail.com</a> | Telp: 082324389815</div>
    </div>
</div>

<h3 style="text-align:center; margin-bottom:10px;">LAPORAN PERHITUNGAN METODE SAW SIPEDULI</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Program Kerja</th>
                <th>Skor</th>
                <th>Klasifikasi Jenis</th>
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
            <strong><u>SYAEFUL HUDA</u></strong>
        </td>
    </tr>
</table>

</body>
</html>
