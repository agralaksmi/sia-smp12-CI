<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>

<!-- edit ketiga -->
<div class="modal fade" id="modal_ubahsiswa" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahsiswa">Ubah Data Siswa</h4>
      </div>
      <form class="" action="<?php echo base_url('Admin/update_siswa') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <!-- MULAI MEMBAGI 2 MENU-->
          <div class="row">
            <div class="col-md-6">
              <!-- MULAI MEMBUAT FORM MENU -->
              <div class="form-group">
                <label for="">No Induk</label>
                <input type="text" class="form-control" id="kode_pos" placeholder="Masukkan No Induk" name="kode_pos" required>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" id="id_siswa" placeholder="" name="id_siswa">
                <div class="form-group">
                  <label for="">NISN</label>
                  <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" name="nisn" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Nama Siswa</label>
                  <input type="text" class="form-control" id="nama_siswa" placeholder="MAsukkan Nama Siswa" name="nama_siswa" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select class="form-control" id="jenis_kelamin" name="jk" required>
                    <option value="perempuan">Perempuan</option>
                    <option value="laki-laki">Laki-laki</option>
                  </select>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat_lahir" placeholder="MAsukkan Tempat Lahir" name="tempat_lahir" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tanggal_lahir" placeholder="" name="tanggal_lahir" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Agama</label>
                  <select class="form-control" id="agama" name="agama" required>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                  </select>
                  <p class="help-block"></p>
                </div>
              </div>
            </div>
              <!-- MULAI MEMBAGI 2 MENU-->
              <div class="col-md-6">
              <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required>
                <p class="help-block"></p>
              </div>
                <div class="form-group">
                  <label for="">RT</label>
                  <input type="text" class="form-control" id="rt" placeholder="RW" name="rt" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">RW</label>
                  <input type="text" class="form-control" id="rw" placeholder="RT"name="rw" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Dusun</label>
                  <input type="text" class="form-control" id="dusun" placeholder="Masukkan Nama Dusun" name="dusun" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Kelurahan</label>
                  <input type="text" class="form-control" id="kelurahan" placeholder="Masukkan Nama Kelurahan" name="kelurahan" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Jenis Tinggal</label>
                  <input type="text" class="form-control" id="jenis_tinggal" placeholder="" name="jenis_tinggal" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Telepon</label>
                  <input type="text" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon" name="telepon" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
                  <p class="help-block"></p>
                </div>
              </div>
              <!-- AKHIR MEMBUAT FORM MENU -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--  MULAI MODAL-->
