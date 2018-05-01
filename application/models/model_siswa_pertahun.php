<?php
/**
 *
 */
class model_siswa_pertahun extends CI_Model
{
  function __construct()
  {
    $this->load->database();
  }
  public function get_inputsiswapertahun(){
    $this->db->join('tb_siswa','tb_siswa_pertahun.id_siswa=tb_siswa.id_siswa');
    $this->db->join('tb_kelas','tb_siswa_pertahun.id_kelas=tb_kelas.id_kelas');
    $this->db->join('tb_tahun_ajaran','tb_siswa_pertahun.id_tahun_ajaran=tb_tahun_ajaran.id_tahun_ajaran');
    $this->db->where(array('status'=>"aktif"));
    $query = $this->db->get('tb_siswa_pertahun');
    return $query->result();
  }
  public function select_id_siswa($id_siswa_pertahun=null)
  {
    $this->db->from('tb_siswa_pertahun');
    if($id_siswa_pertahun!=null){
      $this->db->where('id_siswa_pertahun',$id_siswa_pertahun);
    }
    return $this->db->get()->row();
  }
  public function input_siswa_pertahun($id_siswa,$id_kelas,$id_tahun_ajaran)
  {
    $data=array(
      'id_siswa'=>$id_siswa,
      'id_kelas'=>$id_kelas,
      'id_tahun_ajaran'=>$id_tahun_ajaran
    );
    $this->db->trans_start();
    $query['result'] = $this->db->insert('tb_siswa_pertahun',$data);
    $query['last_id'] = $this->db->insert_id();
    $this->db->trans_complete();
    return $query;
  }
  public function select_walikelas_siswa($id_kelas=null){
    $this->db->from('tb_wali_kelas');
    if($id_kelas!=null){
      $this->db->where('id_kelas',$id_kelas);
    }
    return $this->db->get()->row();
  }
  // Awal Model edit
  //pertama
  public function ubah_siswa_pertahun($id_siswa_pertahun){
    $this->db->from('tb_siswa_pertahun');
    $this->db->where('id_siswa_pertahun',$id_siswa_pertahun);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_siswa_pertahun($id_siswa_pertahun,$id_siswa,$id_kelas,$id_tahun_ajaran){
    $this->db->where('id_siswa_pertahun',$id_siswa_pertahun);
    $data=array(
    'id_siswa_pertahun'=>$id_siswa_pertahun,
    'id_siswa'=>$id_siswa,
    'id_kelas'=>$id_kelas,
    'id_tahun_ajaran'=>$id_tahun_ajaran
    );
    $query = $this->db->update('tb_siswa_pertahun',$data);
    return $query;
  }
  // delete pertama
  public function delete_siswa_pertahun($id_siswa_pertahun)
  {
    $this->db->where('id_siswa_pertahun',$id_siswa_pertahun);
    $query = $this->db->delete('tb_siswa_pertahun');
    return $query;
  }
}

 ?>
