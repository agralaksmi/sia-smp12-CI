<?php
/**
 *
 */
class model_mapel extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputmapel(){
    // $this->db->join('tb_guru','tb_mapel.id_guru=tb_guru.id_guru');
    $this->db->join('tb_kelas','tb_mapel.id_kelas=tb_kelas.id_kelas');
    $query = $this->db->get('tb_mapel');
    return $query->result();
  }
  public function get_inputmapel2($kd){
    // $this->db->join('tb_guru','tb_mapel.id_guru=tb_guru.id_guru');
    $this->db->join('tb_kelas','tb_mapel.id_kelas=tb_kelas.id_kelas')->where('tb_guru.id_guru',$kd);
    $query = $this->db->get('tb_mapel');
    return $query->result();
  }
  public function input_mapel($id_kelas,$nama_mapel,$kelompok,$kkm)
  {
    $data=array(
    // 'id_guru'=>$id_guru,
    'id_kelas'=>$id_kelas,
    'nama_mapel'=>$nama_mapel,
    'kelompok'=>$kelompok,
    'kkm'=>$kkm
    );
    $this->db->insert('tb_mapel',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_mapel($id_mapel){
    $this->db->from('tb_mapel');
    $this->db->where('id_mapel',$id_mapel);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_mapel($id_mapel,$id_kelas,$nama_mapel,$kelompok,$kkm){
    $this->db->where('id_mapel',$id_mapel);
    $data=array(
      'id_mapel'=>$id_mapel,
      'id_kelas'=>$id_kelas,
      'nama_mapel'=>$nama_mapel,
      'kelompok'=>$kelompok,
      'kkm'=>$kkm
    );
    $query = $this->db->update('tb_mapel',$data);
    return $query;
  }
  // delete pertama
    public function delete_mapel($id_mapel)
    {
    $this->db->where('id_mapel',$id_mapel);
    $query = $this->db->delete('tb_mapel');
    return $query;
      }
}

 ?>
