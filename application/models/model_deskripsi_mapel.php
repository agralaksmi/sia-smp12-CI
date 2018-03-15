<?php
/**
 *
 */
class model_deskripsi_mapel extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputdeskripsimapel(){
    $this->db->from('tb_deskripsi_mapel');
    $this->db->join('tb_mapel','tb_deskripsi_mapel.id_mapel=tb_mapel.id_mapel');
    $query = $this->db->get();
    return $query->result();
  }

  public function input_deskripsi_mapel($id_mapel,$jenis_deskripsi,$nilai,$deskripsi)
  {
    $data=array(
    'id_mapel'=>$id_mapel,
    'jenis_deskripsi'=>$jenis_deskripsi,
    'nilai'=>$nilai,
    'deskripsi'=>$deskripsi
    );
    $this->db->insert('tb_deskripsi_mapel',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_deskripsi_mapel($id_deskripsi_mapel){
    $this->db->from('tb_deskripsi_mapel');
    $this->db->where('id_deskripsi_mapel',$id_deskripsi_mapel);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_deskripsi_mapel($id_deskripsi_mapel,$id_mapel,$jenis_deskripsi,$nilai,$deskripsi){
    $this->db->where('id_deskripsi_mapel',$id_deskripsi_mapel);
    $data=array(
    'id_deskripsi_mapel'=>$id_deskripsi_mapel,
    'id_mapel'=>$id_mapel,
    'jenis_deskripsi'=>$jenis_deskripsi,
    'nilai'=>$nilai,
    'deskripsi'=>$deskripsi
    );
    $query = $this->db->update('tb_deskripsi_mapel',$data);
    return $query;
  }
  // delete pertama
    public function delete_deskripsi_mapel($id_deskripsi_mapel)
    {
    $this->db->where('id_deskripsi_mapel',$id_deskripsi_mapel);
    $query = $this->db->delete('tb_deskripsi_mapel');
    return $query;
      }
}

 ?>
