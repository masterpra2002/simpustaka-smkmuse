<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pengembalian_model');
        $this->load->model('Peminjaman_model');
    }

    public function index() {
        $data['peminjaman'] = $this->Peminjaman_model->getBelumDikembalikan();
        $this->load->view('pengembalian_view', $data);
    }

    public function simpan() {
        $id_peminjaman = $this->input->post('id_peminjaman');
        $tanggal_dikembalikan = $this->input->post('tanggal_dikembalikan');

        // Ambil data tanggal kembali
        $peminjaman = $this->Peminjaman_model->getById($id_peminjaman);
        $tanggal_kembali = $peminjaman->tanggal_kembali;

        // Hitung denda
        $denda = 0;
        if (strtotime($tanggal_dikembalikan) > strtotime($tanggal_kembali)) {
            $selisih = (strtotime($tanggal_dikembalikan) - strtotime($tanggal_kembali)) / (60 * 60 * 24);
            $denda = $selisih * 1000; // Misal Rp1000 per hari
        }

        // Simpan pengembalian
        $data = [
            'id_peminjaman' => $id_peminjaman,
            'tanggal_dikembalikan' => $tanggal_dikembalikan,
            'denda' => $denda
        ];

        $this->Pengembalian_model->insert($data);

        // Update status peminjaman
        $this->Peminjaman_model->updateStatus($id_peminjaman, 'Dikembalikan');

        redirect('pengembalian');
    }
}
