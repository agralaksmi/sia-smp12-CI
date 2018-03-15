<?php
/**
 *
 */
class model_kelas extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputkelas(){
  $query = $this->db->get('tb_kelas');
  return $query->result();
  }
  public function input_kelas($nama_kelas,$tingkat)
  {
    $data=array(
      'nama_kelas'=>$nama_kelas,
      'tingkat'=>$tingkat
    );
    $this->db->insert('tb_kelas',$data);
  }
  // Awal Model edit
  //pertama
  public function ubah_kelas($id_kelas){
    $this->db->from('tb_kelas');
    $this->db->where('id_kelas',$id_kelas);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_kelas($id_kelas,$nama_kelas,$tingkat){
    $this->db->where('id_kelas',$id_kelas);
    $data=array(
    'nama_kelas'=>$nama_kelas,
    'tingkat'=>$tingkat
    );
    $query = $this->db->update('tb_kelas',$data);
    return $query;
  }
  // delete pertama
    public function delete_kelas($id_kelas)
    {
    $this->db->where('id_kelas',$id_kelas);
    $query = $this->db->delete('tb_kelas');
    return $query;
      }
}
?>
