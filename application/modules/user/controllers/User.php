<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['data_user'] = $this->M_user->get_user();
        $this->load->view('vw_user', $data);
    }

    public function edit_user($id)
    {
        $data['data_user'] = $this->M_user->getby_user($id);
        $this->load->view('vw_edituser', $data);
    }

    public function tambah_user()
    {
        $this->load->view('vw_tambahuser');
    }

    public function simpan_data_user()
    {
        if ($this->M_user->simpan_data()) {
            redirect(site_url('User'));
        }
    }

    public function update_data_user()
    {
        if ($this->M_user->update_data()) {
            redirect(site_url('User'));
        }
    }

    public function hapus_data_user($id_user)
    {
        if ($this->M_user->hapus($id_user)) {
            redirect(site_url('User'));
        }
    }
}
