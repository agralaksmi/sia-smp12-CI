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
  public function update_detail_ketrampilan_new($id,$value,$modul){
    $this->db->where(array("id_detail_ketrampilan"=>$id));
    $this->db->update("tb_detail_ketrampilan",array($modul=>$value));
  }
  public function get_inputdetailketrampilan(){
    $this->db->from('tb_detail_ketrampilan');
        $this->db->join('tb_mapel','tb_mapel.id_mapel = tb_detail_ketrampilan.id_mapel');
        $this->db->join('tb_siswa','tb_siswa.id_siswa = tb_detail_ketrampilan.id_siswa');
        $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_siswa_pertahun = tb_detail_ketrampilan.id_siswa_pertahun');
        $this->db->join('tb_wali_kelas','tb_wali_kelas.id_wali_kelas = tb_detail_ketrampilan.id_wali_kelas');
        $this->db->join('tb_guru','tb_guru.id_guru = tb_wali_kelas.id_guru');
        $this->db->join('tb_kelas','tb_kelas.id_kelas = tb_siswa_pertahun.id_kelas');
        $this->db->join('tb_deskripsi_mapel','tb_deskripsi_mapel.id_deskripsi_mapel = tb_detail_ketrampilan.id_deskripsi_mapel','left');
        $query = $this->db->get();
        return $query->result();
  }
  public function get_inputdetailketrampilansearch($id_kelas,$id_mapel){
    $this->db->from('tb_detail_ketrampilan');
        $this->db->join('tb_mapel','tb_mapel.id_mapel = tb_detail_ketrampilan.id_mapel');
        $this->db->join('tb_siswa','tb_siswa.id_siswa = tb_detail_ketrampilan.id_siswa');
        $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_siswa_pertahun = tb_detail_ketrampilan.id_siswa_pertahun');
        $this->db->join('tb_wali_kelas','tb_wali_kelas.id_wali_kelas = tb_detail_ketrampilan.id_wali_kelas');
        $this->db->join('tb_guru','tb_guru.id_guru = tb_wali_kelas.id_guru');
        $this->db->join('tb_kelas','tb_kelas.id_kelas = tb_siswa_pertahun.id_kelas');
        $this->db->join('tb_deskripsi_mapel','tb_deskripsi_mapel.id_deskripsi_mapel = tb_detail_ketrampilan.id_deskripsi_mapel','left');
        $this->db->where('tb_kelas.id_kelas',$id_kelas);
        $this->db->like('tb_mapel.nama_mapel',$id_mapel);
        //$this->db->where('tb_mapel.id_mapel',$id_mapel);
        $query = $this->db->get();
        return $query->result();
  }
  public function insert_siswa_pertahun_detail_ketrampilan($id_wali_kelas,$id_siswa,$id_kelas,$id_siswa_pertahun,$id_mapel)
  {
    $data=array(
      'id_wali_kelas'=>$id_wali_kelas,
      'id_siswa'=>$id_siswa,
      'id_siswa_pertahun'=>$id_siswa_pertahun,
      'id_mapel'=>$id_mapel,
      'id_kelas'=>$id_kelas,
      'nilai_praktek'=>'0',
      'nilai_folio'=>'0',
      'nilai_proyek'=>'0',
      'nilai_akhir'=>'0',
      'id_deskripsi_mapel'=>'0'
    );
    $query=$this->db->insert('tb_detail_ketrampilan',$data);
    return $query;
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
  public function update_detail_ketrampilan($id_detail_ketrampilan,$nilai_praktek,$nilai_folio,$nilai_proyek){

    // hitung nilai
    $nilai= $nilai_praktek+$nilai_folio+$nilai_proyek;
    $nilai = ($nilai/3);
    $nilai_baru = round($nilai,0);

    if ($nilai_baru >= 86 && $nilai_baru <=100) {
      $nilai_huruf = 'A';
    } elseif ($nilai_baru >= 78 && $nilai_baru <=85) {
      $nilai_huruf = 'B';
    }elseif ($nilai_baru >= 69 && $nilai_baru <=77) {
      $nilai_huruf = 'C';
    }else {
      $nilai_huruf = 'D';
    }
    $this->db->from('tb_deskripsi_mapel');
    $this->db->where('jenis_deskripsi','Pengetahuan');
    $this->db->where('nilai',$nilai_huruf);
    $query_deskripsi = $this->db->get();
    $id_deskripsi = $query_deskripsi->row()->id_deskripsi_mapel;

    $this->db->where('id_detail_ketrampilan',$id_detail_ketrampilan);
    $data=array(
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
