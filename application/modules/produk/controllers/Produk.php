<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_produk');
    }
    function index()
    {
        $this->load->view('vw_produk');
    }

    function data_barang()
    {
        $data = $this->M_produk->barang_list();
        echo json_encode($data);
    }

    function get_barang()
    {
        $kobar = $this->input->get('id');
        $data = $this->M_produk->get_barang_by_kode($kobar);
        echo json_encode($data);
    }

    function simpan_barang()
    {
        $kobar = $this->input->post('kobar');
        $nabar = $this->input->post('nabar');
        $harga = $this->input->post('harga');
        $data = $this->M_produk->simpan_barang($kobar, $nabar, $harga);
        echo json_encode($data);
    }

    function update_barang()
    {
        $kobar = $this->input->post('kobar');
        $nabar = $this->input->post('nabar');
        $harga = $this->input->post('harga');
        $data = $this->M_produk->update_barang($kobar, $nabar, $harga);
        echo json_encode($data);
    }

    function hapus_barang()
    {
        $kobar = $this->input->post('kode');
        $data = $this->M_produk->hapus_barang($kobar);
        echo json_encode($data);
    }
}
