<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('cek_auth'))
{
  // dipanggil di tiap halaman (di tiap function controller) untuk memastikan user sudah login
  function cek_auth()
  {
    // cek apakah user sudah melakukan login apa belum
    if (!isset($_SESSION['hak_akses'])) {
      // arahkan ke halaman login jika user belum pernah login
      // variabel $base_url harus sesuai sama isi base_url di application/config/config.php
      $base_url = 'http://localhost/sk/';
      // variabel $halaman_login harus sesuai sama lokasi form login
      $halaman_login = $base_url.'';
      redirect($halaman_login);
    }

  }
}
