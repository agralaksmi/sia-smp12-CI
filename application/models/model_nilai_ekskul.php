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
    $this->db->join('tb_siswa','tb_siswa.id_siswa=tb_nilai_ekskul.id_siswa');
    $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_siswa_pertahun=tb_nilai_ekskul.id_siswa_pertahun');
    $this->db->join('tb_ekskul','tb_ekskul.id_ekskul=tb_nilai_ekskul.id_ekskul');
    $this->db->join('tb_guru','tb_guru.id_guru=tb_ekskul.id_guru');
    $this->db->join('tb_kelas','tb_kelas.id_kelas=tb_nilai_ekskul.id_kelas');
    $query = $this->db->get();
    return $query->result();
  }
  public function get_inputnilaiekskulsearch($id_kelas){
    $this->db->from('tb_kelas');
    $this->db->join('tb_siswa','tb_siswa.id_siswa=tb_nilai_ekskul.id_siswa');
    $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_siswa_pertahun=tb_nilai_ekskul.id_siswa_pertahun');
    $this->db->join('tb_ekskul','tb_ekskul.id_ekskul=tb_nilai_ekskul.id_ekskul');
    $this->db->join('tb_guru','tb_guru.id_guru=tb_ekskul.id_guru');
    $this->db->join('tb_kelas','tb_kelas.id_kelas=tb_nilai_ekskul.id_kelas');
    $query = $this->db->get();
    return $query->result();
  }
  public function cari_siswa($id_kelas){
    $this->db->from('tb_siswa');
    $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_siswa=tb_siswa.id_siswa');
    $this->db->join('tb_kelas','tb_kelas.id_kelas=tb_siswa_pertahun.id_kelas');
    $this->db->where(array('tb_kelas.id_kelas' =>$id_kelas));
    $query=$this->db->get();
    return $query->result();
  }
  public function input_nilai_ekskul($id_siswa,$id_ekskul,$id_kelas,$id_siswa_pertahun,$nilai,$ket)
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
    'id_kelas'=>$id_kelas,
    'id_siswa_pertahun'=>$id_siswa_pertahun,
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
    $this->db->join('tb_siswa','tb_siswa.id_siswa=tb_nilai_ekskul.id_siswa');
    $this->db->where('id_nilai_ekskul',$id_nilai_ekskul);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_nilai_ekskul($id_nilai_ekskul,$id_ekskul,$nilai,$predikat,$ket){
    $this->db->where('id_nilai_ekskul',$id_nilai_ekskul);
    $data=array(
      'id_nilai_ekskul'=>$id_nilai_ekskul,
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
