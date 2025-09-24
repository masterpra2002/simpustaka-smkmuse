<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties] 

class Auth extends CI_Controller {
    public $benchmark;
    protected $hooks;
    public $config;
    public $session;
    public $form_validation;
    protected $log;
    protected $utf8;
    protected $uri;
    protected $router;
    public $output;
    protected $security;
    public $input;
    public $lang;
    public $db;

    public function __construct() {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index() {
        // Jika sudah login, langsung ke dashboard
        if ($this->session->userdata('logged_in')) {
            redirect('auth/dashboard');
        }

        $this->load->view('login');
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username', TRUE);
            $password = md5($this->input->post('password', TRUE));

            $user = $this->M_auth->cek_login($username, $password);

            if ($user) {
                $session = [
                    'username' => $user->username,
                    'role'     => $user->role,
                    'logged_in' => TRUE
                ];
                $this->session->set_userdata($session);
                redirect('auth/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah.');
                redirect('auth');
            }
        }
    }

    public function dashboard() {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }

        $this->load->view('dashboard');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
