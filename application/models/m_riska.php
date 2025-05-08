
<?php 
class M_riska extends CI_Model {
  public function get_data() {
    return $this->db->get('db_barang');
  }

public function tambah_barang($data,$table){
$this->db->insert($table,$data);

}
}
