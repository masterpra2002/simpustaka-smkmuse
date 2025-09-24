<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Peminjaman_model');
        // $this->load->model('Anggota_model');
        // $this->load->model('Buku_model');
        // $this->load->model('Petugas_model');
    }

    public function index() {
        $data['anggota'] = $this->Anggota_model->get_all();
        $data['buku'] = $this->Buku_model->get_all();
        $data['petugas'] = $this->Petugas_model->get_all();
        $this->load->view('peminjaman_view', $data);
    }

    public function simpan() {
        $data = [
            'id_anggota' => $this->input->post('id_anggota'),
            'id_buku' => $this->input->post('id_buku'),
            'id_petugas' => $this->input->post('id_petugas'),
            'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
            'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            'status' => 'Dipinjam'
        ];

        $this->Peminjaman_model->insert($data);
        redirect('peminjaman');
    }
}
?>