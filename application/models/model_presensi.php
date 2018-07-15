<?php
class model_presensi extends CI_Model
{
  function __construct()
  {
    $this->load->database();
  }
  public function get_inputpresensi(){
    $this->db->from('tb_presensi');
    $this->db->join('tb_siswa','tb_siswa.id_siswa=tb_presensi.id_siswa');
    $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_siswa_pertahun=tb_presensi.id_siswa_pertahun');
    $this->db->join('tb_wali_kelas','tb_wali_kelas.id_wali_kelas=tb_presensi.id_wali_kelas');
    $this->db->join('tb_kelas','tb_presensi.id_kelas=tb_kelas.id_kelas');
    $this->db->join('tb_guru','tb_guru.id_guru=tb_wali_kelas.id_guru');
    // $this->db->join('tb_kelas','tb_kelas.id_kelas=tb_wali_kelas.id_kelas');
    $query = $this->db->get();
    return $query->result();
  }
public function get_inputpresensisearch($id_kelas){
  $this->db->from('tb_presensi');
  $this->db->join('tb_siswa','tb_siswa.id_siswa=tb_presensi.id_siswa');
  $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_siswa_pertahun=tb_presensi.id_siswa_pertahun');
  $this->db->join('tb_wali_kelas','tb_wali_kelas.id_wali_kelas=tb_presensi.id_wali_kelas');
  $this->db->join('tb_kelas','tb_presensi.id_kelas=tb_kelas.id_kelas');
  $this->db->join('tb_guru','tb_guru.id_guru=tb_wali_kelas.id_guru');
  // $this->db->join('tb_kelas','tb_kelas.id_kelas=tb_wali_kelas.id_kelas');
  $this->db->where('tb_kelas.id_kelas',$id_kelas);
  $query = $this->db->get();
  return $query->result();

}

  public function input_presensi($id_wali_kelas,$id_kelas,$id_siswa,$id_siswa_pertahun)
  {
    $data=array(
      'id_wali_kelas'=>$id_wali_kelas,
      'id_siswa'=>$id_siswa,
      'id_siswa_pertahun'=>$id_siswa_pertahun,
      'id_kelas'=>$id_kelas,
      'sakit'=>'0',
      'ijin'=>'0',
      'tanpa_ket'=>'0'
    );
    return $this->db->insert('tb_presensi',$data);
  }

  // Awal Model edit
  //pertama
  public function ubah_presensi($id_presensi){
    $this->db->from('tb_presensi');
    $this->db->join('tb_siswa','tb_presensi.id_siswa=tb_siswa.id_siswa');
    $this->db->where('id_presensi',$id_presensi);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_presensi($id_presensi,$sakit,$ijin,$tanpa_ket){
    $this->db->where('id_presensi',$id_presensi);
    $data=array(
      'sakit'=>$sakit,
      'ijin'=>$ijin,
      'tanpa_ket'=>$tanpa_ket
    );
    $query = $this->db->update('tb_presensi',$data);
    return $query;
  }
  // delete pertama
  public function delete_presensi($id_presensi)
  {
    $this->db->where('id_presensi',$id_presensi);
    $query = $this->db->delete('tb_presensi');
    return $query;
  }
}
?>
