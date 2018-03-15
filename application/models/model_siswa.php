<?php
/**
 *
 */
class model_siswa extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputsiswa(){
    $query = $this->db->get('tb_siswa');
    return $query->result();
  }
  public function input_siswa($nisn,$nama_siswa,$jk,$tempat_lahir,$tanggal_lahir,$agama,$alamat,$rt,$rw,$dusun,$kelurahan,$kode_pos,$jenis_tinggal,$telepon,$email)
  {
    $data=array(
    'nisn'=>$nisn,
    'nama_siswa'=>$nama_siswa,
    'jenis_kelamin'=>$jk,
    'tempat_lahir'=>$tempat_lahir,
    'tanggal_lahir'=>$tanggal_lahir,
    'agama'=>$agama,
    'alamat'=>$alamat,
    'rt'=>$rt,
    'rw'=>$rw,
    'dusun'=>$dusun,
    'kelurahan'=>$kelurahan,
    'kode_pos'=>$kode_pos,
    'jenis_tinggal'=>$jenis_tinggal,
    'telepon'=>$telepon,
    'email'=>$email
    );
    $this->db->insert('tb_siswa',$data);
  }

  // public function input_siswa_lokal($nis,$tahun,$id_kelas)
  // {
  //   $data=array(
  //   'nis'=>$nis,
  //   'tahun'=>$tahun,
  //   'id_kelas'=>$id_kelas
  //   );
  //   $this->db->insert('tb_siswa_lokal',$data);
  //
  // }

  // Awal Model edit
  //pertama
  public function ubah_siswa($id_siswa){
    $this->db->from('tb_siswa');
    $this->db->where('id_siswa',$id_siswa);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh edit siswa
  public function update_siswa($id_siswa,$nisn,$nama_siswa,$jk,$tempat_lahir,$tanggal_lahir,$agama,$alamat,$rt,$rw,$dusun,$kelurahan,$kode_pos,$jenis_tinggal,$telepon,$email){
    $this->db->where('id_siswa',$id_siswa);
    $data=array(
      'id_siswa'=>$id_siswa,
      'nisn'=>$nisn,
      'nama_siswa'=>$nama_siswa,
      'jenis_kelamin'=>$jk,
      'tempat_lahir'=>$tempat_lahir,
      'tanggal_lahir'=>$tanggal_lahir,
      'agama'=>$agama,
      'alamat'=>$alamat,
      'rt'=>$rt,
      'rw'=>$rw,
      'dusun'=>$dusun,
      'kelurahan'=>$kelurahan,
      'kode_pos'=>$kode_pos,
      'jenis_tinggal'=>$jenis_tinggal,
      'telepon'=>$telepon,
      'email'=>$email
    );
    $query = $this->db->update('tb_siswa',$data);
    return $query;
  }
  // delete pertama
  public function delete_siswa($id_siswa)
  {
    $this->db->where('id_siswa',$id_siswa);
    $query = $this->db->delete('tb_siswa');
    return $query;
  }
}
