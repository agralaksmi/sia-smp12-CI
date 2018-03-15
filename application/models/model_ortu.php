<?php
/**
 *
 */
class model_ortu extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputortu(){
    $this->db->from('tb_ortu');
    $this->db->join('tb_siswa','tb_ortu.id_siswa=tb_siswa.id_siswa');
    $query = $this->db->get();
    return $query->result();
  }
  public function input_ortu($id_siswa,$status,$nama_ortu,$tahun_lahir,$jenjang_pendidikan,$pekerjaan,$penghasilan,$nik)
  {
    $data=array(

    'id_siswa'=>$id_siswa,
    'status'=>$status,
    'nama_ortu'=>$nama_ortu,
    'tahun_lahir'=>$tahun_lahir,
    'jenjang_pendidikan'=>$jenjang_pendidikan,
    'pekerjaan'=>$pekerjaan,
    'penghasilan'=>$penghasilan,
    'nik'=>$nik
    );
    $this->db->insert('tb_ortu',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_ortu($id_ortu){
    $this->db->from('tb_ortu');
    $this->db->where('id_ortu',$id_ortu);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_ortu($id_ortu,$id_siswa,$status,$nama_ortu,$tahun_lahir,$jenjang_pendidikan,$pekerjaan,$penghasilan,$nik){
    $this->db->where('id_ortu',$id_ortu);
    $data=array(
    'id_siswa'=>$id_siswa,
    'status'=>$status,
    'nama_ortu'=>$nama_ortu,
    'tahun_lahir'=>$tahun_lahir,
    'jenjang_pendidikan'=>$jenjang_pendidikan,
    'pekerjaan'=>$pekerjaan,
    'penghasilan'=>$penghasilan,
    'nik'=>$nik
    );
    $query = $this->db->update('tb_ortu',$data);
    return $query;
  }
  // delete pertama
    public function delete_ortu($id_ortu)
    {
    $this->db->where('id_ortu',$id_ortu);
    $query = $this->db->delete('tb_ortu');
    return $query;
      }
}

 ?>
