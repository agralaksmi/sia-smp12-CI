<?php
/**
 *
 */
class model_detail_ketrampilan extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputdetailketrampilan(){
    $this->db->join('tb_siswa','tb_detail_ketrampilan.id_siswa=tb_siswa.id_siswa');
    $this->db->join('tb_mapel','tb_detail_ketrampilan.id_mapel=tb_mapel.id_mapel');
    $this->db->join('tb_deskripsi_mapel','tb_detail_ketrampilan.id_deskripsi_mapel=tb_deskripsi_mapel.id_deskripsi_mapel');
    $query = $this->db->get('tb_detail_ketrampilan');
    return $query->result();
  }
  public function input_detail_ketrampilan($id_siswa,$id_mapel,$nilai_praktek,$nilai_folio,$nilai_proyek)
  {
    // hitung nilai
    $nilai_tugas = $nilai_praktek+$nilai_folio+$nilai_proyek;
    $nilai_tugas = ($nilai_tugas)/3;

    // bikin deskripsi
    if ($nilai_tugas >= 86 && $nilai_tugas <=100) {
      $nilai_huruf = 'A';
    } elseif ($nilai_tugas >= 78 && $nilai_tugas <=85) {
      $nilai_huruf = 'B';
    }elseif ($nilai_tugas >= 69 && $nilai_tugas <=77) {
      $nilai_huruf = 'C';
    }
    else {
      $nilai_huruf = 'D';
    }

    $this->db->from('tb_deskripsi_mapel');
    $this->db->where('jenis_deskripsi','Ketrampilan');
    $this->db->where('nilai',$nilai_huruf);
    $query_deskripsi = $this->db->get();
    $id_deskripsi = $query_deskripsi->row()->id_deskripsi_mapel;

    $data=array(
    'id_siswa'=>$id_siswa,
    'id_mapel'=>$id_mapel,
    'nilai_praktek'=>$nilai_praktek,
    'nilai_folio'=>$nilai_folio,
    'nilai_proyek'=>$nilai_proyek,
    'nilai_akhir'=>$nilai_tugas,
    'id_deskripsi_mapel'=>$id_deskripsi
    );
    $this->db->insert('tb_detail_ketrampilan',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_detail_ketrampilan($id_detail_ketrampilan){
    $this->db->from('tb_detail_ketrampilan');
    $this->db->where('id_detail_ketrampilan',$id_detail_ketrampilan);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_detail_ketrampilan($id_detail_ketrampilan,$id_siswa,$id_mapel,$nilai_praktek,$nilai_folio,$nilai_proyek){

    // hitung nilai
    $nilai_tugas = $nilai_praktek+$nilai_folio+$nilai_proyek;
    $nilai = ($nilai_tugas)/3;

    // bikin deskripsi
    if ($nilai >= 86 && $nilai <=100) {
      $nilai_huruf = 'A';
    } elseif ($nilai >= 78 && $nilai <=85) {
      $nilai_huruf = 'B';
    }
    else {
      $nilai_huruf = 'C';
    }
    $this->db->from('tb_deskripsi_mapel');
    $this->db->where('jenis_deskripsi','Ketrampilan');
    $this->db->where('nilai',$nilai_huruf);
    $query_deskripsi = $this->db->get();
    $id_deskripsi = $query_deskripsi->row()->id_deskripsi_mapel;


    $this->db->where('id_detail_ketrampilan',$id_detail_ketrampilan);
    $data=array(
      'id_detail_ketrampilan'=>$id_detail_ketrampilan,
      'id_siswa'=>$id_siswa,
      'id_mapel'=>$id_mapel,
      'nilai_praktek'=>$nilai_praktek,
      'nilai_folio'=>$nilai_folio,
      'nilai_proyek'=>$nilai_proyek,
      'nilai_akhir'=>$nilai,
      'id_deskripsi_mapel'=>$id_deskripsi
    );
    $query = $this->db->update('tb_detail_ketrampilan',$data);
    return $query;
  }
  // delete pertama
    public function delete_detail_ketrampilan($id_detail_ketrampilan)
    {
    $this->db->where('id_detail_ketrampilan',$id_detail_ketrampilan);
    $query = $this->db->delete('tb_detail_ketrampilan');
    return $query;
      }
}

 ?>
