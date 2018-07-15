<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('auth');
		$this->load->helper('url');
		cek_auth();
	}

	public function index()
	{
		$this->load->view('kurikulum/index');
		// $this->load->view('kurikulum/login_admin');
	}
	public function kurikulum()
	{
		$this->load-view('kurikulum/index');
	}

	public function siswa()
	{
		cek_auth();
		$this->load->model('model_siswa');
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$this->load->view('kurikulum/siswa',$data);
	}
	public function siswa_lokal()
	{
		cek_auth();
		$this->load->model('model_siswa_lokal');
		$data['tb_siswa_lokal'] = $this->model_siswa_lokal->get_inputsiswalokal();
		//print_r($data['tb_siswa_lokal']);die();
		$this->load->view('kurikulum/siswa_lokal',$data);
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
	public function guru()
	{
		cek_auth();
		$this->load->model('model_guru');
		$data['tb_guru'] = $this->model_guru->get_inputguru();
		$this->load->view('kurikulum/guru',$data);
	}

	public function guru_ampu()
	{
		cek_auth();
		$this->load->model('model_guru_ampu');
		$this->load->model('model_guru');
		$this->load->model('model_kelas');
		$this->load->model('model_tahun_ajaran');
		$this->load->model('model_mapel');
		$bulan = (integer) date('m');

		if ($bulan >= 1 && $bulan <= 6) {
			$data['semester_sekarang'] = 'genap';
		} else {
			$data['semester_sekarang'] = 'ganjil';
		}

		if ($this->session->userdata('hak_akses')=="guru") {
			$data['tb_mapel'] = $this->model_mapel->get_inputmapel2($this->session->userdata('id_guru'));
		}
		else {
			$data['tb_mapel'] = $this->model_mapel->get_inputmapelbaru();
		}


		$data['tb_guru_ampu'] = $this->model_guru_ampu->get_inputguru_ampu();
		$data['tb_guru'] = $this->model_guru->get_inputguru();
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_tahun_ajaran'] = $this->model_tahun_ajaran->get_tahun_ajaran_aktif();
		// $data['tb_mapel'] = $this->model_mapel->get_inputmapel();
		$this->load->view('kurikulum/guru_ampu',$data);
	}

	public function wali_kelas()
	{
		cek_auth();
		$this->load->model('model_wali_kelas');
		$this->load->model('model_guru');
		$this->load->model('model_kelas');
		$this->load->model('model_tahun_ajaran');
		$data['tb_wali_kelas'] = $this->model_wali_kelas->get_inputwali_kelas();
		$data['tb_guru'] = $this->model_guru->get_inputguru();
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_tahun_ajaran'] = $this->model_tahun_ajaran->get_tahun_ajaran_aktif();
		$this->load->view('kurikulum/wali_kelas',$data);
	}

	public function siswa_pertahun()
	{
		cek_auth();
		$this->load->model('model_siswa_pertahun');
		$this->load->model('model_siswa');
		$this->load->model('model_tahun_ajaran');
		$this->load->model('model_kelas');
		$this->load->model('model_mapel');
		$data['tb_siswa_pertahun'] = $this->model_siswa_pertahun->get_inputsiswapertahun();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_tahun_ajaran'] = $this->model_tahun_ajaran->get_tahun_ajaran_aktif();
		$data['tb_mapel'] = $this->model_mapel->get_mapel();
		$this->load->view('kurikulum/siswa_pertahun',$data);
	}
	public function hak_akses()
	{
		cek_auth();
		$this->load->model('model_hak_akses');
		$data['tb_hak_akses'] = $this->model_hak_akses->get_inputhakakses();
		$data['tb_guru'] = $this->db->get('tb_guru')->result();
		$this->load->view('kurikulum/hak_akses',$data);
	}
	public function tahun_ajaran()
	{
		cek_auth();
		$this->load->model('model_tahun_ajaran');
		$data['tb_tahun_ajaran'] = $this->model_tahun_ajaran->get_inputtahunajaran();
		$this->load->view('kurikulum/tahun_ajaran',$data);
	}
	public function kelas()
	{
		cek_auth();
		$this->load->model('model_kelas');
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
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

	public function presensi(){
		cek_auth();
		$this->load->model('model_presensi');
		$this->load->model('model_siswa');
		$this->load->model('model_kelas');
		$this->load->model('model_wali_kelas');
		$this->load->model('model_kelas');
		$bulan = (integer) date('m');

		if ($bulan >= 1 && $bulan <= 6) {
			$data['semester_sekarang'] = 'genap';
		} else {
			$data['semester_sekarang'] = 'ganjil';
		}
		$data['tb_presensi'] = $this->model_presensi->get_inputpresensi();

		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_wali_kelas'] = $this->model_wali_kelas->get_inputwali_kelas();

		if (isset($_POST['cek'])) {
			$id_kelas = $_POST['id_kelas'];
			$data['tb_presensi'] = $this->model_presensi->get_inputpresensisearch($id_kelas);
		}else {

		}
		$this->load->view('kurikulum/presensi',$data);
	}

	public function mapel()
	{
		cek_auth();
		$this->load->model('model_mapel');
		// $this->load->model('model_guru');
		$this->load->model('model_kelas');
		$data['tb_mapel'] = $this->model_mapel->get_inputmapel();
		// $data['tb_guru'] = $this->model_guru->get_inputguru();
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$this->load->view('kurikulum/mapel',$data);
	}

	public function detail_pengetahuan()
	{
		cek_auth();
		$this->load->model('model_detail_pengetahuan');
		$this->load->model('model_wali_kelas');
		$this->load->model('model_mapel');
		$this->load->model('model_siswa');
		$this->load->model('model_deskripsi_mapel');
		$this->load->model('model_kelas');
		$bulan = (integer) date('m');

		if ($bulan >= 1 && $bulan <= 6) {
			$data['semester_sekarang'] = 'genap';
		} else {
			$data['semester_sekarang'] = 'ganjil';
		}

		if ($this->session->userdata('hak_akses')=="guru") {
			$data['tb_mapel'] = $this->model_mapel->get_inputmapel2($this->session->userdata('id_guru'));
		}
		else {
			$data['tb_mapel'] = $this->model_mapel->get_inputmapel('nama_mapel');
		}

		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		//print_r($data['tb_kelas']);die();
		$data['tb_wali_kelas'] = $this->model_wali_kelas->get_inputwali_kelas();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_deskripsi_mapel'] = $this->model_deskripsi_mapel->get_inputdeskripsimapel();
		if (isset($_POST['cek'])) {
			$data['id_kelas'] = $_POST['id_kelas'];
			$data['id_mapel'] = $_POST['id_mapel'];
			$data['tb_detail_pengetahuan'] =$this->model_detail_pengetahuan->get_inputdetailpengetahuansearch($data['id_kelas'],$data['id_mapel']);
			//print_r($data['tb_detail_pengetahuan']);die();
			$data['mapel']=$data['tb_detail_pengetahuan'][0]->nama_mapel;
			$this->load->view('kurikulum/detail_pengetahuan',$data);
		} else {
			$data['mapel']='';
			$data['tb_detail_pengetahuan'] =$this->model_detail_pengetahuan->get_inputdetailpengetahuan();
			$this->load->view('kurikulum/detail_pengetahuan_index',$data);
		}
	}
	public function data_detail_pengetahuan()
	{
		$this->load->model('model_detail_pengetahuan');

		//$data['detail']=$this->db->get('tb_detail_pengetahuan')->result();
		$data['id_kelas'] = $_POST['id_kelas'];
		$data['id_mapel'] = $_POST['id_mapel'];
		$data['tb_detail_pengetahuan'] =$this->model_detail_pengetahuan->get_inputdetailpengetahuansearch($data['id_kelas'],$data['id_mapel']);
		$data['content']=$this->load->view('kurikulum/data_detail_pengetahuan',$data, TRUE);
		$this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));
	}
	function update_detail_pengetahuan(){
		$this->load->model('model_detail_pengetahuan');
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$update=$this->model_detail_pengetahuan->update_detail_pengetahuan_new($id,$value,$modul);

		$nilainya=$this->db->where('id_detail_pengetahuan',$id)->get('tb_detail_pengetahuan')->result_array();
		$tugas1=$nilainya[0]['tugas1'];
		$tugas2=$nilainya[0]['tugas2'];
		$tugas3=$nilainya[0]['tugas3'];
		$tugas4=$nilainya[0]['tugas4'];
		$uts=$nilainya[0]['uts'];
		$uas=$nilainya[0]['uas'];

		$nilai_tugas = $tugas1+$tugas2+$tugas3+$tugas4;
    $nilai_tugas = ($nilai_tugas)/4;
    $nilai = $nilai_tugas+$uts+$uas;
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

    $this->db->where('id_detail_pengetahuan',$id);
    $data=array(
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
		echo "{}";
	}

	function update_detail_ketrampilan(){
		$this->load->model('model_detail_ketrampilan');
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$update=$this->model_detail_ketrampilan->update_detail_ketrampilan_new($id,$value,$modul);

		$nilainya=$this->db->where('id_detail_ketrampilan',$id)->get('tb_detail_ketrampilan')->result_array();

		$nilai_praktek=$nilainya[0]['nilai_praktek'];
		$nilai_folio=$nilainya[0]['nilai_folio'];
		$nilai_proyek=$nilainya[0]['nilai_proyek'];

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

    $this->db->where('id_detail_ketrampilan',$id);
    $data=array(
      'nilai_praktek'=>$nilai_praktek,
      'nilai_folio'=>$nilai_folio,
      'nilai_proyek'=>$nilai_proyek,
      'nilai_akhir'=>$nilai,
      'id_deskripsi_mapel'=>$id_deskripsi
    );
    $query = $this->db->update('tb_detail_ketrampilan',$data);
		echo "$id";
	}
	function update_nilai_sikap(){
		$this->load->model('model_nilai_sikap');
		$id= $this->input->post("id");
		$value= $this->input->post("value");
		$modul= $this->input->post("modul");
		$update=$this->model_nilai_sikap->update_nilai_sikap_new($id,$value,$modul);

    $this->db->where('id_nilai_sikap',$id);
    $query = $this->db->get('tb_nilai_sikap')->result_array();
		$iki=$query[0]['jenis_deskripsi_sikap'];
    $this->db->from('tb_deskripsi_sikap');
    $this->db->where('jenis_deskripsi',$iki);
    $this->db->where('nilai',$value);
    $query_deskripsi = $this->db->get();
    $id_deskripsi = $query_deskripsi->row()->id_deskripsi_sikap;

		$this->db->where('id_nilai_sikap',$id);
    $data=array(
    	'id_deskripsi_sikap'=>$id_deskripsi,
    	'nilai_akhir'=>$value
    );
    $this->db->update('tb_nilai_sikap',$data);
		echo json_encode($id);
	}
	public function detail_ketrampilan()
	{
		cek_auth();
		$this->load->model('model_detail_ketrampilan');
		$this->load->model('model_wali_kelas');
		$this->load->model('model_mapel');
		$this->load->model('model_siswa');
		$this->load->model('model_deskripsi_mapel');
		$this->load->model('model_kelas');
		$bulan = (integer) date('m');

		if ($bulan >= 1 && $bulan <= 6) {
			$data['semester_sekarang'] = 'genap';
		} else {
			$data['semester_sekarang'] = 'ganjil';
		}

		if ($this->session->userdata('hak_akses')=="guru") {
			$data['tb_mapel'] = $this->model_mapel->get_inputmapel2($this->session->userdata('id_guru'));
		}
		else {
			$data['tb_mapel'] = $this->model_mapel->get_inputmapel('nama_mapel');
		}
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_wali_kelas'] = $this->model_wali_kelas->get_inputwali_kelas();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_deskripsi_mapel'] = $this->model_deskripsi_mapel->get_inputdeskripsimapel();
		if (isset($_POST['cek'])) {
			$data['id_kelas'] = $_POST['id_kelas'];
			$data['id_mapel'] = $_POST['id_mapel'];
			$data['tb_detail_ketrampilan'] =$this->model_detail_ketrampilan->get_inputdetailketrampilansearch($data['id_kelas'],$data['id_mapel']);
			$this->load->view('kurikulum/detail_ketrampilan',$data);
		} else {
			$data['tb_detail_ketrampilan'] =$this->model_detail_ketrampilan->get_inputdetailketrampilan();
			$this->load->view('kurikulum/detail_ketrampilan_index',$data);
		}
	}
	public function data_detail_ketrampilan()
	{
		$this->load->model('model_detail_ketrampilan');
		$data['id_kelas'] = $_POST['id_kelas'];
		$data['id_mapel'] = $_POST['id_mapel'];
		$data['tb_detail_ketrampilan'] =$this->model_detail_ketrampilan->get_inputdetailketrampilansearch($data['id_kelas'],$data['id_mapel']);
		$data['content']=$this->load->view('kurikulum/data_detail_ketrampilan',$data, TRUE);
		$this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));
	}
	public function nilai_ekskul()
	{
		cek_auth();
		$this->load->model('model_nilai_ekskul');
		$this->load->model('model_siswa');
		$this->load->model('model_kelas');
		$this->load->model('model_ekskul');

		$data['tb_ekskul'] = $this->model_ekskul->get_inputekskul();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa();
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_nilai_ekskul'] = $this->model_nilai_ekskul->get_inputnilaiekskul();
		$this->load->view('kurikulum/nilai_ekskul',$data);
	}
	public function nilai_sikap()
	{
		cek_auth();
		$this->load->model('model_nilai_sikap');
		$this->load->model('model_wali_kelas');
		$this->load->model('model_siswa');
		$this->load->model('model_deskripsi_sikap');
		$this->load->model('model_kelas');
		$bulan = (integer) date('m');

		if ($bulan >= 1 && $bulan <= 6) {
			$data['semester_sekarang'] = 'genap';
		} else {
			$data['semester_sekarang'] = 'ganjil';
		}
		$data['tb_kelas'] = $this->model_kelas->get_inputkelas();
		$data['tb_wali_kelas'] = $this->model_wali_kelas->get_inputwali_kelas();
		$data['tb_siswa'] = $this->model_siswa->get_inputsiswa(); $data['tb_deskripsi_sikap'] = $this->model_deskripsi_sikap->get_inputdeskripsisikap();

		if (isset($_POST['cek'])) {

			$data['id_kelas'] = $_POST['id_kelas'];
			$data['jenis_deskripsi_sikap'] = $_POST['jenis_deskripsi_sikap'];

			$data['tb_nilai_sikap'] =$this->model_nilai_sikap->get_inputnilaisikapsearch($data['id_kelas'], $data['jenis_deskripsi_sikap']);
			$this->load->view('kurikulum/nilai_sikap',$data);
		} else {
			$data['tb_nilai_sikap'] =$this->model_nilai_sikap->get_inputnilaisikap();
			$this->load->view('kurikulum/nilai_sikap_index',$data);
		}

	}
	public function data_nilai_sikap()
	{
		$this->load->model('model_nilai_sikap');
		$data['id_kelas'] = $_POST['id_kelas'];
		$data['jenis_deskripsi_sikap'] = $_POST['jenis_deskripsi_sikap'];
		$data['tb_nilai_sikap'] =$this->model_nilai_sikap->get_inputnilaisikapsearch($data['id_kelas'], $data['jenis_deskripsi_sikap']);
		$data['content']=$this->load->view('kurikulum/data_nilai_sikap',$data, TRUE);
		$this->output
					->set_content_type('application/json')
					->set_output(json_encode($data));
	}
	public function rapor()
	{
		cek_auth();
		$this->load->model('model_rapor');
		$this->load->model('model_kelas');

		$data['tb_rapor'] =$this->model_rapor->rapornya();
		$data['tb_kelas'] =$this->model_kelas->get_inputkelas();
		//print_r($data['tb_rapor']);die();

		$this->load->view('kurikulum/rapor',$data);
	}

	public function rapor_hal1()
	{
		$id_rapor = $this->input->get('id_rapor');
		$this->load->model('model_rapor');
		$bulan = (integer) date('m');

		if ($bulan >= 1 && $bulan <= 6) {
			$data['semester_sekarang'] = 'Genap';
		} else {
			$data['semester_sekarang'] = 'Ganjil';
		}

		$data['tb_rapor'] =$this->model_rapor->get_rapor_judul($id_rapor);
		$data['tb_siswa'] =$this->model_rapor->get_rapor_sikap($data['tb_rapor']->id_siswa_pertahun);

		//print_r($data['tb_rapor']);die();
		$this->load->view('kurikulum/rapor_hal1',$data);
	}

	public function rapor_hal2()
	{
		$id_rapor = $this->input->get('id_rapor');
		$this->load->model('model_rapor');

		$bulan = (integer) date('m');

		if ($bulan >= 1 && $bulan <= 6) {
			$data['semester_sekarang'] = 'Genap';
		} else {
			$data['semester_sekarang'] = 'Ganjil';
		}
			$data['tb_rapor'] =$this->model_rapor->get_rapor_judul($id_rapor);
			$data['tb_nilai_matkul'] =$this->model_rapor->get_rapor_pengetahuan2($data['tb_rapor']->id_siswa_pertahun,"A");
			//$data['tb_nilai_matkul'] =$this->model_rapor->get_rapor_pengetahuan2($data['tb_rapor']->id_siswa_pertahun,"A");

		  $data['tb_nilai_ketrampilan'] =$this->model_rapor->get_rapor_ketrampilan2($data['tb_rapor']->id_siswa_pertahun,"A");
			//print_r($data['tb_nilai_ketrampilan']);die();
		// foreach ($data['tb_nilai_matkul'] as $key => $value) {
		// 	$data['nilai_akhir_ket']=$value->nilai_akhir_ket;
		// 	$data['nilai_ket']=$value->nilai_ket;
		// 	$data['desk_ket']=$value->desk_ket;
		// }
		// print_r($data['tb_nilai_matkul']);die();
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

		$bulan = (integer) date('m');

		if ($bulan >= 1 && $bulan <= 6) {
			$data['semester_sekarang'] = 'Genap';
		} else {
			$data['semester_sekarang'] = 'Ganjil';
		}
		$data['tb_rapornya'] =$this->model_rapor->rapornya();
		$data['tb_rapor'] =$this->model_rapor->get_rapor_judul($id_rapor);

		$data['tb_nilai_matkul'] =$this->model_rapor->get_rapor_pengetahuan2($data['tb_rapor']->id_siswa_pertahun,"B");
		$data['tb_nilai_ketrampilan'] =$this->model_rapor->get_rapor_ketrampilan2($data['tb_rapor']->id_siswa_pertahun,"B");

		$data['tb_ekskul'] =$this->model_rapor->rapor_ekskul($data['tb_rapor']->id_siswa);
		$data['tb_presensi'] =$this->model_rapor->presensi($data['tb_rapor']->id_siswa);
		$data['sakit']=0;
		$data['ijin']=0;
		$data['tanpa_ket']=0;
		$data['nam']=0;
		foreach ($data['tb_presensi'] as $key => $value) {
			$data['sakit']=$data['sakit']+$value->sakit;
			$data['ijin']=$data['ijin']+$value->ijin;
			$data['tanpa_ket']=$data['tanpa_ket']+$value->tanpa_ket;
		}
		// echo "<pre>";
		// var_dump($data);
		// die();

		$this->load->view('kurikulum/rapor_hal3',$data);
	}

	public function data_siswa(){
		$this->load->model('model_nilai_ekskul');
		$id_kelas=$this->input->post('id_kelas');
		$siswa=$this->model_nilai_ekskul->cari_siswa($id_kelas);
		if(count($siswa>0)){
			$pro_select_box = '';
			$pro_select_box .= '<option value="">.:Pilih:.</option>';
			foreach ($siswa as $data_siswa) {
				$pro_select_box .= '<option value="'.$data_siswa->id_siswa_pertahun.'">'.$data_siswa->nama_siswa.'</option>';
			}
			echo json_encode($pro_select_box);
		}
	}
	public function get_id_siswa($id_siswa_pertahun='')
	{
		$this->load->model('model_siswa_pertahun');
		$siswa = $this->model_siswa_pertahun->select_id_siswa($id_siswa_pertahun);
		$this->output
					->set_content_type('application/json')
					->set_output(json_encode($siswa));
	}
	public function get_wali_kelas_from_kelas($id_kelas){
		$this->load->model('model_siswa_pertahun');
		$guru = $this->model_siswa_pertahun->select_walikelas_siswa($id_kelas);
		$this->output
					->set_content_type('application/json')
					->set_output(json_encode($guru));
	}
	public function get_guru_from_siswa($id_siswa='')
	{
		$this->load->model('model_presensi');
		$guru = $this->model_presensi->select_kelas_siswa($id_siswa);
		$this->output
					->set_content_type('application/json')
					->set_output(json_encode($guru));
		// echo json_encode($guru);
	}

	public function get_rapor($id_siswa_pertahun='')
	{
		// $this->load->model('model_siswa_pertahun');
		// $this->load->model('model_presensi');
		// $this->load->model('model_nilai_sikap');
		// $this->load->model('model_detail_pengetahuan');
		// $this->load->model('model_detail_ketrampilan');
		// $this->load->model('model_ekskul');
		$this->load->model('model_rapor');
		$siswa = $this->model_rapor->select_rapor($id_siswa_pertahun);
		$this->output
					->set_content_type('application/json')
					->set_output(json_encode($siswa));
	}
}
