<?php
/**
 * model buat tabel akun
 */
class Akun_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function cek_akun($username,$password)
  {
    $this->db->from('tb_hak_akses');
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query = $this->db->get();
    $data = $query->row();
    $ada_data = count($data) > 0;
    return $ada_data;
  }

  public function get_akun($username,$password)
  {
    $this->db->from('tb_hak_akses');
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query = $this->db->get();
    $data = $query->row();
    return $data;
  }

  public function set_akun($username,$password)
  {
    $data = array(
      'username' => $username,
      'password' => $password,
      'hak_akses' => 'ortu'
    );
    return $this->db->insert('tb_hak_akses',$data);
  }
}