<body class="hold-transition skin-black sidebar-mini">
  <?php $this->load->view('template/notif') ?>
  <div class="modal fade" id="modal_siswa" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_siswa">Tambah Data Siswa</h4>
        </div>
        <form class="" action="<?php echo base_url ('Admin/create_siswa') ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <!-- MULAI MEMBAGI 2 MENU-->
            <div class="row">
              <div class="col-md-6">
                <!-- MULAI MEMBUAT FORM MENU -->
                <div class="form-group">
                  <label for="">NISN</label>
                  <input type="text" class="form-control" id="" placeholder="Masukkan NISN" name="nisn" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">No Induk</label>
                  <input type="text" class="form-control" id="" placeholder="Masukkan No Induk" name="kode_pos" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Nama Siswa</label>
                  <input type="text" class="form-control" id="" placeholder="MAsukkan Nama Siswa" name="nama_siswa" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select class="form-control" id="jenis_kelamin" name="jk" required>
                    <option value="pilih">Pilih</option>
                    <option value="perempuan">Perempuan</option>
                    <option value="laki-laki">Laki-laki</option>
                  </select>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Tempat Lahir</label>
                  <input type="text" class="form-control" id="" placeholder="MAsukkan Tempat Lahir" name="tempat_lahir" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="" placeholder="" name="tanggal_lahir" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Agama</label>
                  <select class="form-control" id="" name="agama" required>
                    <option value="pilih">Pilih</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                  </select>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="" placeholder="Masukkan Alamat" name="alamat" required>
                  <p class="help-block"></p>
                </div>
              </div>
              <!-- MULAI MEMBAGI 2 MENU-->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">RT</label>
                  <input type="text" class="form-control" id="" placeholder="RW" name="rt" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">RW</label>
                  <input type="text" class="form-control" id="" placeholder="RT"name="rw" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Dusun</label>
                  <input type="text" class="form-control" id="" placeholder="Masukkan Nama Dusun" name="dusun" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Kelurahan</label>
                  <input type="text" class="form-control" id="" placeholder="Masukkan Nama Kelurahan" name="kelurahan" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Jenis Tinggal</label>
                  <input type="text" class="form-control" id="" placeholder="" name="jenis_tinggal" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Telepon</label>
                  <input type="text" class="form-control" id="" placeholder="Masukkan Nomor Telepon" name="telepon" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" id="" placeholder="Masukkan Email" name="email" required>
                  <p class="help-block"></p>
                </div>
              </div>
              <!-- AKHIR MEMBUAT FORM MENU -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end of modal -->

  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="./" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SMP N 12 YOGYAKARTA</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SMP N 12 YOGYAKARTA</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                  <p><?php echo $_SESSION['nama']; ?></p>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img <img src="<?php echo base_url('assets/images/avatar5.png');?>" class="img-circle" alt="User Image">
                  <p><?php echo $_SESSION['nama']; ?></p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url('Auth/logout') ?>" class="btn btn-default btn-flat">Log out</a>
                  </div>
                </li>
              </ul>
            </li>

        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img <img src="<?php echo base_url('assets/images/avatar5.png');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p><?php echo $_SESSION['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <?php $this->load->view('template/sidebar') ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title"><b>TABEL DATA SISWA</b></h1>
            </div>
            <tr>
              <td></td>
            </tr>
            <div class="box-tools" style="padding:10px;">
              <div class="form-group">
                <!--  MENAMBAH NAMA DI BUTTON-->
                  <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
                <button class="btn btn-success" data-toggle="modal"
                data-target="#modal_siswa">
                <i class="fa fa-plus-circle"></i> Tambah Data
              </button>
            <?php } ?>
            </div>
            <?php if ($this->session->flashdata('sukses')) { ?>
              <div class="">
                <div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
              </div>
            <?php } ?>
            <?php if ($this->session->flashdata('edit')) { ?>
              <div class="">
                <div class="alert alert-success"><?php echo $this->session->flashdata('edit'); ?></div>
              </div>
            <?php } ?>
            <?php if ($this->session->flashdata('hapus')) { ?>
              <div class="">
                <div class="alert alert-success"><?php echo $this->session->flashdata('hapus'); ?></div>
              </div>
            <?php } ?>
          </div>

          <!-- menampilkan Tabel -->
          <div class="box-body table-responsive">
            <table class="table table-hover table-bordered table-responsive">
              <thead>
                <tr class="bg-blue" align="center">
                  <th>No</th>
                  <th>NISN</th>
                  <th>No Induk</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                  <th>RT</th>
                  <th>RW</th>
                  <th>Dusun</th>
                  <th>Kelurahan</th>
                  <th>Jenis Tinggal</th>
                  <th>Telepon</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no =1; foreach ($tb_siswa as $input_siswa):?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $input_siswa->nisn?></td>
                    <td><?php echo $input_siswa->kode_pos?></td>
                    <td><?php echo $input_siswa->nama_siswa?></td>
                    <td><?php echo $input_siswa->jenis_kelamin?></td>
                    <td><?php echo $input_siswa->tempat_lahir?></td>
                    <td><?php echo $input_siswa->tanggal_lahir?></td>
                    <td><?php echo $input_siswa->agama?></td>
                    <td><?php echo $input_siswa->alamat?></td>
                    <td><?php echo $input_siswa->rt?></td>
                    <td><?php echo $input_siswa->rw?></td>
                    <td><?php echo $input_siswa->dusun?></td>
                    <td><?php echo $input_siswa->kelurahan?></td>
                    <td><?php echo $input_siswa->jenis_tinggal?></td>
                    <td><?php echo $input_siswa->telepon?></td>
                    <td><?php echo $input_siswa->email?></td>
                    <td>
                      <!-- delete ketiga -->
                      <form class="" action="<?php echo base_url('Admin/delete_siswa') ?>" method="post">

                        <!-- kelima -->
                          <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
                        <button type="button" class="btn btn-warning" onclick="edit_siswa('<?php echo $input_siswa->id_siswa; ?>')">
                          <i class="fa fa-edit"></i>
                        </button>
                      <?php } ?>
                        <input type="hidden" name="id_siswa" value="<?php echo $input_siswa->id_siswa; ?>">
                        <!-- delete keempat -->
                          <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
                        <button type="submit" class="btn btn-danger" name="delete_siswa" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
                          <i class="fa fa-trash-o"></i>
                        </button>
                      <?php } ?>
                      </form>
                      <form class="" action="<?php echo base_url('Admin/create_rapor') ?>" method="post">
                        <input type="hidden" name="id_siswa" value="<?php echo $input_siswa->id_siswa; ?>">
                        <button type="submit" name="id_rapor" class=" btn btn-default"><i class="fa fa-print"></i></button>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div> <!-- /.box-body -->
        </div> <!-- /.box -->
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Main Footer -->
<footer class="main-footer">
  <!-- Default to the left -->
  <strong>Copyright &copy;<a href="./"> SMP N 12 Yogyakarta 2018 </a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<?php $this->load->view('template/javascript') ?>
