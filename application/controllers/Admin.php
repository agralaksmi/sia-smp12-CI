<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct(){
    parent :: __construct();

    $this->load->helper('url');
    $this->load->model('model_guru');
    $this->load->model('model_siswa');
    $this->load->model('model_kelas');
    $this->load->model('model_mapel');
    $this->load->model('model_ortu');
    $this->load->model('model_ekskul');
    $this->load->model('model_guru_ampu');
    $this->load->model('model_deskripsi_sikap');
    $this->load->model('model_deskripsi_mapel');
    $this->load->model('model_presensi');
    $this->load->model('model_detail_pengetahuan');
    $this->load->model('model_detail_ketrampilan');
    $this->load->model('model_nilai_ekskul');
    $this->load->model('model_nilai_sikap');
    $this->load->model('model_hak_akses');
    $this->load->model('model_rapor');
    $this->load->model('model_siswa_pertahun');
    $this->load->model('model_tahun_ajaran');
    $this->load->model('model_wali_kelas');
  }

  public function index()
  {
    $this->load->view('kurikulum/guru');
    $this->load->view('kurikulum/siswa');
    $this->load->view('kurikulum/kelas');
    $this->load->view('kurikulum/mapel');
    $this->load->view('kurikulum/ekskul');
    $this->load->view('kurikulum/guru_ampu');
    $this->load->view('kurikulum/deskripsi_sikap');
    $this->load->view('kurikulum/deskripsi_mapel');
    $this->load->view('kurikulum/presensi');
    $this->load->view('kurikulum/detail_pengetahuan');
    $this->load->view('kurikulum/detail_ketrampilan');
    $this->load->view('kurikulum/nilai_ekskul');
    $this->load->view('kurikulum/nilai_sikap');
    $this->load->view('kurikulum/hak_akses');
    $this->load->view('kurikulum/rapor');
    $this->load->view('kurikulum/siswa_pertahun');
    $this->load->view('kurikulum/tahun_ajaran');
    $this->load->view('kurikulum/wali_kelas');
  }

  public function create_guru(){
    $nip= $this->input->post('nip');
    $nama=$this->input->post('nama');
    $jk=$this->input->post('jk');
    $tanggal_lahir=$this->input->post('tanggal_lahir');
    $golongan_ruang=$this->input->post('golongan_ruang');
    $tingkatan=$this->input->post('tingkatan');
    $tugas_tertentu=$this->input->post('tugas_tertentu');

    $cek=$this->db->where('nip',$nip)->or_where('nama_guru',$nama)->get('tb_guru')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA GURU SUDAH ADA');
      redirect(base_url('kurikulum/guru'));
    }
    else {
      $guru= $this->model_guru->input_guru($nip,$nama,$jk,$tanggal_lahir,$golongan_ruang,$tingkatan,$tugas_tertentu);
      $this->session->set_flashdata('sukses', 'DATA BERHASIL DITAMBAH');
      redirect(base_url('kurikulum/guru'));
    }
  }

  public function create_siswa(){

    $nisn= $this->input->post('nisn');
    $nama_siswa=$this->input->post('nama_siswa');
    $jk=$this->input->post('jk');
    $tempat_lahir=$this->input->post('tempat_lahir');
    $tanggal_lahir=$this->input->post('tanggal_lahir');
    $agama=$this->input->post('agama');
    $alamat=$this->input->post('alamat');
    $rt=$this->input->post('rt');
    $rw=$this->input->post('rw');
    $dusun=$this->input->post('dusun');
    $kelurahan=$this->input->post('kelurahan');
    $kode_pos=$this->input->post('kode_pos');
    $jenis_tinggal=$this->input->post('jenis_tinggal');
    $telepon=$this->input->post('telepon');
    $email=$this->input->post('email');


    $cek=$this->db->where('nisn',$nisn)
    ->or_where('nama_siswa',$nama_siswa)
    ->or_where('kode_pos',$kode_pos)
    ->get('tb_siswa')->result_array();

    if ($cek) {
      $this->session->set_flashdata('exist', 'Data siswa sudah ada');
      redirect(base_url('kurikulum/siswa'));
    }
    else {
      $siswa= $this->model_siswa->input_siswa($nisn,$nama_siswa,$jk,$tempat_lahir,$tanggal_lahir,$agama,$alamat,$rt,$rw,$dusun,$kelurahan,$kode_pos,$jenis_tinggal,$telepon,$email);

      $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
      redirect(base_url('kurikulum/siswa'));
    }
    // $tgl=date('Y');
    // $tglnya=$tgl[2].$tgl[3];
    //
    // $umur=$tgl[2].$tgl[3].$id_kelas.$num;
    //
    // $this->model_siswa->input_siswa_lokal($umur,$tahun,$id_kelas);


  }

  public function create_kelas(){
    $nama_kelas=$this->input->post('nama_kelas');
    $tingkat=$this->input->post('tingkat');

    $cek=$this->db->where('tingkat',$tingkat)->where('nama_kelas',$nama_kelas)->get('tb_kelas')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA KELAS SUDAH ADA');
      redirect(base_url('kurikulum/kelas'));
    }
    else {
      $kelas= $this->model_kelas->input_kelas($nama_kelas,$tingkat);
      $this->session->set_flashdata('sukses', 'DATA BERHASIL DITAMBAH');
      redirect(base_url('kurikulum/kelas'));
    }
  }

  public function create_mapel(){
    $nama_mapel=$this->input->post('nama_mapel');
    $id_kelas= $this->input->post('id_kelas');
    $kelompok= $this->input->post('kelompok');
    $kkm=$this->input->post('kkm');

    //$tes=$this->db->
    $cek=$this->db->where('id_kelas',$id_kelas)->where('nama_mapel',$nama_mapel)->get('tb_mapel')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA MAPEL SUDAH ADA');
      redirect(base_url('kurikulum/mapel'));
    }
    else {
      $mapel= $this->model_mapel->input_mapel($id_kelas,$nama_mapel,$kelompok,$kkm);
      $this->session->set_flashdata('sukses', 'DATA BERHASIL DITAMBAH');
      redirect(base_url('kurikulum/mapel'));
    }
  }

  public function create_ortu(){
    $id_siswa= $this->input->post('id_siswa');
    $status=$this->input->post('status');
    $nama_ortu= $this->input->post('nama_ortu');
    $tahun_lahir=$this->input->post('tahun_lahir');
    $jenjang_pendidikan=$this->input->post('jenjang_pendidikan');
    $pekerjaan=$this->input->post('pekerjaan');
    $penghasilan=$this->input->post('penghasilan');
    $nik=$this->input->post('nik');

    $ortu= $this->model_ortu->input_ortu($id_siswa,$status,$nama_ortu,$tahun_lahir,$jenjang_pendidikan,$pekerjaan,$penghasilan,$nik);
    $this->session->set_flashdata('edit', 'Sukses tambah data');
    redirect(base_url('kurikulum/ortu'));
  }

  public function create_ekskul(){
    $id_guru= $this->input->post('id_guru');
    $nama_ekskul=$this->input->post('nama_ekskul');

    $cek=$this->db->where('id_guru',$id_guru)->where('nama_ekskul',$nama_ekskul)->get('tb_ekskul')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'NAMA EKSKUL SUDAH ADA');
      redirect(base_url('kurikulum/ekskul'));
    }
    else {
      $ekskul= $this->model_ekskul->input_ekskul($id_guru,$nama_ekskul);
      $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
      redirect(base_url('kurikulum/ekskul'));
    }
  }

  public function create_guru_ampu(){
    $id_guru= $this->input->post('id_guru');
    $id_mapel=$this->input->post('id_mapel');
    $id_kelas=$this->input->post('id_kelas');
    $semester=$this->input->post('semester');
    $tahun_ajaran=$this->input->post('id_tahun_ajaran');

    $cek=$this->db->where('id_kelas',$id_kelas)->where('id_guru',$id_guru)->get('tb_guru_ampu')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA GURU AMPU SUDAH ADA');
      redirect(base_url('kurikulum/guru_ampu'));
    }
    else {
      $guru_ampu= $this->model_guru_ampu->input_guru_ampu($id_guru,$id_mapel,$id_kelas,$semester,$tahun_ajaran);
      $data = array(
               'id_guru' => $id_guru
            );
      $this->db->where('id_mapel', $id_mapel);
      $this->db->update('tb_mapel', $data);
      $this->session->set_flashdata('sukses', 'DATA BERHASIL DISIMPAN');
      redirect(base_url('kurikulum/guru_ampu'));
    }
  }

  public function create_wali_kelas(){
    $id_guru=$this->input->post('id_guru');
    $id_kelas=$this->input->post('id_kelas');
    $tahun_ajaran=$this->input->post('id_tahun_ajaran');

    $cek=$this->db->where('id_guru',$id_guru)->get('tb_wali_kelas')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA GURU SUDAH ADA');
      redirect(base_url('kurikulum/wali_kelas'));
    }
    else {
      $wali_kelas= $this->model_wali_kelas->input_wali_kelas($id_guru,$id_kelas,$tahun_ajaran);
      $this->session->set_flashdata('sukses', 'DATA BERHASIL DITAMBAH');
      redirect(base_url('kurikulum/wali_kelas'));
    }
  }

  public function create_siswa_pertahun(){
    $id_wali_kelas= $this->input->post('id_wali_kelas');
    $id_siswa= $this->input->post('id_siswa');
    $id_kelas=$this->input->post('id_kelas');
    $id_tahun_ajaran=$this->input->post('id_tahun_ajaran');
    $mapel=$this->input->post('mapel');
    $jumlah=$this->input->post('jumlah');

    $cek=$this->db->where('id_siswa',$id_siswa)->get('tb_siswa_pertahun')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA SISWA SUDAH ADA');
      redirect(base_url('kurikulum/siswa_pertahun'));
    }
    else {
      $siswa_pertahun= $this->model_siswa_pertahun->input_siswa_pertahun($id_siswa,$id_kelas,$id_tahun_ajaran);

      $id_siswa_pertahun=$siswa_pertahun['last_id'];
      for ($i=0; $i < $jumlah ; $i++) {
        $data_mapel="mapel".$mapel.$i;
        $id_mapel = $this->input->post($data_mapel);

      $detail_pengetahuan=$this->model_detail_pengetahuan->insert_siswa_pertahun_detail_pengetahuan($id_wali_kelas,$id_siswa,$id_kelas,$id_siswa_pertahun,$id_mapel);
      $detail_ketrampilan=$this->model_detail_ketrampilan->insert_siswa_pertahun_detail_ketrampilan($id_wali_kelas,$id_siswa,$id_kelas,$id_siswa_pertahun,$id_mapel);
      }
      $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
      redirect(base_url('kurikulum/siswa_pertahun'));
    }
  }


  public function create_deskripsi_sikap(){
    $jenis_deskripsi= $this->input->post('jenis_deskripsi');
    $nilai=$this->input->post('nilai');
    $deskripsi=$this->input->post('deskripsi');

    $deskripsi_sikap= $this->model_deskripsi_sikap->input_deskripsi_sikap($jenis_deskripsi,$nilai,$deskripsi);
    $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
    redirect(base_url('kurikulum/deskripsi_sikap'));
  }

  public function create_deskripsi_mapel(){
    $id_mapel=$this->input->post('id_mapel');
    $jenis_deskripsi= $this->input->post('jenis_deskripsi');
    $nilai=$this->input->post('nilai');
    $deskripsi=$this->input->post('deskripsi');

    $deskripsi_mapel= $this->model_deskripsi_mapel->input_deskripsi_mapel($id_mapel,$jenis_deskripsi,$nilai,$deskripsi);
    $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
    redirect(base_url('kurikulum/deskripsi_mapel'));
  }

  public function create_presensi(){
    $id_siswa=$this->input->post('id_siswa');
    $id_kelas=$this->input->post('id_kelas');
    $id_wali_kelas=$this->input->post('id_wali_kelas');
    $sakit= $this->input->post('sakit');
    $ijin=$this->input->post('ijin');
    $tanpa_ket=$this->input->post('tanpa_ket');
    $presensi=$this->model_presensi->input_presensi($id_wali_kelas,$id_kelas,$id_siswa,$sakit,$ijin,$tanpa_ket);
    // echo "<pre>";var_dump($presensi);die(var_dump($_POST));
    $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
    redirect(base_url('kurikulum/presensi'));
  }

  function get_siswa(){
    $id_siswa=$this->input->get('id_siswa');
    $data = $this->model_presensi->getsiswa($id_siswa);
    echo json_encode($data);
  }

  public function create_cek(){
    $id_mapel=$this->input->post('id_mapel');
    $id_kelas=$this->input->post('id_kelas');

    $detail_pengetahuan=$this->model_detail_pengetahuan->input_detail_pengetahuan($id_siswa,$id_mapel,$tugas1,$tugas2,$tugas3,$tugas4,$uts,$uas);
    $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
    redirect(base_url('kurikulum/detail_pengetahuan'));
  }
  // public function create_detail_ketrampilan(){
  //   $id_wali_kelas=$this->input->post('id_wali_kelas');
  //   $id_siswa=$this->input->post('id_siswa');
  //   $id_siswa_pertahun=$this->input->post('id_siswa_pertahun');
  //   $id_kelas=$this->input->post('id_kelas');
  //   $id_mapel=$this->input->post('id_mapel');
  //   $nilai_praktek= $this->input->post('nilai_praktek');
  //   $nilai_folio=$this->input->post('nilai_folio');
  //   $nilai_proyek=$this->input->post('nilai_proyek');
  //   $detail_ketrampilan=$this->model_detail_ketrampilan->input_detail_ketrampilan($id_wali_kelas,$id_kelas,$id_siswa,$id_siswa_pertahun,$id_mapel,$nilai_praktek,$nilai_folio,$nilai_proyek);
  //   $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
  //   redirect(base_url('kurikulum/detail_ketrampilan'));
  // }

  public function create_nilai_ekskul(){
    $id_siswa= $this->input->post('id_siswa');
    $id_ekskul=$this->input->post('id_ekskul');
    $nilai=$this->input->post('nilai');
    $predikat=$this->input->post('predikat');
    $ket=$this->input->post('ket');

    $nilai_ekskul= $this->model_nilai_ekskul->input_nilai_ekskul($id_siswa,$id_ekskul,$nilai,$predikat,$ket);
    $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
    redirect(base_url('kurikulum/nilai_ekskul'));
  }

  public function create_nilai_sikap(){
    $id_siswa= $this->input->post('id_siswa');
    $nilai_akhir=$this->input->post('nilai_akhir');
    $id_deskripsi_sikap=$this->input->post('id_deskripsi_sikap');

    $nilai_sikap= $this->model_nilai_sikap->input_nilai_sikap($id_siswa,$nilai_akhir,$id_deskripsi_sikap);
    $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
    redirect(base_url('kurikulum/nilai_sikap'));
  }

  public function create_hak_akses(){
    $username= $this->input->post('username');
    $password=$this->input->post('password');
    $nama=$this->input->post('nama');
    $id_guru=$this->input->post('guru');
    $hak_akses=$this->input->post('hak_akses');

    $hak_akses= $this->model_hak_akses->input_hak_akses($username,$password,$nama,$hak_akses,$id_guru);
    $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
    redirect(base_url('kurikulum/hak_akses'));
  }

  public function create_tahun_ajaran(){
    $tahun_ajaran= $this->input->post('tahun_ajaran');
    $status= $this->input->post('status');

    $cek=$this->db->where('tahun_ajaran',$tahun_ajaran)->get('tb_tahun_ajaran')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA TAHUN AJARAN SUDAH ADA');
      redirect(base_url('kurikulum/tahun_ajaran'));
    }
    else {
      $tahun_ajaran= $this->model_tahun_ajaran->input_tahun_ajaran($tahun_ajaran,$status);
      $this->session->set_flashdata('sukses', 'DATA BERHASIL DITAMBAH');
      redirect(base_url('kurikulum/tahun_ajaran'));
    }
  }

  public function create_rapor(){
    $id_siswa=$this->input->post('id_siswa');
    $catatan=$this->input->post('username');

    $rapor= $this->model_rapor->input_rapor($id_nilai_sikap,$id_detail_pengetahuan,$id_detail_ketrampilan,$id_nilai_ekskul,$id_presensi,$id_siswa,$id_guru,$catatan);
    $this->session->set_flashdata('sukses', 'Berhasil Tambah Data');
    redirect(base_url('kurikulum/rapor'));
  }

  // public function create_rapor()
  // {
  //   $this->load->model('model_rapor');
  //   $id_siswa = $this->input->post('id_siswa');
  //
  //   $rapor = $this->model_rapor->generate_rapor($id_siswa);
  //   if ($rapor) {
  //     redirect(base_url('kurikulum/rapor'));
  //   }
  // }

  // Kedua Edit guru
  public function edit_guru(){
    $id_guru = $this->input->get('id_guru');
    $guru = $this->model_guru->ubah_guru($id_guru);
    foreach ($guru as $guru) {
      echo '<div id="id_guru">'.$id_guru.'</div>';
      echo '<div id="nip">'.$guru->nip.'</div>';
      echo '<div id="nama_guru">'.$guru->nama_guru.'</div>';
      echo '<div id="tanggal_lahir">'.$guru->tanggal_lahir.'</div>';
      echo '<div id="jk">'.$guru->jenis_kelamin.'</div>';
      echo '<div id="golongan_ruang">'.$guru->golongan_ruang.'</div>';
      echo '<div id="tingkatan">'.$guru->tingkatan.'</div>';
      echo '<div id="tugas_tertentu">'.$guru->tugas_tertentu.'</div>';
      echo '<div id="foto">'.$guru->foto.'</div>';
    }
  }

  //keempat edit guru
  public function update_guru(){
    $id_guru = $this->input->post('id_guru');
    $nip= $this->input->post('nip');
    $nama=$this->input->post('nama');
    $jk=$this->input->post('jk');
    $tanggal_lahir=$this->input->post('tanggal_lahir');
    $golongan_ruang=$this->input->post('golongan_ruang');
    $tingkatan=$this->input->post('tingkatan');
    $tugas_tertentu=$this->input->post('tugas_tertentu');

    $cek=$this->db->where('nip',$nip)->or_where('nama_guru',$nama)->get('tb_guru')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA GURU SUDAH ADA');
      redirect(base_url('kurikulum/guru'));
    }
    else {
      $guru= $this->model_guru->update_guru($id_guru,$nip,$nama,$jk,$tanggal_lahir,$golongan_ruang,$tingkatan,$tugas_tertentu);
      $this->session->set_flashdata('edit', 'Sukses edit data');
      redirect(base_url('kurikulum/guru'));
    }
  }

  // Kedua Edit kelas
  public function edit_kelas(){
    $id_kelas = $this->input->get('id_kelas');
    $kelas = $this->model_kelas->ubah_kelas($id_kelas);
    foreach ($kelas as $kelas) {
      echo '<div id="id_kelas">'.$id_kelas.'</div>';
      echo '<div id="nama_kelas">'.$kelas->nama_kelas.'</div>';
      echo '<div id="tingkat">'.$kelas->tingkat.'</div>';
    }
  }

  //keempatn edit kelas
  public function update_kelas(){
    $id_kelas = $this->input->post('id_kelas');
    $nama_kelas= $this->input->post('nama_kelas');
    $tingkat=$this->input->post('tingkat');

    $cek=$this->db->where('tingkat',$tingkat)->or_where('nama_kelas',$nama_kelas)->get('tb_kelas')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA KELAS SUDAH ADA');
      redirect(base_url('kurikulum/kelas'));
    }
    else {
      $kelas= $this->model_kelas->update_kelas($id_kelas,$nama_kelas,$tingkat);
      redirect(base_url('kurikulum/kelas'));
      $this->session->set_flashdata('edit', 'Sukses edit data');
    }
  }

  // Kedua Edit kelas
  public function edit_ekskul(){
    $id_ekskul = $this->input->get('id_ekskul');
    $ekskul = $this->model_ekskul->ubah_ekskul($id_ekskul);
    foreach ($ekskul as $ekskul) {
      echo '<div id="id_ekskul">'.$id_ekskul.'</div>';
      echo '<div id="id_guru">'.$ekskul->id_guru.'</div>';
      echo '<div id="nama_ekskul">'.$ekskul->nama_ekskul.'</div>';
    }
  }

  //keempatn edit kelas
  public function update_ekskul(){
    $id_ekskul = $this->input->post('id_ekskul');
    $id_guru = $this->input->post('id_guru');
    $nama_ekskul= $this->input->post('nama_ekskul');

    $cek=$this->db->where('id_guru',$id_guru)->where('nama_ekskul',$nama_ekskul)->get('tb_ekskul')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'NAMA EKSKUL SUDAH ADA');
      redirect(base_url('kurikulum/ekskul'));
    }
    else {
      $ekskul= $this->model_ekskul->update_ekskul($id_ekskul,$id_guru,$nama_ekskul);
      $this->session->set_flashdata('edit', 'Sukses edit data');
      redirect(base_url('kurikulum/ekskul'));
    }
  }

  // Kedua Edit siswa
  public function edit_siswa(){
    $id_siswa = $this->input->get('id_siswa');
    $siswa = $this->model_siswa->ubah_siswa($id_siswa);
    foreach ($siswa as $siswa) {
      echo '<div id="id_siswa">'.$id_siswa.'</div>';
      echo '<div id="nisn">'.$siswa->nisn.'</div>';
      echo '<div id="nama_siswa">'.$siswa->nama_siswa.'</div>';
      echo '<div id="jenis_kelamin">'.$siswa->jenis_kelamin.'</div>';
      echo '<div id="tempat_lahir">'.$siswa->tempat_lahir.'</div>';
      echo '<div id="tanggal_lahir">'.$siswa->tanggal_lahir.'</div>';
      echo '<div id="agama">'.$siswa->agama.'</div>';
      echo '<div id="alamat">'.$siswa->alamat.'</div>';
      echo '<div id="rt">'.$siswa->rt.'</div>';
      echo '<div id="rw">'.$siswa->rw.'</div>';
      echo '<div id="dusun">'.$siswa->dusun.'</div>';
      echo '<div id="kelurahan">'.$siswa->kelurahan.'</div>';
      echo '<div id="kode_pos">'.$siswa->kode_pos.'</div>';
      echo '<div id="jenis_tinggal">'.$siswa->jenis_tinggal.'</div>';
      echo '<div id="telepon">'.$siswa->telepon.'</div>';
      echo '<div id="email">'.$siswa->email.'</div>';
      echo '<div id="foto">'.$siswa->foto.'</div>';
    }
  }

  //keempat edit siswa
  public function update_siswa(){
    $id_siswa = $this->input->post('id_siswa');
    $nisn= $this->input->post('nisn');
    $nama_siswa=$this->input->post('nama_siswa');
    $jk=$this->input->post('jk');
    $tempat_lahir=$this->input->post('tempat_lahir');
    $tanggal_lahir=$this->input->post('tanggal_lahir');
    $agama=$this->input->post('agama');
    $alamat=$this->input->post('alamat');
    $rt=$this->input->post('rt');
    $rw=$this->input->post('rw');
    $dusun=$this->input->post('dusun');
    $kelurahan=$this->input->post('kelurahan');
    $kode_pos=$this->input->post('kode_pos');
    $jenis_tinggal=$this->input->post('jenis_tinggal');
    $telepon=$this->input->post('telepon');
    $email=$this->input->post('email');
    $foto=$this->input->post('foto');

    $cek=$this->db->where('nisn',$nisn)
    ->or_where('nama_siswa',$nama_siswa)
    ->or_where('kode_pos',$kode_pos)
    ->get('tb_siswa')->result_array();

    if ($cek) {
      $this->session->set_flashdata('exist', 'Data siswa sudah ada');
      redirect(base_url('kurikulum/siswa'));
    }
    else {
      $siswa= $this->model_siswa->update_siswa($id_siswa,$nisn,$nama_siswa,$jk,$tempat_lahir,$tanggal_lahir,$agama,$alamat,$rt,$rw,$dusun,$kelurahan,$kode_pos,$jenis_tinggal,$telepon,$email);
      $this->session->set_flashdata('edit', 'DATA SUKSES DIEDIT');
      redirect(base_url('kurikulum/siswa'));
    }
  }

  // Kedua Edit ortu
  public function edit_ortu(){
    $id_ortu = $this->input->get('id_ortu');
    $ortu = $this->model_ortu->ubah_ortu($id_ortu);
    foreach ($ortu as $ortu) {
      echo '<div id="id_ortu">'.$id_ortu.'</div>';
      echo '<div id="id_siswa">'.$ortu->id_siswa.'</div>';
      echo '<div id="status">'.$ortu->status.'</div>';
      echo '<div id="nama_ortu">'.$ortu->nama_ortu.'</div>';
      echo '<div id="tahun_lahir">'.$ortu->tahun_lahir.'</div>';
      echo '<div id="jenjang_pendidikan">'.$ortu->jenjang_pendidikan.'</div>';
      echo '<div id="pekerjaan">'.$ortu->pekerjaan.'</div>';
      echo '<div id="penghasilan">'.$ortu->penghasilan.'</div>';
      echo '<div id="nik">'.$ortu->nik.'</div>';
    }
  }

  //keempat edit ortu
  public function update_ortu(){
    $id_ortu = $this->input->post('id_ortu');
    $id_siswa= $this->input->post('id_siswa');
    $status=$this->input->post('status');
    $nama_ortu=$this->input->post('nama_ortu');
    $tahun_lahir=$this->input->post('tahun_lahir');
    $jenjang_pendidikan=$this->input->post('jenjang_pendidikan');
    $pekerjaan=$this->input->post('pekerjaan');
    $penghasilan=$this->input->post('penghasilan');
    $nik=$this->input->post('nik');
    // echo "<pre>";
    // var_dump($_POST);
    // die();
    $ortu= $this->model_ortu->update_ortu($id_ortu,$id_siswa,$status,$nama_ortu,$tahun_lahir,$jenjang_pendidikan,$pekerjaan,$penghasilan,$nik);
    $this->session->set_flashdata('edit', 'Sukses edit data');
    redirect(base_url('kurikulum/ortu'));
  }

  // Kedua Edit mapel
  public function edit_mapel(){
    $id_mapel = $this->input->get('id_mapel');
    $mapel = $this->model_mapel->ubah_mapel($id_mapel);
    foreach ($mapel as $mapel) {
      echo '<div id="id_mapel">'.$id_mapel.'</div>';
      echo '<div id="id_kelas">'.$mapel->id_kelas.'</div>';
      echo '<div id="nama_mapel">'.$mapel->nama_mapel.'</div>';
      echo '<div id="kelompok">'.$mapel->kelompok.'</div>';
      echo '<div id="kkm">'.$mapel->kkm.'</div>';
    }
  }

  //keempatn edit mapel
  public function update_mapel(){
    $id_mapel = $this->input->post('id_mapel');
    $id_kelas= $this->input->post('id_kelas');
    $nama_mapel = $this->input->post('nama_mapel');
    $kelompok=$this->input->post('kelompok');
    $kkm=$this->input->post('kkm');

    $cek=$this->db->where('id_kelas',$id_kelas)->where('nama_mapel',$nama_mapel)->get('tb_mapel')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA MAPEL SUDAH ADA');
      redirect(base_url('kurikulum/mapel'));
    }
    else {
      $mapel= $this->model_mapel->update_mapel($id_mapel,$id_kelas,$nama_mapel,$kelompok,$kkm);
      $this->session->set_flashdata('edit', 'DATA SUKSES DI EDIT');
      redirect(base_url('kurikulum/mapel'));
    }
  }

  // Kedua Edit deskripsi sikap
  public function edit_deskripsi_sikap(){
    $id_deskripsi_sikap = $this->input->get('id_deskripsi_sikap');
    $deskripsi_sikap = $this->model_deskripsi_sikap->ubah_deskripsi_sikap($id_deskripsi_sikap);
    foreach ($deskripsi_sikap as $deskripsi_sikap) {
      echo '<div id="id_deskripsi_sikap">'.$id_deskripsi_sikap.'</div>';
      echo '<div id="jenis_deskripsi">'.$deskripsi_sikap->jenis_deskripsi.'</div>';
      echo '<div id="nilai">'.$deskripsi_sikap->nilai.'</div>';
      echo '<div id="deskripsi">'.$deskripsi_sikap->deskripsi.'</div>';
    }
  }

  //keempat edit deskripsi sikap
  public function update_deskripsi_sikap(){
    $id_deskripsi_sikap = $this->input->post('id_deskripsi_sikap');
    $jenis_deskripsi= $this->input->post('jenis_deskripsi');
    $nilai=$this->input->post('nilai');
    $deskripsi=$this->input->post('deskripsi');


    $cek=$this->db->where('jenis_deskripsi',$jenis_deskripsi)->get('tb_deskripsi_sikap')->result_array();
    if ($cek) {
    $this->session->set_flashdata('exist', 'DATA DESKRIPSI SUDAH ADA');
    redirect(base_url('kurikulum/deskripsi_sikap'));
    }
   else {
     $deskripsi_sikap= $this->model_deskripsi_sikap->update_deskripsi_sikap($id_deskripsi_sikap,$jenis_deskripsi,$nilai,$deskripsi);
     $this->session->set_flashdata('edit', 'DATA SUKSES DIEDIT');
     redirect(base_url('kurikulum/deskripsi_sikap'));
    }
  }

  // Kedua Edit deskripsi mapel
  public function edit_deskripsi_mapel(){
    $id_deskripsi_mapel = $this->input->get('id_deskripsi_mapel');
    $deskripsi_mapel = $this->model_deskripsi_mapel->ubah_deskripsi_mapel($id_deskripsi_mapel);
    foreach ($deskripsi_mapel as $data_deskripsi_mapel) {
      echo '<div id="id_deskripsi_mapel">'.$id_deskripsi_mapel.'</div>';
      echo '<div id="id_mapel">'.$data_deskripsi_mapel->id_mapel.'</div>';
      echo '<div id="jenis_deskripsi">'.$data_deskripsi_mapel->jenis_deskripsi.'</div>';
      echo '<div id="nilai">'.$data_deskripsi_mapel->nilai.'</div>';
      echo '<div id="deskripsi">'.$data_deskripsi_mapel->deskripsi.'</div>';
    }
  }

  //keempat edit deskripsi mapel
  public function update_deskripsi_mapel(){
    $id_deskripsi_mapel = $this->input->post('id_deskripsi_mapel');
    $id_mapel=$this->input->post('id_mapel');
    $jenis_deskripsi= $this->input->post('jenis_deskripsi');
    $nilai=$this->input->post('nilai');
    $deskripsi=$this->input->post('deskripsi');

    $deskripsi_mapel= $this->model_deskripsi_mapel->update_deskripsi_mapel($id_deskripsi_mapel,$id_mapel,$jenis_deskripsi,$nilai,$deskripsi);
    $this->session->set_flashdata('edit', 'Sukses edit data');
    redirect(base_url('kurikulum/deskripsi_mapel'));
  }

  // Kedua Edit presensi
  public function edit_presensi(){
    $id_presensi = $this->input->get('id_presensi');
    $presensi = $this->model_presensi->ubah_presensi($id_presensi);
    foreach ($presensi as $presensi) {
      echo '<div id="id_presensi">'.$id_presensi.'</div>';
      echo '<div id="id_siswa">'.$presensi->id_siswa.'</div>';
      // echo '<div id="id_kelas">'.$presensi->id_kelas.'</div>';
      echo '<div id="sakit">'.$presensi->sakit.'</div>';
      echo '<div id="ijin">'.$presensi->ijin.'</div>';
      echo '<div id="tanpa_ket">'.$presensi->tanpa_ket.'</div>';
    }
  }

  //keempat edit presensi
  public function update_presensi(){
    $id_presensi = $this->input->post('id_presensi');
    $id_siswa= $this->input->post('id_siswa');
    // $id_kelas= $this->input->post('id_kelas');
    $sakit=$this->input->post('sakit');
    $ijin=$this->input->post('ijin');
    $tanpa_ket=$this->input->post('tanpa_ket');

    $presensi= $this->model_presensi->update_presensi($id_presensi,$id_siswa,$sakit,$ijin,$tanpa_ket);
    $this->session->set_flashdata('edit', 'Sukses edit data');
    redirect(base_url('kurikulum/presensi'));
  }

  // Kedua Edit guru_ampu
  public function edit_guru_ampu(){
    $id_guru_ampu = $this->input->get('id_guru_ampu');
    $guru_ampu = $this->model_guru_ampu->ubah_guru_ampu($id_guru_ampu);
    foreach ($guru_ampu as $data_guru_ampu) {
      echo '<div id="id_guru_ampu">'.$id_guru_ampu.'</div>';
      echo '<div id="id_guru">'.$data_guru_ampu->id_guru.'</div>';
      echo '<div id="id_mapel">'.$data_guru_ampu->id_mapel.'</div>';
      echo '<div id="id_kelas">'.$data_guru_ampu->id_kelas.'</div>';
      echo '<div id="semester">'.$data_guru_ampu->semester.'</div>';
      echo '<div id="id_tahun_ajaran">'.$data_guru_ampu->id_tahun_ajaran.'</div>';
    }
  }

  //keempat edit guru_ampu
  public function update_guru_ampu(){
    $id_guru_ampu = $this->input->post('id_guru_ampu');
    $id_guru = $this->input->post('id_guru');
    $id_mapel=$this->input->post('id_mapel');
    $id_kelas=$this->input->post('id_kelas');
    $semester= $this->input->post('semester');
    $id_tahun_ajaran=$this->input->post('id_tahun_ajaran');

    $cek=$this->db->where('id_kelas',$id_kelas)->get('tb_guru_ampu')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA GURU AMPU SUDAH ADA');
      redirect(base_url('kurikulum/guru_ampu'));
    }
    else {
      $guru_ampu= $this->model_guru_ampu->update_guru_ampu($id_guru_ampu,$id_guru,$id_mapel,$id_kelas,$semester,$id_tahun_ajaran);
      $this->session->set_flashdata('sukses', 'Berhasil Edit Data');
      redirect(base_url('kurikulum/guru_ampu'));
    }
  }

  // Kedua Edit wali_kelas
  public function edit_wali_kelas(){
    $id_wali_kelas = $this->input->get('id_wali_kelas');
    $wali_kelas = $this->model_wali_kelas->ubah_wali_kelas($id_wali_kelas);
    foreach ($wali_kelas as $data_wali_kelas) {
      echo '<div id="id_wali_kelas">'.$id_wali_kelas.'</div>';
      echo '<div id="id_guru">'.$data_wali_kelas->id_guru.'</div>';
      echo '<div id="id_kelas">'.$data_wali_kelas->id_kelas.'</div>';
      echo '<div id="id_tahun_ajaran">'.$data_wali_kelas->id_tahun_ajaran.'</div>';
    }
  }

  //keempat edit wali_kelas
  public function update_wali_kelas(){
    $id_wali_kelas = $this->input->post('id_wali_kelas');
    $id_guru = $this->input->post('id_guru');
    $id_kelas=$this->input->post('id_kelas');
    $id_tahun_ajaran=$this->input->post('id_tahun_ajaran');

    $cek=$this->db->where('id_guru',$id_guru)->where('id_kelas',$id_kelas)->get('tb_wali_kelas')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA GURU SUDAH ADA');
      redirect(base_url('kurikulum/wali_kelas'));
    }
    else {
      $wali_kelas= $this->model_wali_kelas->update_wali_kelas($id_wali_kelas,$id_guru,$id_kelas,$id_tahun_ajaran);
      $this->session->set_flashdata('sukses', 'Berhasil Edit Data');
      redirect(base_url('kurikulum/wali_kelas'));
    }
  }

  // Kedua Edit siswa pertahun
  public function edit_siswa_pertahun(){
    $id_siswa_pertahun = $this->input->get('id_siswa_pertahun');
    $siswa_pertahun = $this->model_siswa_pertahun->ubah_siswa_pertahun($id_siswa_pertahun);
    foreach ($siswa_pertahun as $data_siswa_pertahun) {
      echo '<div id="id_siswa_pertahun">'.$id_siswa_pertahun.'</div>';
      echo '<div id="id_siswa">'.$data_siswa_pertahun->id_siswa.'</div>';
      echo '<div id="id_kelas">'.$data_siswa_pertahun->id_kelas.'</div>';
      echo '<div id="id_tahun_ajaran">'.$data_siswa_pertahun->id_tahun_ajaran.'</div>';
    }
  }

  //keempat edit siswa pertahun
  public function update_siswa_pertahun(){
    $id_siswa_pertahun = $this->input->post('id_siswa_pertahun');
    $id_siswa = $this->input->post('id_siswa');
    $id_kelas=$this->input->post('id_kelas');
    $id_tahun_ajaran=$this->input->post('id_tahun_ajaran');

    $cek=$this->db->where('id_siswa',$id_siswa)->where('id_kelas',$id_kelas)->get('tb_siswa_pertahun')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA SISWA SUDAH ADA');
      redirect(base_url('kurikulum/siswa_pertahun'));
    }
    else {
      $siswa_pertahun= $this->model_siswa_pertahun->update_siswa_pertahun($id_siswa_pertahun,$id_siswa,$id_kelas,$id_tahun_ajaran);
      $this->session->set_flashdata('sukses', 'Berhasil Edit Data');
      redirect(base_url('kurikulum/siswa_pertahun'));
    }
  }
  // Kedua Edit detail_pengetahuan
  public function edit_detail_pengetahuan(){
    $id_detail_pengetahuan = $this->input->get('id_detail_pengetahuan');
    $detail_pengetahuan = $this->model_detail_pengetahuan->ubah_detail_pengetahuan($id_detail_pengetahuan);
    foreach ($detail_pengetahuan as $data_detail_pengetahuan) {
      echo '<div id="id_detail_pengetahuan">'.$id_detail_pengetahuan.'</div>';
      echo '<div id="id_wali_kelas">'.$data_detail_pengetahuan->id_wali_kelas.'</div>';
      echo '<div id="id_kelas">'.$data_detail_pengetahuan->id_kelas.'</div>';
      echo '<div id="id_siswa">'.$data_detail_pengetahuan->id_siswa.'</div>';
      echo '<div id="id_mapel">'.$data_detail_pengetahuan->id_mapel.'</div>';
      echo '<div id="ulangan_harian">'.$data_detail_pengetahuan->ulangan_harian.'</div>';
      echo '<div id="tugas1">'.$data_detail_pengetahuan->tugas1.'</div>';
      echo '<div id="tugas2">'.$data_detail_pengetahuan->tugas2.'</div>';
      echo '<div id="tugas3">'.$data_detail_pengetahuan->tugas3.'</div>';
      echo '<div id="tugas4">'.$data_detail_pengetahuan->tugas4.'</div>';
      echo '<div id="uts">'.$data_detail_pengetahuan->uts.'</div>';
      echo '<div id="uas">'.$data_detail_pengetahuan->uas.'</div>';
      echo '<div id="id_deskripsi_mapel">'.$data_detail_pengetahuan->id_deskripsi_mapel.'</div>';
    }
  }

  //keempat edit detail_pengetahuan
  public function update_detail_pengetahuan(){
    $id_detail_pengetahuan = $this->input->post('id_detail_pengetahuan');
    $tugas1= $this->input->post('tugas1');
    $tugas2= $this->input->post('tugas2');
    $tugas3= $this->input->post('tugas3');
    $tugas4= $this->input->post('tugas4');
    $uts= $this->input->post('uts');
    $uas= $this->input->post('uas');

    $detail_pengetahuan= $this->model_detail_pengetahuan->update_detail_pengetahuan($id_detail_pengetahuan,$tugas1,$tugas2,$tugas3,$tugas4,$uts,$uas);
    if ($detail_pengetahuan) {
      $this->session->set_flashdata('edit', 'Sukses edit data');
      redirect(base_url('kurikulum/detail_pengetahuan'));
    }
  }

  // Kedua Edit detail_ketrampilan
  public function edit_detail_ketrampilan(){
    $id_detail_ketrampilan = $this->input->get('id_detail_ketrampilan');
    $detail_ketrampilan = $this->model_detail_ketrampilan->ubah_detail_ketrampilan($id_detail_ketrampilan);
    foreach ($detail_ketrampilan as $data_detail_ketrampilan) {
      echo '<div id="id_detail_ketrampilan">'.$id_detail_ketrampilan.'</div>';
      echo '<div id="id_wali_kelas">'.$data_detail_ketrampilan->id_wali_kelas.'</div>';
      echo '<div id="id_kelas">'.$data_detail_ketrampilan->id_kelas.'</div>';
      echo '<div id="id_siswa">'.$data_detail_ketrampilan->id_siswa.'</div>';
      echo '<div id="id_mapel">'.$data_detail_ketrampilan->id_mapel.'</div>';
      echo '<div id="nilai_praktek">'.$data_detail_ketrampilan->nilai_praktek.'</div>';
      echo '<div id="nilai_folio">'.$data_detail_ketrampilan->nilai_folio.'</div>';
      echo '<div id="nilai_proyek">'.$data_detail_ketrampilan->nilai_proyek.'</div>';
      echo '<div id="nilai_akhir">'.$data_detail_ketrampilan->nilai_akhir.'</div>';
      echo '<div id="id_deskripsi_mapel">'.$data_detail_ketrampilan->id_deskripsi_mapel.'</div>';
    }
  }

  //keempat edit detail_ketrampilan
  public function update_detail_ketrampilan(){
    $id_detail_ketrampilan = $this->input->post('id_detail_ketrampilan');
    $nilai_praktek= $this->input->post('nilai_praktek');
    $nilai_folio= $this->input->post('nilai_folio');
    $nilai_proyek= $this->input->post('nilai_proyek');

    $detail_ketrampilan= $this->model_detail_ketrampilan->update_detail_ketrampilan($id_detail_ketrampilan,$nilai_praktek,$nilai_folio,$nilai_proyek);
    if ($detail_ketrampilan) {
      $this->session->set_flashdata('edit', 'Sukses edit data');
      redirect(base_url('kurikulum/detail_ketrampilan'));
    }
  }

  // Kedua Edit nilai_ekskul
  public function edit_nilai_ekskul(){
    $id_nilai_ekskul = $this->input->get('id_nilai_ekskul');
    $nilai_ekskul = $this->model_nilai_ekskul->ubah_nilai_ekskul($id_nilai_ekskul);
    foreach ($nilai_ekskul as $data_nilai_ekskul) {
      echo '<div id="id_nilai_ekskul">'.$id_nilai_ekskul.'</div>';
      echo '<div id="id_siswa">'.$data_nilai_ekskul->id_siswa.'</div>';
      echo '<div id="id_kelas">'.$data_nilai_ekskul->id_kelas.'</div>';
      echo '<div id="id_ekskul">'.$data_nilai_ekskul->id_ekskul.'</div>';
      echo '<div id="nilai">'.$data_nilai_ekskul->nilai.'</div>';
      echo '<div id="predikat">'.$data_nilai_ekskul->predikat.'</div>';
      echo '<div id="ket">'.$data_nilai_ekskul->ket.'</div>';
    }
  }

  //keempat edit nilai_ekskul
  public function update_nilai_ekskul(){
    $id_nilai_ekskul = $this->input->post('id_nilai_ekskul');
    $nilai=$this->input->post('nilai');
    $ket= $this->input->post('ket');

    $nilai_ekskul= $this->model_nilai_ekskul->update_nilai_ekskul($id_nilai_ekskul,$nilai,$ket);
      if ($nilai_ekskul) {
        $this->session->set_flashdata('edit', 'Sukses edit data');
        redirect(base_url('kurikulum/nilai_ekskul'));
      }
  }

  // Kedua Edit nilai_sikap
  public function edit_nilai_sikap(){
    $id_nilai_sikap = $this->input->get('id_nilai_sikap');
    $nilai_sikap = $this->model_nilai_sikap->ubah_nilai_sikap($id_nilai_sikap);
    foreach ($nilai_sikap as $data_nilai_sikap) {
      echo '<div id="id_nilai_sikap">'.$id_nilai_sikap.'</div>';
      echo '<div id="id_siswa">'.$data_nilai_sikap->id_siswa.'</div>';
      echo '<div id="nilai_akhir">'.$data_nilai_sikap->nilai_akhir.'</div>';
      echo '<div id="id_deskripsi_sikap">'.$data_nilai_sikap->id_deskripsi_sikap.'</div>';
    }
  }

  //keempatn edit nilai_sikap
  public function update_nilai_sikap(){
    $id_nilai_sikap = $this->input->post('id_nilai_sikap');
    $id_siswa = $this->input->post('id_siswa');
    $nilai_akhir= $this->input->post('nilai_akhir');
    $id_deskripsi_sikap = $this->input->post('id_deskripsi_sikap');

    $nilai_sikap= $this->model_nilai_sikap->update_nilai_sikap($id_nilai_sikap,$id_siswa,$id_deskripsi_sikap,$nilai_akhir);
    redirect(base_url('kurikulum/nilai_sikap'));
  }


  // Kedua Edit hak_akses
  public function edit_hak_akses(){
    $username = $this->input->get('username');
    $username = $this->model_hak_akses->ubah_hak_akses($username);
    foreach ($username as $data_username) {
      echo '<div id="username">'.$data_username->username.'</div>';
      echo '<div id="password">'.$data_username->password.'</div>';
      echo '<div id="nama">'.$data_username->nama.'</div>';
      echo '<div id="id_guru">'.$data_username->id_guru.'</div>';
      echo '<div id="hak_akses">'.$data_username->hak_akses.'</div>';
    }
  }

  //keempat edit hak_Akses
  public function update_hak_akses(){
    $username = $this->input->post('username');
    $password=$this->input->post('password');
    $nama=$this->input->post('nama');
    $id_guru=$this->input->post('id_guru');
    $hak_akses= $this->input->post('hak_akses');

    $hak_akses= $this->model_hak_akses->update_hak_akses($username,$password,$nama,$hak_akses,$id_guru);
    $this->session->set_flashdata('edit', 'Sukses edit data');
    redirect(base_url('kurikulum/hak_akses'));
  }
  // Kedua Edit tahun_ajaran
  public function edit_tahun_ajaran(){
    $id_tahun_ajaran = $this->input->get('id_tahun_ajaran');
    $tahun_ajaran = $this->model_tahun_ajaran->ubah_tahun_ajaran($id_tahun_ajaran);
    foreach ($tahun_ajaran as $data_tahun_ajaran) {
      echo '<div id="id_tahun_ajaran">'.$data_tahun_ajaran->id_tahun_ajaran.'</div>';
      echo '<div id="tahun_ajaran">'.$data_tahun_ajaran->tahun_ajaran.'</div>';
      echo '<div id="status">'.$data_tahun_ajaran->status.'</div>';
    }
  }

  //keempat edit tahun_ajaran
  public function update_tahun_ajaran(){
    $id_tahun_ajaran = $this->input->post('id_tahun_ajaran');
    $tahun_ajaran = $this->input->post('tahun_ajaran');
    $status = $this->input->post('status');

    $cek=$this->db->where('tahun_ajaran',$tahun_ajaran)->get('tb_tahun_ajaran')->result_array();
    if ($cek) {
      $this->session->set_flashdata('exist', 'DATA TAHUN AJARAN SUDAH ADA');
      redirect(base_url('kurikulum/tahun_ajaran'));
    }
    else {
      $thn_ajaran= $this->model_tahun_ajaran->update_tahun_ajaran($id_tahun_ajaran,$tahun_ajaran,$status);
      $this->session->set_flashdata('edit', 'Sukses edit data');
      redirect(base_url('kurikulum/tahun_ajaran'));
    }
  }

  // delete Kedua guru
  public function delete_guru(){
    $id_guru = $this->input->post('id_guru');
    $guru = $this->model_guru->delete_guru($id_guru);
    if($guru){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/guru'))  ;
    }
  }
  public function delete_wali_kelas(){
    $id_wali_kelas = $this->input->post('id_wali_kelas');
    $wali_kelas = $this->model_wali_kelas->delete_wali_kelas($id_wali_kelas);
    if($wali_kelas){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/wali_kelas'))  ;
    }
  }

  //delete kedua mapel
  public function delete_mapel(){
    $id_mapel = $this->input->post('id_mapel');
    $mapel = $this->model_mapel->delete_mapel($id_mapel);
    if($mapel){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/mapel'))  ;
    }
  }

  //delete kedua kelas
  public function delete_kelas(){
    $id_kelas = $this->input->post('id_kelas');
    $kelas = $this->model_kelas->delete_kelas($id_kelas);
    if($kelas){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/kelas'))  ;
    }
  }

  //delete kedua siswa
  public function delete_siswa(){

    $id_siswa = $this->input->post('id_siswa');
    //echo $nis;die();
    $siswa = $this->model_siswa->delete_siswa($id_siswa);
    if($siswa){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/siswa'))  ;
    }
  }

  public function delete_ortu(){
    $id_ortu = $this->input->post('id_ortu');
    $ortu = $this->model_ortu->delete_ortu($id_ortu);
    if($ortu){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/ortu'))  ;
    }
  }

  public function delete_ekskul(){
    $id_ekskul = $this->input->post('id_ekskul');
    $ekskul = $this->model_ekskul->delete_ekskul($id_ekskul);
    if($ekskul){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/ekskul'))  ;
    }
  }

  public function delete_deskripsi_sikap(){
    $id_deskripsi_sikap = $this->input->post('id_deskripsi_sikap');
    $deskripsi_sikap = $this->model_deskripsi_sikap->delete_deskripsi_sikap($id_deskripsi_sikap);
    if($deskripsi_sikap){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/deskripsi_sikap'))  ;
    }
  }

  public function delete_presensi(){
    $id_presensi = $this->input->post('id_presensi');
    $presensi = $this->model_presensi->delete_presensi($id_presensi);
    if($presensi){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/presensi'))  ;
    }
  }

  public function delete_guru_ampu(){
    $id_guru_ampu = $this->input->post('id_guru_ampu');
    $guru_ampu = $this->model_guru_ampu->delete_guru_ampu($id_guru_ampu);
    if($guru_ampu){
      $this->session->set_flashdata('delete', 'Berhasil Hapus Data');
      redirect(base_url('kurikulum/guru_ampu'))  ;
    }
  }

  public function delete_siswa_pertahun(){
    $id_siswa_pertahun = $this->input->post('id_siswa_pertahun');
    $siswa_pertahun = $this->model_siswa_pertahun->delete_siswa_pertahun($id_siswa_pertahun);
    if($siswa_pertahun){
      $this->session->set_flashdata('delete', 'Berhasil Hapus Data');
      redirect(base_url('kurikulum/siswa_pertahun'))  ;
    }
  }

  public function delete_deskripsi_mapel(){
    $id_deskripsi_mapel = $this->input->post('id_deskripsi_mapel');
    $deskripsi_mapel = $this->model_deskripsi_mapel->delete_deskripsi_mapel($id_deskripsi_mapel);
    if($deskripsi_mapel){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/deskripsi_mapel'))  ;
    }
  }

  public function delete_detail_pengetahuan(){
    $id_detail_pengetahuan = $this->input->post('id_detail_pengetahuan');
    $detail_pengetahuan = $this->model_detail_pengetahuan->delete_detail_pengetahuan($id_detail_pengetahuan);
    if($detail_pengetahuan){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/detail_pengetahuan'))  ;
    }
  }

  public function delete_detail_ketrampilan(){
    $id_detail_ketrampilan = $this->input->post('id_detail_ketrampilan');
    $detail_ketrampilan = $this->model_detail_ketrampilan->delete_detail_ketrampilan($id_detail_ketrampilan);
    if($detail_ketrampilan){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/detail_ketrampilan'))  ;
    }
  }

  public function delete_nilai_ekskul(){
    $id_nilai_ekskul = $this->input->post('id_nilai_ekskul');
    $nilai_ekskul = $this->model_nilai_ekskul->delete_nilai_ekskul($id_nilai_ekskul);
    if($nilai_ekskul){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/nilai_ekskul'))  ;
    }
  }
  public function delete_nilai_sikap(){
    $id_nilai_sikap = $this->input->post('id_nilai_sikap');
    $nilai_sikap = $this->model_nilai_sikap->delete_nilai_sikap($id_nilai_sikap);
    if($nilai_sikap){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/nilai_sikap'))  ;
    }
  }

  public function delete_hak_akses(){
    $username= $this->input->post('username');
    $hak_akses = $this->model_hak_akses->delete_hak_akses($username);
    if($hak_akses){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/hak_akses'))  ;
    }
  }
  public function delete_tahun_ajaran(){
    $id_tahun_ajaran= $this->input->post('id_tahun_ajaran');
    $tahun_ajaran = $this->model_tahun_ajaran->delete_tahun_ajaran($id_tahun_ajaran);
    if($tahun_ajaran){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/tahun_ajaran'))  ;
    }
  }
  public function delete_rapor(){
    $id_rapor= $this->input->post('id_rapor');
    $rapor = $this->model_rapor->delete_rapor($id_rapor);
    if($rapor){
      $this->session->set_flashdata('delete', 'Sukses Hapus data');
      redirect(base_url('kurikulum/rapor'))  ;
    }
  }
}
