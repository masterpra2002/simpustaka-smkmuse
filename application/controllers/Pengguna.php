<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Peminjaman_model $Peminjaman_model
 * @property Pengguna_model $Pengguna_model
 * @property CI_Input $input
 */

class Pengguna extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pengguna_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    // Halaman utama pengguna
    public function index() {
        $data['pengguna'] = $this->Pengguna_model->get_all();
        $this->load->view('pengguna_view', $data);
    }

    // Fungsi untuk menambah pengguna
    public function tambah() {
        // Validasi sederhana (bisa dikembangkan lebih lanjut)
        $nama = $this->input->post('nama', TRUE);
        $username = $this->input->post('username', TRUE);
        $level = $this->input->post('level', TRUE);
        $password = $this->input->post('password', TRUE);

        // Simpan ke database
        $data = [
            'nama' => $nama,
            'username' => $username,
            'level' => $level,
            'password' => password_hash($password, PASSWORD_DEFAULT) // Hash password
        ];

        $this->Pengguna_model->insert($data);
        $this->session->set_flashdata('success', 'Pengguna berhasil ditambahkan.');
        redirect('welcome');
    }
}


