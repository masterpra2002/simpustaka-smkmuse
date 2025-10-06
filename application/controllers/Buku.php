<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property form_validation $form_validation
 * @property nama_model $nama_model
 * @property judul_modul $judul_modul
 */

class Buku extends CI_Controller {

    // ✅ Tambahkan properti yang digunakan
    private $judul_modul = 'Manajemen Buku';
    private $nama_model = 'Buku_model';
    private $nama_view_folder = 'buku';

    public function __construct() {
        parent::__construct();
        
        // Load model dan helper
        $this->load->model($this->nama_model);
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
    }

    public function index() {
        $data['judul'] = $this->judul_modul;
        // Panggil model secara dinamis dari nama_model
        $data['buku'] = $this->{$this->nama_model}->get_all_buku();

        $this->load->view('templates/header', $data);
        $this->load->view($this->nama_view_folder . '/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah ' . $this->judul_modul;
            $this->load->view('templates/header', $data);
            $this->load->view($this->nama_view_folder . '/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->{$this->nama_model}->tambah_buku();
            redirect('buku');
        }
    }

    public function edit($id) {
        $data['buku'] = $this->{$this->nama_model}->get_buku_by_id($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('pengarang', 'Pengarang', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Edit ' . $this->judul_modul;
            $this->load->view('templates/header', $data);
            $this->load->view($this->nama_view_folder . '/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->{$this->nama_model}->update_buku($id);
            redirect('buku');
        }
    }

    public function hapus($id) {
        $this->{$this->nama_model}->hapus_buku($id);
        redirect('buku');
    }
}
