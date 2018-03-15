<?php
/**
 *
 */
class model_hak_akses extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputhakakses(){
    $query = $this->db->get('tb_hak_akses');
    return $query->result();
  }
  public function input_hak_akses($username,$password,$nama,$hak_akses,$id_guru)
  {
    $data=array(
    'username'=>$username,
    'password'=>$password,
    'nama'=>$nama,
    'hak_akses'=>$hak_akses,
    'id_guru'=>$id_guru
    );
    $this->db->insert('tb_hak_akses',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_hak_akses($username){
    $this->db->from('tb_hak_akses');
    $this->db->where('username',$username);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_hak_akses($username,$password,$nama,$hak_akses,$id_guru){
    $this->db->where('username',$username);
    $data=array(
      // 'id_hak_akses'=>$id_hak_akses,
      'username'=>$username,
      'password'=>$password,
      'nama'=>$nama,
      'hak_akses'=>$hak_akses,
      'id_guru'=>$id_guru
    );
    $query = $this->db->update('tb_hak_akses',$data);
    return $query;
  }
  // delete pertama
    public function delete_hak_akses($username)
    {
    $this->db->where('username',$username);
    $query = $this->db->delete('tb_hak_akses');
    return $query;
      }
}

 ?>
