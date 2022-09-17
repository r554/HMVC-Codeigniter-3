<?php
class M_produk extends CI_Model
{

    function barang_list()
    {
        $hasil = $this->db->query("SELECT * FROM tb_barang");
        return $hasil->result();
    }

    function simpan_barang($kobar, $nabar, $harga)
    {
        $hasil = $this->db->query("INSERT INTO tb_barang (id_barang,nama_barang,harga_barang)VALUES('$kobar','$nabar','$harga')");
        return $hasil;
    }

    function get_barang_by_kode($kobar)
    {
        $hsl = $this->db->query("SELECT * FROM tb_barang WHERE id_barang='$kobar'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'id_barang' => $data->id_barang,
                    'nama_barang' => $data->nama_barang,
                    'harga_barang' => $data->harga_barang,
                );
            }
        }
        return $hasil;
    }

    function update_barang($kobar, $nabar, $harga)
    {
        $hasil = $this->db->query("UPDATE tb_barang SET nama_barang='$nabar',harga_barang='$harga' WHERE id_barang='$kobar'");
        return $hasil;
    }

    function hapus_barang($kobar)
    {
        $hasil = $this->db->query("DELETE FROM tb_barang WHERE id_barang='$kobar'");
        return $hasil;
    }
}
