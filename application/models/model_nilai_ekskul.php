<?php
/**
 *
 */
class model_nilai_ekskul extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputnilaiekskul(){
    $this->db->from('tb_nilai_ekskul');
    $this->db->join('tb_siswa','tb_nilai_ekskul.id_siswa=tb_siswa.id_siswa');
    $this->db->join('tb_ekskul','tb_nilai_ekskul.id_ekskul=tb_ekskul.id_ekskul');
    $query = $this->db->get();
    return $query->result();
  }
  public function input_nilai_ekskul($id_siswa,$id_ekskul,$nilai,$predikat,$ket)
  {
    // bikin deskripsi
    if ($nilai >= 86 && $nilai <=100) {
      $predikat = 'A';
    } elseif ($nilai >= 78 && $nilai<=85) {
      $predikat = 'B';
    }
    else {
      $predikat= 'C';
    }
    $data=array(

    'id_siswa'=>$id_siswa,
    'id_ekskul'=>$id_ekskul,
    'nilai'=>$nilai,
    'predikat'=>$predikat,
    'ket'=>$ket
    );
    $this->db->insert('tb_nilai_ekskul',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_nilai_ekskul($id_nilai_ekskul){
    $this->db->from('tb_nilai_ekskul');
    $this->db->where('id_nilai_ekskul',$id_nilai_ekskul);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_nilai_ekskul($id_nilai_ekskul,$id_siswa,$id_ekskul,$nilai,$predikat,$ket){
    $this->db->where('id_nilai_ekskul',$id_nilai_ekskul);
    $data=array(
      'id_nilai_ekskul'=>$id_nilai_ekskul,
      'id_siswa'=>$id_siswa,
      'id_ekskul'=>$id_ekskul,
      'nilai'=>$nilai,
      'predikat'=>$predikat,
      'ket'=>$ket
    );
    $query = $this->db->update('tb_nilai_ekskul',$data);
    return $query;
  }
  // delete pertama
    public function delete_nilai_ekskul($id_nilai_ekskul)
    {
    $this->db->where('id_nilai_ekskul',$id_nilai_ekskul);
    $query = $this->db->delete('tb_nilai_ekskul');
    return $query;
      }
}

 ?>
