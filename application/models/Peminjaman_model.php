<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $this->db->select('p.*, a.nama');
        $this->db->from('peminjaman p');
        $this->db->join('anggota a', 'a.id = p.member_id');
        $this->db->order_by('p.id', 'DESC');
        return $this->db->get()->result();
    }

    public function get_by_id($id)
    {
        $this->db->select('p.*, a.nama');
        $this->db->from('peminjaman p');
        $this->db->join('anggota a', 'a.id = p.member_id');
        $this->db->where('p.id', $id);
        return $this->db->get()->row();
    }

    public function insert($data)
    {
        return $this->db->insert('peminjaman', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('peminjaman', $data);
    }

    public function get_aktif()
    {
        $this->db->where('status', 'dipinjam');
        return $this->db->get('peminjaman')->result();
    }

    public function is_late($id)
    {
        $this->db->where('id', $id);
        $data = $this->db->get('peminjaman')->row();

        if (!$data) {
            return false;
        }

        return (date('Y-m-d') > $data->tanggal_jatuh_tempo);
    }
}
