<!DOCTYPE html>
<html>
<head>
    <title>Register Admin - SIPEDULI</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/user.css') ?>">
</head>
<body class="bg-light">
    <div class="container mt-5">
    <img src="<?= base_url('assets/img/brebes.png') ?>" alt="Logo SIPEDULI" class="logo-img">
        <h3 class="text-center mb-4">Registrasi Admin SIPEDULI</h3><br>
        <form method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div><br>
            <button class="btn-submit">Register</button>
        </form>
            <p class="centered-text">
                Sudah punya akun? <a href="<?= base_url('auth/login') ?>">Masuk di sini</a>
            </p>
    </div>
    <footer class="footer-sipeduli">
        <div class="footer-content">
            <p><strong>SIPEDULI</strong> - Sistem Informasi Pepedan untuk Usulan dan Lokasi Inisiatif</p>
            <p>&copy; <?= date('Y') ?> Pemerintah Desa Pepedan. All rights reserved.</p>
            <p>
                <i class="fas fa-map-marker-alt"></i> Jl. KH. Anshor, Kec. Tonjong, Kab. Brebes<br>
                <i class="fas fa-envelope"></i> <a href="mailto:kantordesapepedan2018@gmail.com">kantordesapepedan2018@gmail.com</a> |
                <i class="fas fa-globe"></i> <a href="https://www.pepedan-brebes.desa.id" target="_blank">www.pepedan-brebes.desa.id</a>
            </p>
        </div>
    </footer>
</body>
</html>
