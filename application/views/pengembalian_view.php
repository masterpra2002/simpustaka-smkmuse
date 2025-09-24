<h2>Form Pengembalian Buku</h2>

<form action="<?= base_url('pengembalian/simpan') ?>" method="post">
    <label>Peminjaman</label>
    <select name="id_peminjaman" required>
        <?php foreach ($peminjaman as $p): ?>
            <option value="<?= $p['id_peminjaman'] ?>">
                <?= $p['nama_anggota'] ?> - <?= $p['judul_buku'] ?> (<?= $p['tanggal_pinjam'] ?>)
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Tanggal Dikembalikan</label>
    <input type="date" name="tanggal_dikembalikan" required><br><br>

    <button type="submit">Simpan Pengembalian</button>
</form>
