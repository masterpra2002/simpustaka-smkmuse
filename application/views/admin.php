<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Manajemen Pengguna - Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Manajemen Pengguna</h2>

    <!-- Flash message -->
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php endif; ?>

    <!-- Tambah Pengguna -->
    <div class="card mb-4">
        <div class="card-header">Tambah Pengguna</div>
        <div class="card-body">
            <form action="<?= site_url('pengguna/tambah') ?>" method="post">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control" required>
                        <option value="admin">Admin</option>
                        <option value="pengguna">Pengguna</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kata Sandi</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Tabel Pengguna -->
    <div class="card">
        <div class="card-header">Daftar Pengguna</div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($pengguna)): ?>
                        <?php $no = 1; foreach ($pengguna as $row): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->username ?></td>
                                <td><?= ucfirst($row->level) ?></td>
                                <td>
                                    <a href="<?= site_url('pengguna/edit/'.$row->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="<?= site_url('pengguna/hapus/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus pengguna ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="5" class="text-center">Belum ada data pengguna.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>
