<?php
/**
 *
 */
class model_guru extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputguru(){
    $query = $this->db->get('tb_guru');
    return $query->result();
  }
  public function input_guru($nip,$nama,$jk,$tanggal_lahir,$golongan_ruang,$tingkatan,$tugas_tertentu)
  {
    $data=array(

    'nip'=>$nip,
    'nama_guru'=>$nama,
    'jenis_kelamin'=>$jk,
    'tanggal_lahir'=>$tanggal_lahir,
    'golongan_ruang'=>$golongan_ruang,
    'tingkatan'=>$tingkatan,
    'tugas_tertentu'=>$tugas_tertentu
    );
    $this->db->insert('tb_guru',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_guru($id_guru){
    $this->db->from('tb_guru');
    $this->db->where('id_guru',$id_guru);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_guru($id_guru,$nip,$nama,$jk,$tanggal_lahir,$golongan_ruang,$tingkatan,$tugas_tertentu){
    $this->db->where('id_guru',$id_guru);
    $data=array(
    'nip'=>$nip,
    'nama_guru'=>$nama,
    'jenis_kelamin'=>$jk,
    'tanggal_lahir'=>$tanggal_lahir,
    'golongan_ruang'=>$golongan_ruang,
    'tingkatan'=>$tingkatan,
    'tugas_tertentu'=>$tugas_tertentu
    );
    $query = $this->db->update('tb_guru',$data);
    return $query;
  }
  // delete pertama
    public function delete_guru($id_guru)
    {
    $this->db->where('id_guru',$id_guru);
    $query = $this->db->delete('tb_guru');
    return $query;
      }
}

 ?>
