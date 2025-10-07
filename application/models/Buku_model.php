<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_buku() {
    return $this->db->get('nama_tabel_buku')->result();
    }
    
    public function tambah_buku() {
        $data = [
            'judul' => $this->input->post('judul'),
            'pengarang' => $this->input->post('pengarang'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
        ];
        return $this->db->insert('buku', $data);
    }

    public function get_buku_by_id($id) {
        return $this->db->get_where('buku', ['id' => $id])->row();
    }

    public function update_buku($id) {
        $data = [
            'judul' => $this->input->post('judul'),
            'pengarang' => $this->input->post('pengarang'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
        ];
        return $this->db->update('buku', $data, ['id' => $id]);
    }

    public function hapus_buku($id) {
        return $this->db->delete('buku', ['id' => $id]);
    }
}
