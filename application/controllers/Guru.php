<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('auth');
		$this->load->helper('url');
		cek_auth();
	}

	public function index()
	{
		$this->load->view('guru/index');
		// $this->load->view('kurikulum/login_admin');
	}
	public function guru()
	{
		$this->load-view('guru/index');
	}

	public function siswa()
	{
		cek_auth();
		$this->load->model('model_siswa');
		$this->load->model('model_kelas');
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$this->load->view('kurikulum/siswa',$data);
	}
	public function deskripsi_mapel()
	{
		cek_auth();
		$this->load->model('model_deskripsi_mapel');
		$this->load->model('model_mapel');
		$data['tb_deskripsi_mapel'] = $this->model_deskripsi_mapel->get_inputdeskripsimapel();
		$data['tb_mapel'] = $this->model_mapel->get_inputmapel();
		$this->load->view('kurikulum/deskripsi_mapel',$data);
	}
	public function deskripsi_sikap()
	{
		cek_auth();
		$this->load->model('model_deskripsi_sikap');
		$data['tb_deskripsi_sikap'] = $this->model_deskripsi_sikap->get_inputdeskripsisikap();
		$this->load->view('kurikulum/deskripsi_sikap',$data);
	}
	public function ortu()
	{
		cek_auth();
		$this->load->model('model_ortu');
		$this->load->model('model_siswa');
		$data['tb_ortu'] = $this->model_ortu->get_inputortu();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$this->load->view('kurikulum/ortu',$data);
	}
	// public function guru()
	// {
	// 	cek_auth();
	// 	$this->load->model('model_guru');
	// 	$data['tb_guru'] = $this->model_guru->get_inputguru();
	// 	$this->load->view('kurikulum/guru',$data);
	// }
	public function guru_ampu()
	{
		cek_auth();
		$this->load->model('model_guru_ampu');
		$this->load->model('model_guru');
		$this->load->model('model_kelas');
		$this->load->model('model_mapel');
		$data['tb_guru_ampu'] = $this->model_guru_ampu->get_inputguru_ampu();
		$data['tb_guru'] = $this->model_guru->get_inputguru();
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_mapel'] = $this->model_mapel->get_inputmapel();
		$this->load->view('kurikulum/guru_ampu',$data);
	}
	public function hak_akses()
	{
		cek_auth();
		$this->load->model('model_hak_akses');
		$data['tb_hak_akses'] = $this->model_hak_akses->get_inputhakakses();
		$this->load->view('kurikulum/hak_akses',$data);
	}
	public function kelas()
	{
		cek_auth();
		$this->load->model('model_kelas');
		$this->load->model('model_guru');
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_guru'] = $this->model_guru->get_inputguru();
		$this->load->view('kurikulum/kelas',$data);
	}
	public function ekskul()
	{
		cek_auth();
		$this->load->model('model_ekskul');
		$this->load->model('model_guru');
		$data['tb_guru'] = $this->model_guru->get_inputguru();
		$data['tb_ekskul'] = $this->model_ekskul->get_inputekskul();
		$this->load->view('kurikulum/ekskul',$data);
	}
	public function presensi()
	{
		cek_auth();
		$this->load->model('model_presensi');
		$this->load->model('model_siswa');
		$this->load->model('model_kelas');
		$data['tb_presensi'] = $this->model_presensi->get_inputpresensi();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$this->load->view('kurikulum/presensi',$data);
	}
	public function mapel()
	{
		cek_auth();
		$this->load->model('model_mapel');
		$this->load->model('model_guru');
		$this->load->model('model_kelas');
		$data['tb_mapel'] = $this->model_mapel->get_inputmapel();
		$data['tb_guru'] = $this->model_guru->get_inputguru();
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$this->load->view('kurikulum/mapel',$data);
	}
	public function nilai_ekskul()
	{
		cek_auth();
		$this->load->model('model_nilai_ekskul');
		$this->load->model('model_siswa');
		$this->load->model('model_ekskul');
		$data['tb_ekskul'] = $this->model_ekskul->get_inputekskul();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_nilai_ekskul'] = $this->model_nilai_ekskul->get_inputnilaiekskul();
		$this->load->view('kurikulum/nilai_ekskul',$data);
	}
	public function detail_pengetahuan()
	{
		cek_auth();
		$this->load->model('model_detail_pengetahuan');
		$this->load->model('model_mapel');
		$this->load->model('model_siswa');
		$this->load->model('model_deskripsi_mapel');
		$data['tb_mapel'] = $this->model_mapel->get_inputmapel();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_deskripsi_mapel'] = $this->model_deskripsi_mapel->get_inputdeskripsimapel();
		$data['tb_detail_pengetahuan'] =$this->model_detail_pengetahuan->get_inputdetailpengetahuan();
		$this->load->view('kurikulum/detail_pengetahuan',$data);
	}
	public function detail_ketrampilan()
	{
		cek_auth();
		$this->load->model('model_detail_ketrampilan');
		$this->load->model('model_mapel');
		$this->load->model('model_siswa');
		$this->load->model('model_deskripsi_mapel');
		$data['tb_mapel'] = $this->model_mapel->get_inputmapel();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_deskripsi_mapel'] = $this->model_deskripsi_mapel->get_inputdeskripsimapel();
		$data['tb_detail_ketrampilan'] =$this->model_detail_ketrampilan->get_inputdetailketrampilan();
		$this->load->view('kurikulum/detail_ketrampilan',$data);
	}
	public function nilai_sikap()
	{
		cek_auth();
		$this->load->model('model_nilai_sikap');
		$this->load->model('model_siswa');
		$this->load->model('model_deskripsi_sikap');
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_deskripsi_sikap'] = $this->model_deskripsi_sikap->get_inputdeskripsisikap();
		$data['tb_nilai_sikap'] =$this->model_nilai_sikap->get_inputnilaisikap();
		// echo "<pre>";
		// var_dump($data['tb_nilai_sikap']);
		// die();
		$this->load->view('kurikulum/nilai_sikap',$data);
	}
	public function rapor()
	{
		cek_auth();
		$this->load->model('model_rapor');
		$data['tb_rapor'] =$this->model_rapor->get_inputrapor();

		$this->load->view('kurikulum/rapor',$data);
	}

	public function rapor_hal1()
	{
		$id_rapor = $this->input->get('id_rapor');
		$this->load->model('model_rapor');
		$data['tb_rapor'] =$this->model_rapor->get_rapor_judul($id_rapor);
		$data['tb_siswa'] =$this->model_rapor->get_rapor_sikap($data['tb_rapor']->id_siswa);

		// echo "<pre>";
		// var_dump($data);
		// die();

		// $this->load->view('kurikulum/rapor_hal1');
		$this->load->view('kurikulum/rapor_hal1',$data);
		// $this->load->view('js_cetak');
	}
	public function rapor_hal2()
	{
		$id_rapor = $this->input->get('id_rapor');
		$this->load->model('model_rapor');
		$data['tb_rapor'] =$this->model_rapor->get_rapor_judul($id_rapor);
		$data['tb_nilai_matkul'] =$this->model_rapor->get_rapor_pengetahuan2($data['tb_rapor']->id_siswa,"A");
		//print_r($data['tb_nilai_matkul']);die();
		// echo "<pre>";
		// var_dump($data);
		// die();

		// $this->load->view('kurikulum/rapor_hal1');
		$this->load->view('kurikulum/rapor_hal2',$data);
		// $this->load->view('js_cetak');
	}
	public function rapor_hal3()
{
	$id_rapor = $this->input->get('id_rapor');
	$this->load->model('model_rapor');
	$data['tb_rapor'] =$this->model_rapor->get_rapor_judul($id_rapor);
	$data['tb_nilai_matkul'] =$this->model_rapor->get_rapor_pengetahuan2($data['tb_rapor']->id_siswa,"B");
	$data['tb_ekskul'] =$this->model_rapor->rapor_ekskul($data['tb_rapor']->id_siswa);
	$data['tb_presensi'] =$this->model_rapor->presensi($data['tb_rapor']->id_siswa);
	$data['sakit']=0;
	$data['ijin']=0;
	$data['tanpa_ket']=0;
	foreach ($data['tb_presensi'] as $key => $value) {
		$data['sakit']=$data['sakit']+$value->sakit;
		$data['ijin']=$data['ijin']+$value->ijin;
		$data['tanpa_ket']=$data['tanpa_ket']+$value->tanpa_ket;
	}
	$this->load->view('kurikulum/rapor_hal3',$data);
}



}
