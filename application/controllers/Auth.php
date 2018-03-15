<?php
/**
 * controller khusus login logout dan pengelolaan akun
 * CATATAN : untuk menggunakan login, harus membuat dan memakai helper baru
 * catatan tentang helper gw taroh di baris paling bawah file ini
 */
class Auth extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('akun_model');
    $this->load->helper('url');
    $this->load->library('session');
  }

  // dipanggil ketika tombol login diklik
  public function login()
  {
    // ambil hasil input username sama password dari view
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    // cek apakah akun dengan username dan password tadi ada ato gak di db
    $cek_akun = $this->akun_model->cek_akun($username,$password);
    if ($cek_akun) {
      // kalo ada, ambil datanya trus taro di session
      $akun = $this->akun_model->get_akun($username,$password);
      // echo "<pre>";
      // var_dump($akun);
      // die();
      //print_r($akun);die();
      $data = array(
        'username'  => $akun->username,
        'hak_akses'     => $akun->hak_akses,
        'nama'     => $akun->nama,
        'id_guru'     => $akun->id_guru
      );

      $this->session->set_userdata($data);
      // terus baru redirect (arahin)  ke halaman awal/home berdasarkan hak_akses
      /*
      MISALKAN: punya yoga ada tiga hak_akses:
      - admin       halaman awalnya/homenya ada di : base_url('dasboard')
      - karyawan    halaman awalnya/homenya ada di : base_url('dasboard')
      - pembeli     halaman awalnya/homenya ada di : base_url() doang
      */
      switch ($akun->hak_akses) {
        case 'kurikulum':
          $url = base_url('kurikulum/index');
          break;
        case 'guru':
          $url = base_url('kurikulum/index');
          break;
        case 'wali_kelas':
          $url = base_url('kurikulum/index');
        case 'siswa':
          $url = base_url();
          break;
        default:
          break;
      }
      redirect($url);
    }
  }

  // dipanggil saat tombol logout diklik
  public function logout()
  {
    $array_items = array('username', 'hak_akses');
    $this->session->unset_userdata($array_items);
    $halaman_login = base_url('');
    redirect($halaman_login);
  }

  // dipanggil ketika tombol daftar diklik oleh user
  public function register()
  {
    // ambil hasil input username sama password dari view
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $simpan_akun = $this->akun_model->set_akun($username,$password);
    // kalo berhasil daftar
    if ($simpan_akun) {
      // NANTI DIUBAH
      // $halaman_daftar_akun dibikin cuma satu untuk semua hak akses apapun, jangan dipisah2 tiap hak akses
      $halaman_daftar_akun = base_url('');
      redirect($halaman_daftar_akun);
    }
  }

  // dipanggil ketika admin memvalidasi akun yang baru terdaftar
  // validasi maksudnya untuk mengubah level hak akses
  public function validate_register()
  {
    # code...
  }

  // menampilkan semua data akun
  public function list_akun()
  {
    # code...
  }

  // dipanggil pada ajax untuk edit akun
  // ajax dijalankan ketika tombol edit pada list_akun diklik
  public function edit_akun()
  {
    # code...
  }

  // dipanggil ketika tombol simpan diklik saat mengedit akun
  public function update_akun()
  {
    # code...
  }

  // dipanggil ketika tombol hapus pada list_akun diklik
  public function delete_akun()
  {
    # code...
  }
}
/*****************************************************
    CATATAN:

    =============== Tentang Helper =============
    Helper isinya buat manggil fungsi baru yg bukan bawaan php.
    Ada 2 jenis helper berdasar pembuatnya:
    - helper bawaan CI, contohnya kayak helper('url') yang salah satu isinya ada fungsi base_url()
    - sama helper buatan programer, nah ini yang mau kita bikin buat njalanin proses authentikasi (istilah gampangnya login) nanti
    ============================================

    =========== Langkah Bikin Helper ===========
    - bikin file baru di folder application/helpers/
    - daftarkan helper baru tadi ke application/config/autoload.php
      cari baris yang ada koding $autoload['helper'] gitu
      terus tambahin kodingnya jadi gini:
      $autoload['helper'] = array('nama_file_baru_di_folder_helpers_tadi_tanpa_kata_helper');
        MISALKAN :
        kita punya file helpers/auth_helper.php
        nanti kodingnya jadi:
        $autoload['helper'] = array('auth');
    - selesai
    ============================================

    ============ Cara Manggil Helper ===========
    Ini harusnya udah tau sih :)
    - di setiap fungsi controller yang mau make helpernya tadi, tambahin koding :
      $this->load->helper('nama_file_baru_di_folder_helpers_tadi_tanpa_kata_helper');
        MISALKAN :
        kita punya file helpers/auth_helper.php
        nanti kodingnya jadi:
        $this->load->helper('auth');
    - habis itu bisa manggil semua fungsi yang ada di file helper baru
        MISALKAN :
        di file helpers/auth_helper.php ada fungsi cek_auth
        untuk manggilnya, kita tinggal tulis
        cek_auth();
    GITUUUUUU.....
    ============================================

*****************************************************/
