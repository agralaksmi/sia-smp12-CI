<?php
/**
 *
 */
class model_tahun_ajaran extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputtahunajaran(){
    $query = $this->db->get('tb_tahun_ajaran');
    return $query->result();
  }
  public function input_tahun_ajaran($tahun_ajaran)
  {
    $data=array(
    'tahun_ajaran'=>$tahun_ajaran
    );
    $this->db->insert('tb_tahun_ajaran',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_tahun_ajaran($id_tahun_ajaran){
    $this->db->from('tb_tahun_ajaran');
    $this->db->where('id_tahun_ajaran',$id_tahun_ajaran);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_tahun_ajaran($id_tahun_ajaran,$tahun_ajaran){
    $this->db->where('id_tahun_ajaran',$id_tahun_ajaran);
    $data=array(
      'id_tahun_ajaran'=>$id_tahun_ajaran,
      'tahun_ajaran'=>$tahun_ajaran
    );
    $query = $this->db->update('tb_tahun_ajaran',$data);
    return $query;
  }
  // delete pertama
    public function delete_tahun_ajaran($id_tahun_ajaran)
    {
    $this->db->where('id_tahun_ajaran',$id_tahun_ajaran);
    $query = $this->db->delete('tb_tahun_ajaran');
    return $query;
      }
}

 ?>
