<!DOCTYPE html>
<html>
<head>
    <title>Login Admin - SIPEDULI</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/user.css') ?>">
</head>
<body class="bg-light">
    <div class="container mt-5">
    <img src="<?= base_url('assets/img/brebes.png') ?>" alt="Logo SIPEDULI" class="logo-img">
        <h3 class="text-center mb-4">Login Admin SIPEDULI</h3><br>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
        <?php endif ?>
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required autofocus>
            </div><br>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div><br>
            <button class="btn-submit">Login</button>
        </form>
            <br><p class="centered-text">
                Belum punya akun? <a href="<?= base_url('auth/register') ?>">Registrasi di sini</a>
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
