<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- ketiga edit -->
<div class="modal fade" id="modal_ubahpresensi" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahpresensi">Ubah Data Presensi</h4>
      </div>
      <form class="" action="<?php echo base_url('Admin/update_presensi') ?>" method="post">
        <div class="modal-body">
          <!-- MULAI MEMBUAT FORM MENU -->
          <input type="hidden" class="form-control" id="id_presensi" placeholder="" name="id_presensi">

          <div class="form-group">
            <label for="">Nama Siswa</label>
            <input type="text" class="form-control" id="nama_siswa" placeholder="" name="nama_siswa" readonly>
          </div>
        <div class="form-group">
          <label for="">Sakit</label>
          <input type="number" class="form-control" id="sakit_u" placeholder="0" name="sakit">
          <p class="help-block"></p>
        </div>
        <div class="form-group">
          <label for="">Ijin</label>
          <input type="number" class="form-control" id="ijin_u" placeholder="0" name="ijin">
          <p class="help-block"></p>
        </div>
        <div class="form-group">
          <label for="">Tanpa Keterangan</label>
          <input type="number" class="form-control" id="tanpa_ket_u" placeholder="0" name="tanpa_ket">
          <p class="help-block"></p>
        </div>

        <!--  AKHIR MODAL MENU -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
      </div>
    </form>
  </div>
</div>
</div>
<!--  MULAI MODAL-->
<body class="hold-transition skin-black sidebar-mini">

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
                <h3 class="box-title"><b>TABEL DATA PRESENSI</b></h3>
              </div>
                <div class="box-tools" style="padding:10px;">
                <?php if ($this->session->flashdata('sukses')) { ?>
                  <div class="">
                    <div class="alert alert-success"><?php echo $this->session->flashdata('sukses'); ?></div>
                  </div>
                <?php } ?>
                <?php if ($this->session->flashdata('edit')) { ?>
                  <div class="">
                    <div class="alert alert-warning"><?php echo $this->session->flashdata('edit'); ?></div>
                  </div>
                <?php } ?>
                <?php if ($this->session->flashdata('delete')) { ?>
                  <div class="">
                    <div class="alert alert-danger"><?php echo $this->session->flashdata('delete'); ?></div>
                  </div>
                <?php } ?>
              </div>

            <!-- menampilkan Tabel -->
            <!-- menampilkan Tabel -->
            <div class="box-body">
              <div class="row ">
                <div class="col-md-4" style="margin-left:5px;">
                  <form class=""  action="" method="post">
                    <div class="form-group">
                      <label>Kelas</label>
                      <select class="form-control" name="id_kelas">
                        <option value="">Pilih</option>
                        <?php foreach ($tb_kelas as $data_tb_kelas): ?>
                          <option value="<?php echo $data_tb_kelas->id_kelas ?>"><?php echo $data_tb_kelas->tingkat ?><?php echo $data_tb_kelas->nama_kelas ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Semester</label>
                      <input class="form-control" type="text" name="semester" value="<?php echo $semester_sekarang?>" readonly>
                    </div>
                    <div class="text-center form-group">
                      <button type="submit" name="cek" class="btn btn-success">Cek</button>
                    </div>
                  </form>
                </div>
              </div>
              <br>
            <div class="box-body table-responsive">
              <table class="table table-hover table-bordered table-responsive">
                <thead>
                  <tr class="bg-blue" align="center">
                    <th>No</th>
                    <th>Nama Wali Kelas</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Sakit</th>
                    <th>Ijin</th>
                    <th>Tanpa Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no =1; foreach ($tb_presensi as $input_presensi):?>
                    <tr>
                      <td><?php echo @$no++ ?></td>
                      <td><?php echo @$input_presensi->nama_guru?></td>
                      <td><?php echo @$input_presensi->nama_siswa?></td>
                      <td><?php echo @$input_presensi->tingkat?><?php echo @$input_presensi->nama_kelas?></td>
                      <td><?php echo @$input_presensi->sakit?></td>
                      <td><?php echo @$input_presensi->ijin?></td>
                      <td><?php echo @$input_presensi->tanpa_ket?></td>
                      <td>
                        <form class="" action="<?php echo base_url('admin/delete_presensi') ?>" method="post">
                          <!-- kelima -->
                          <button type="button" class="btn btn-warning" onclick="edit_presensi('<?php echo $input_presensi->id_presensi; ?>')">
                            <i class="fa fa-edit"></i>
                          </button>
                          <input type="hidden" name="id_presensi" value="<?php echo @$input_presensi->id_presensi; ?>">
                          <button type="submit" class="btn btn-danger" name="delete_presensi" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
                            <i class="fa fa-trash-o"></i>
                          </button>
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
function edit_presensi(id_presensi){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('Admin/edit_presensi?id_presensi=') ?>'+id_presensi,
    success: function(data){
      $response = $(data);
      // var id_wali_kelas = $response.filter('#id_wali_kelas').text();
      var id_presensi = $response.filter('#id_presensi').text();
      var nama_siswa = $response.filter('#nama_siswa').text();
      // var id_kelas = $response.filter('#id_kelas').text();
      var sakit = $response.filter('#sakit').text();
      var ijin = $response.filter('#ijin').text();
      var tanpa_ket = $response.filter('#tanpa_ket').text();
      //menampilkan ke Modal
      $('#id_presensi').val(id_presensi);
      // $('#id_wali_kelas').val(id_wali_kelas);
      $('#nama_siswa').val(nama_siswa);
      // $('#id_kelas').val(id_kelas);
      $('#sakit_u').val(sakit);
      $('#ijin_u').val(ijin);
      $('#tanpa_ket_u').val(tanpa_ket);
      $('#modal_ubahpresensi').modal('show');
    }
  });
}





</script>

</body>
</html>
