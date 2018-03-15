<?php
/**
 *
 */
class model_wali_kelas extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputwali_kelas(){
    $this->db->join('tb_guru','tb_wali_kelas.id_guru=tb_guru.id_guru');
    $this->db->join('tb_kelas','tb_wali_kelas.id_kelas=tb_kelas.id_kelas');
    $this->db->join('tb_tahun_ajaran','tb_wali_kelas.id_tahun_ajaran=tb_tahun_ajaran.id_tahun_ajaran');
    $query = $this->db->get('tb_wali_kelas');
    return $query->result();
  }


  public function input_wali_kelas($id_guru,$id_kelas,$semester,$tahun_ajaran)
  {
    $data=array(
      'id_guru'=>$id_guru,
      'id_kelas'=>$id_kelas,
      'semester'=>$semester,
      'id_tahun_ajaran'=>$tahun_ajaran
    );
    var_dump($data);
    $this->db->insert('tb_wali_kelas',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_wali_kelas($id_wali_kelas){
    $this->db->from('tb_wali_kelas');
    $this->db->where('id_wali_kelas',$id_wali_kelas);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_wali_kelas($id_wali_kelas,$id_guru,$id_kelas,$semester,$id_tahun_ajaran){
    $this->db->where('id_wali_kelas',$id_wali_kelas);
    $data=array(
    'id_wali_kelas'=>$id_wali_kelas,
    'id_guru'=>$id_guru,
    'id_kelas'=>$id_kelas,
    'semester'=>$semester,
    'id_tahun_ajaran'=>$id_tahun_ajaran
    );
    $query = $this->db->update('tb_wali_kelas',$data);
    return $query;
  }
  // delete pertama
  public function delete_wali_kelas($id_wali_kelas)
  {
    $this->db->where('id_wali_kelas',$id_wali_kelas);
    $query = $this->db->delete('tb_wali_kelas');
    return $query;
  }
}

 ?>
