<?php
/**
 *
 */
class model_ekskul extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }
  public function get_inputekskul(){
    $this->db->from('tb_ekskul');
    $this->db->join('tb_guru','tb_ekskul.id_guru=tb_guru.id_guru');
    $query = $this->db->get();
    return $query->result();
  }
  public function input_ekskul($id_guru,$nama_ekskul)
  {
    $data=array(

    'id_guru'=>$id_guru,
    'nama_ekskul'=>$nama_ekskul,
    );
    $this->db->insert('tb_ekskul',$data);

  }
  // Awal Model edit
  //pertama
  public function ubah_ekskul($id_ekskul){
    $this->db->from('tb_ekskul');
    $this->db->where('id_ekskul',$id_ekskul);
    $query = $this->db->get();
    return $query->result();
  }
  //ketujuh
  public function update_ekskul($id_ekskul,$id_guru,$nama_ekskul){
    $this->db->where('id_ekskul',$id_ekskul);
    $data=array(
    'id_guru'=>$id_guru,
    'nama_ekskul'=>$nama_ekskul
    );
    $query = $this->db->update('tb_ekskul',$data);
    return $query;
  }
  // delete pertama
    public function delete_ekskul($id_ekskul)
    {
    $this->db->where('id_ekskul',$id_ekskul);
    $query = $this->db->delete('tb_ekskul');
    return $query;
      }
}

 ?>
