<?php
/**
 *
 */
class model_guru_ampu extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputguru_ampu(){
    $this->db->join('tb_guru','tb_guru_ampu.id_guru=tb_guru.id_guru');
    $this->db->join('tb_mapel','tb_guru_ampu.id_mapel=tb_mapel.id_mapel');
    $this->db->join('tb_kelas','tb_guru_ampu.id_kelas=tb_kelas.id_kelas');
    $this->db->join('tb_tahun_ajaran','tb_guru_ampu.id_tahun_ajaran=tb_tahun_ajaran.id_tahun_ajaran');
    $query = $this->db->get('tb_guru_ampu');
    return $query->result();
  }


  public function input_guru_ampu($id_guru,$id_mapel,$id_kelas,$semester,$tahun_ajaran)
  {
    $data=array(
      'id_guru'=>$id_guru,
      'id_mapel'=>$id_mapel,
      'id_kelas'=>$id_kelas,
      'semester'=>$semester,
      'id_tahun_ajaran'=>$tahun_ajaran
    );
    var_dump($data);
    $this->db->insert('tb_guru_ampu',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_guru_ampu($id_guru_ampu){
    $this->db->from('tb_guru_ampu');
    $this->db->where('id_guru_ampu',$id_guru_ampu);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_guru_ampu($id_guru_ampu,$id_guru,$id_mapel,$id_kelas,$semester,$id_tahun_ajaran){
    $this->db->where('id_guru_ampu',$id_guru_ampu);
    $data=array(
    'id_guru_ampu'=>$id_guru_ampu,
    'id_guru'=>$id_guru,
    'id_mapel'=>$id_mapel,
    'id_kelas'=>$id_kelas,
    'semester'=>$semester,
    'id_tahun_ajaran'=>$id_tahun_ajaran
    );
    $query = $this->db->update('tb_guru_ampu',$data);
    return $query;
  }
  // delete pertama
  public function delete_guru_ampu($id_guru_ampu)
  {
    $this->db->where('id_guru_ampu',$id_guru_ampu);
    $query = $this->db->delete('tb_guru_ampu');
    return $query;
  }
}

 ?>
