<h2>Form Peminjaman Buku</h2>

<form action="<?= base_url('peminjaman/simpan') ?>" method="post">
    <label>Nama Anggota</label>
    <select name="id_anggota" required>
        <?php foreach ($anggota as $a): ?>
            <option value="<?= $a['id_anggota'] ?>"><?= $a['nama'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Judul Buku</label>
    <select name="id_buku" required>
        <?php foreach ($buku as $b): ?>
            <option value="<?= $b['id_buku'] ?>"><?= $b['judul'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Petugas</label>
    <select name="id_petugas" required>
        <?php foreach ($petugas as $p): ?>
            <option value="<?= $p['id_petugas'] ?>"><?= $p['nama'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Tanggal Pinjam</label>
    <input type="date" name="tanggal_pinjam" required><br><br>

    <label>Tanggal Kembali</label>
    <input type="date" name="tanggal_kembali" required><br><br>

    <button type="submit">Simpan</button>
</form>
