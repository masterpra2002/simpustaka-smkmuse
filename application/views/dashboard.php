<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #2c3e50;
            padding: 15px;
            color: white;
            text-align: center;
        }

        nav {
            background-color: #34495e;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Dashboard Perpustakaan Sekolah</h1>
        <p>Selamat datang, <strong><?php echo $this->session->userdata('username'); ?></strong>!</p>
    </header>

    <nav>
        <a href="<?php echo site_url('dashboard'); ?>">Beranda</a>
        <a href="<?php echo site_url('buku'); ?>">Data Buku</a>
        <a href="<?php echo site_url('anggota'); ?>">Data Anggota</a>
        <a href="<?php echo site_url('peminjaman'); ?>">Peminjaman</a>
        <a href="<?php echo site_url('pengembalian'); ?>">Pengembalian</a>
        <a href="<?php echo site_url('laporan'); ?>">Laporan</a>
        <a href="<?php echo site_url('auth/logout'); ?>">Logout</a>
    </nav>

    <main>
        <h2>Selamat datang di Sistem Informasi Perpustakaan</h2>
        <p>Anda berhasil login. Silakan gunakan menu di atas untuk mengelola data perpustakaan.</p>
    </main>

</body>
</html>
