<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function get_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result();
    }

    public function getby_user($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.id_user', $id);
        return $this->db->get()->result();
    }

    public function simpan_data()
    {
        $data = array(
            'name_user' => $_POST['name'],
            'address_user' => $_POST["address"],
            'telp_user' => $_POST["telp"],
        );
        return $this->db->insert('user', $data);
    }

    public function update_data()
    {
        $data = array(
            'name_user' => $_POST['name'],
            'address_user' => $_POST["address"],
            'telp_user' => $_POST["telp"],
        );

        return $this->db->update('user', $data, array('id_user' => $_POST['id_user']));
    }

    public function hapus($id_user)
    {
        return $this->db->delete("user", array("id_user" => $id_user));
    }
}
