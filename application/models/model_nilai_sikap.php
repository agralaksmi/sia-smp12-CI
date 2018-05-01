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
    $this->db->from('tb_nilai_sikap');
        $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_siswa_pertahun = tb_nilai_sikap.id_siswa_pertahun');
        $this->db->join('tb_siswa','tb_siswa.id_siswa = tb_nilai_sikap.id_siswa');
        $this->db->join('tb_wali_kelas','tb_wali_kelas.id_wali_kelas = tb_nilai_sikap.id_wali_kelas');
        $this->db->join('tb_guru','tb_guru.id_guru = tb_wali_kelas.id_guru');
        $this->db->join('tb_kelas','tb_kelas.id_kelas = tb_wali_kelas.id_kelas');
        $this->db->join('tb_deskripsi_sikap','tb_deskripsi_sikap.id_deskripsi_sikap = tb_nilai_sikap.id_deskripsi_sikap','left');
        $query = $this->db->get();
        return $query->result();
  }
  public function get_inputnilaisikapsearch($id_kelas){
    $this->db->from('tb_nilai_sikap');
        $this->db->join('tb_siswa_pertahun','tb_siswa_pertahun.id_siswa_pertahun = tb_nilai_sikap.id_siswa_pertahun');
        $this->db->join('tb_siswa','tb_siswa.id_siswa = tb_nilai_sikap.id_siswa');
        $this->db->join('tb_wali_kelas','tb_wali_kelas.id_wali_kelas = tb_nilai_sikap.id_wali_kelas');
        $this->db->join('tb_guru','tb_guru.id_guru = tb_wali_kelas.id_guru');
        $this->db->join('tb_kelas','tb_kelas.id_kelas = tb_wali_kelas.id_kelas');
        $this->db->join('tb_deskripsi_sikap','tb_deskripsi_sikap.id_deskripsi_sikap = tb_nilai_sikap.id_deskripsi_sikap','left');
        $this->db->where('tb_kelas.id_kelas',$id_kelas);
        $query = $this->db->get();
        return $query->result();
  }
  public function input_nilai_sikap($id_wali_kelas,$id_siswa,$id_kelas,$id_siswa_pertahun,$id_kelas)
  {
    $data=array(
    'id_wali_kelas'=>$id_wali_kelas,
    'id_kelas'=>$id_kelas,
    'id_siswa'=>$id_siswa,
    'id_siswa_pertahun'=>$id_siswa_pertahun,
    'id_kelas'=>$id_kelas,
    'nilai_akhir'=>'0',
    'id_deskripsi_sikap'=>'0'
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
  public function update_nilai_sikap($id_nilai_sikap,$nilai_akhir){

    $this->db->from('tb_deskripsi_sikap');
    $this->db->where('jenis_deskripsi','Deskripsi Spiritual');
    $this->db->where('jenis_deskripsi','Deskripsi Sosial');
    $this->db->where('nilai',$nilai_huruf);
    $query_deskripsi = $this->db->get();
    $id_deskripsi = $query_deskripsi->row()->id_deskripsi_sikap;

    $this->db->where('id_detail_ketrampilan',$id_detail_ketrampilan);
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
