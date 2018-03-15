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
    $query = $this->db->get('tb_siswa_pertahun');
    return $query->result();
  }
  public function input_siswa_pertahun($id_siswa,$id_kelas,$id_tahun_ajaran)
  {
    $data=array(
      'id_siswa'=>$id_siswa,
      'id_kelas'=>$id_kelas,
      'id_tahun_ajaran'=>$id_tahun_ajaran
    );
    $this->db->insert('tb_siswa_pertahun',$data);

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
