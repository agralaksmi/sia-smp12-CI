<?php
/**
*
*/
class model_detail_pengetahuan extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputdetailpengetahuan(){
    $this->db->from('tb_kelas');
        $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_kelas = tb_kelas.id_kelas');
        $this->db->join('tb_detail_pengetahuan','tb_siswa_pertahun.id_siswa_pertahun=tb_detail_pengetahuan.id_siswa_pertahun','right');
        $this->db->join('tb_deskripsi_mapel','tb_detail_pengetahuan.id_deskripsi_mapel=tb_deskripsi_mapel.id_deskripsi_mapel');
        $this->db->join('tb_siswa','tb_siswa.id_siswa = tb_siswa_pertahun.id_siswa');
        $this->db->join('tb_wali_kelas','tb_wali_kelas.id_kelas = tb_kelas.id_kelas');
        $this->db->join('tb_guru','tb_guru.id_guru = tb_wali_kelas.id_guru');
        $this->db->join('tb_mapel','tb_mapel.id_kelas = tb_kelas.id_kelas');
        $query = $this->db->get();
        return $query->result();
  }
  public function input_cek_pengetahuan($id_kelas,$id_mapel){
    $this->db->from('tb_kelas');
    $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_kelas = tb_kelas.id_kelas');
    //$this->db->join('tb_detail_pengetahuan','tb_siswa_pertahun.id_siswa_pertahun=tb_detail_pengetahuan.id_siswa_pertahun');
    //$this->db->join('tb_deskripsi_mapel','tb_detail_pengetahuan.id_deskripsi_mapel=tb_deskripsi_mapel.id_deskripsi_mapel');
    $this->db->join('tb_siswa','tb_siswa.id_siswa = tb_siswa_pertahun.id_siswa');
    $this->db->join('tb_wali_kelas','tb_wali_kelas.id_kelas = tb_kelas.id_kelas');
    $this->db->join('tb_guru','tb_guru.id_guru = tb_wali_kelas.id_guru');
    $this->db->join('tb_mapel','tb_mapel.id_kelas = tb_kelas.id_kelas');

    $this->db->where('tb_kelas.id_kelas',$id_kelas);
    $this->db->where('tb_mapel.id_mapel',$id_mapel);
    $query = $this->db->get();
    //print_r($query->result());die();
    return $query->result();
  }
  public function input_detail_pengetahuan($id_wali_kelas,$id_kelas,$id_siswa,$id_siswa_pertahun,$id_mapel,$tugas1,$tugas2,$tugas3,$tugas4,$uts,$uas)
  {
    // hitung nilai
    $nilai_tugas = $tugas1+$tugas2+$tugas3+$tugas4;
    $nilai_tugas = ($nilai_tugas)/4;
    $nilai = $nilai_tugas+$uts+$uas;
    $nilai = ($nilai/3);


    // bikin deskripsi
    if ($nilai >= 86 && $nilai <=100) {
      $nilai_huruf = 'A';
    } elseif ($nilai >= 78 && $nilai <=85) {
      $nilai_huruf = 'B';
    }elseif ($nilai >= 69 && $nilai <=77) {
      $nilai_huruf = 'C';
    }else {
      $nilai_huruf = 'D';
    }
    $this->db->from('tb_deskripsi_mapel');
    $this->db->where('jenis_deskripsi','Pengetahuan');
    $this->db->where('nilai',$nilai_huruf);
    $query_deskripsi = $this->db->get();
    $id_deskripsi = $query_deskripsi->row()->id_deskripsi_mapel;


    $data=array(
      // 'id_detail_pengetahuan'=>$id_detail_pengetahuan,
      'id_wali_kelas'=>$id_wali_kelas,
      'id_siswa'=>$id_siswa,
      'id_siswa_pertahun'=>$id_siswa_pertahun,
      'id_mapel'=>$id_mapel,
      'id_kelas'=>$id_kelas,
      'tugas1'=>$tugas1,
      'tugas2'=>$tugas2,
      'tugas3'=>$tugas3,
      'tugas4'=>$tugas4,
      'uts'=>$uts,
      'uas'=>$uas,
      'ulangan_harian'=>$nilai,
      'id_deskripsi_mapel'=>$id_deskripsi
    );
    $query=$this->db->insert('tb_detail_pengetahuan',$data);
    return $query;
  }

  // Awal Model edit
  //pertama
  public function ubah_detail_pengetahuan($id_detail_pengetahuan){
    $this->db->from('tb_detail_pengetahuan');
    $this->db->where('id_detail_pengetahuan',$id_detail_pengetahuan);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_detail_pengetahuan($id_detail_pengetahuan,$id_siswa,$id_wali_kelas,$id_kelas,$id_mapel,$ulangan_harian,$tugas1,$tugas2,$tugas3,$tugas4,$uts,$uas){
    // hitung nilai
    $nilai_tugas = $tugas1+$tugas2+$tugas3+$tugas4;
    $nilai_tugas = ($nilai_tugas)/4;
    $nilai = $nilai_tugas+$uts+$uas;
    $nilai = ($nilai/3);


    // bikin deskripsi
    if ($nilai >= 86 && $nilai <=100) {
      $nilai_huruf = 'A';
    } elseif ($nilai >= 78 && $nilai <=85) {
      $nilai_huruf = 'B';
    }elseif ($nilai >= 69 && $nilai <=77) {
      $nilai_huruf = 'C';
    }else {
      $nilai_huruf = 'D';
    }
    $this->db->from('tb_deskripsi_mapel');
    $this->db->where('jenis_deskripsi','Pengetahuan');
    $this->db->where('nilai',$nilai_huruf);
    $query_deskripsi = $this->db->get();
    $id_deskripsi = $query_deskripsi->row()->id_deskripsi_mapel;

    $this->db->where('id_detail_pengetahuan',$id_detail_pengetahuan);
    $data=array(
      // 'id_detail_pengetahuan'=>$id_detail_pengetahuan,
      'id_wali_kelas'=>$id_wali_kelas,
      'id_siswa'=>$id_siswa,
      'id_mapel'=>$id_mapel,
      'id_kelas'=>$id_kelas,
      'tugas1'=>$tugas1,
      'tugas2'=>$tugas2,
      'tugas3'=>$tugas3,
      'tugas4'=>$tugas4,
      'uts'=>$uts,
      'uas'=>$uas,
      'ulangan_harian'=>$nilai,
      'id_deskripsi_mapel'=>$id_deskripsi
    );
    $query = $this->db->update('tb_detail_pengetahuan',$data);
    die($this->db->last_query());
    return $query;
  }
  // delete pertama
  public function delete_detail_pengetahuan($id_detail_pengetahuan)
  {
    $this->db->where('id_detail_pengetahuan',$id_detail_pengetahuan);
    $query = $this->db->delete('tb_detail_pengetahuan');
    return $query;
  }
}

?>
