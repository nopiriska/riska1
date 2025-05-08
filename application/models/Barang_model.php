<?php

class Barang_model extends CI_Model {

    private $table = 'db_barang'; // Specify the table name

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_barang()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert_barang($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function get_barang_by_id($id)
    {
        return $this->db->get_where($this->table, array('id_barang' => $id))->row();
    }

    public function update_barang($id, $data)
    {
        $this->db->where('id_barang', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete_barang($id)
    {
        $this->db->where('id_barang', $id);
        return $this->db->delete($this->table);
    }
}