<script type="text/javascript">
function edit_siswa(id_siswa){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('Admin/edit_siswa?id_siswa=') ?>'+id_siswa,
    success: function(data){
      $response = $(data);
      var id_siswa = $response.filter('#id_siswa').text();
      var nisn = $response.filter('#nisn').text();
      var nama_siswa = $response.filter('#nama_siswa').text();
      var jenis_kelamin = $response.filter('#jenis_kelamin').text();
      var tempat_lahir = $response.filter('#tempat_lahir').text();
      var tanggal_lahir = $response.filter('#tanggal_lahir').text();
      // var umur = $response.filter('#umur').text();
      var agama = $response.filter('#agama').text();
      var alamat = $response.filter('#alamat').text();
      var rt = $response.filter('#rt').text();
      var rw = $response.filter('#rw').text();
      var dusun = $response.filter('#dusun').text();
      var kelurahan = $response.filter('#kelurahan').text();
      var kode_pos = $response.filter('#kode_pos').text();
      var jenis_tinggal = $response.filter('#jenis_tinggal').text();
      var telepon = $response.filter('#telepon').text();
      var email = $response.filter('#email').text();
      // var foto = $response.filter('#foto').text();
      //menampilkan ke Modal
      $('#id_siswa').val(id_siswa);
      $('#nisn').val(nisn);
      $('#nama_siswa').val(nama_siswa);
      $('#jenis_kelamin').val(jenis_kelamin);
      $('#tempat_lahir').val(tempat_lahir);
      $('#tanggal_lahir').val(tanggal_lahir);
      // $('#umur').val(umur);
      $('#agama').val(agama);
      $('#alamat').val(alamat);
      $('#rt').val(rt);
      $('#rw').val(rw);
      $('#dusun').val(dusun);
      $('#kelurahan').val(kelurahan);
      $('#kode_pos').val(kode_pos);
      $('#jenis_tinggal').val(jenis_tinggal);
      $('#telepon').val(telepon);
      $('#email').val(email);
      // $('#foto').val(foto);
      $('#modal_ubahsiswa').modal('show');
    }
  });
}
</script>

</body>
</html>
