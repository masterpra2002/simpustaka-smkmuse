<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

    protected $table = 'pengguna'; // Pastikan tabel ini sudah ada di database

    // Ambil semua data pengguna
    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    // Tambahkan pengguna
    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    // (Opsional) Fungsi edit dan hapus bisa ditambahkan nanti
}
