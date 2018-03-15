<?php
/**
 *
 */
class model_nilai_sikap extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputnilaisikap(){
    $this->db->join('tb_siswa','tb_nilai_sikap.id_siswa=tb_siswa.id_siswa');
    $this->db->join('tb_deskripsi_sikap','tb_nilai_sikap.id_deskripsi_sikap=tb_deskripsi_sikap.id_deskripsi_sikap');
    $query = $this->db->get('tb_nilai_sikap');
    return $query->result();
  }
  public function input_nilai_sikap($id_siswa,$nilai_akhir,$id_deskripsi_sikap)
  {
    $data=array(

    'id_siswa'=>$id_siswa,
    'nilai_akhir'=>$nilai_akhir,
    'id_deskripsi_sikap'=>$id_deskripsi_sikap
    );
    $this->db->insert('tb_nilai_sikap',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_nilai_sikap($id_nilai_sikap){
    $this->db->from('tb_nilai_sikap');
    $this->db->where('id_nilai_sikap',$id_nilai_sikap);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_nilai_sikap($id_nilai_sikap,$id_siswa,$id_deskripsi_sikap,$nilai_akhir){
    $this->db->where('id_nilai_sikap',$id_nilai_sikap);
    $data=array(
    'id_nilai_sikap'=>$id_nilai_sikap,
    'id_siswa'=>$id_siswa,
    'id_deskripsi_sikap'=>$id_deskripsi_sikap,
    'nilai_akhir'=>$nilai_akhir
    );
    $query = $this->db->update('tb_nilai_sikap',$data);
    return $query;
  }
  // delete pertama
    public function delete_nilai_sikap($id_nilai_sikap)
    {
    $this->db->where('id_nilai_sikap',$id_nilai_sikap);
    $query = $this->db->delete('tb_nilai_sikap');
    return $query;
      }
}

 ?>
