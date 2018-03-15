<?php
/**
 *
 */
class model_deskripsi_sikap extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputdeskripsisikap(){
    $query = $this->db->get('tb_deskripsi_sikap');
    return $query->result();
  }
  public function input_deskripsi_sikap($jenis_deskripsi,$nilai,$deskripsi)
  {
    $data=array(

    'jenis_deskripsi'=>$jenis_deskripsi,
    'nilai'=>$nilai,
    'deskripsi'=>$deskripsi
    );
    $this->db->insert('tb_deskripsi_sikap',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_deskripsi_sikap($id_deskripsi_sikap){
    $this->db->from('tb_deskripsi_sikap');
    $this->db->where('id_deskripsi_sikap',$id_deskripsi_sikap);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_deskripsi_sikap($id_deskripsi_sikap,$jenis_deskripsi,$nilai,$deskripsi){
    $this->db->where('id_deskripsi_sikap',$id_deskripsi_sikap);
    $data=array(
    'jenis_deskripsi'=>$jenis_deskripsi,
    'nilai'=>$nilai,
    'deskripsi'=>$deskripsi
    );
    $query = $this->db->update('tb_deskripsi_sikap',$data);
    return $query;
  }
  // delete pertama
    public function delete_deskripsi_sikap($id_deskripsi_sikap)
    {
    $this->db->where('id_deskripsi_sikap',$id_deskripsi_sikap);
    $query = $this->db->delete('tb_deskripsi_sikap');
    return $query;
      }
}

 ?>
