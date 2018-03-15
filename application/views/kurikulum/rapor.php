<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- ketiga edit -->
<div class="modal fade" id="modal_ubahekskul" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahekskul">Ubah Data Ekstrakulikuler</h4>
      </div>
      <form class="" action="<?php echo base_url('Admin/update_ekskul') ?>" method="post">
        <div class="modal-body">
          <!-- MULAI MEMBUAT FORM MENU -->
          <input type="hidden" class="form-control" id="id_ekskul" placeholder="" name="id_ekskul">
          <div class="form-group">
            <label for="">Nama Guru</label>
            <select class="form-control" id="id_guru" name="id_guru">
              <?php foreach ($tb_guru as $data_tb_guru): ?>
                <option value="<?php echo $data_tb_guru->id_guru ?>"><?php echo $data_tb_guru->nama_guru ?></option>
              <?php endforeach; ?>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Nama Ekstrakulikuler</label>
            <input type="text" class="form-control" id="nama_ekskul" placeholder="Masukkan Nama Ekstrakulikuler" name="nama_ekskul">
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
  <div class="modal fade" id="modal_ubahekskul" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_rapor">Tambah Data Rapor</h4>
        </div>
        <form class="" action="<?php echo base_url('Admin/create_rapor') ?>" method="post">
          <div class="modal-body">
            <!-- MULAI MEMBUAT FORM MENU -->
            <input type="hidden" class="form-control" id="id_ekskul" placeholder="" name="id_ekskul">
            <div class="form-group">
              <label for="">Nama Siswa</label>
              <select class="form-control" id="id_siswa" name="id_siswa" required>
                <option value="">:Pilih:.</option>
                <?php foreach ($tb_siswa as $data_tb_siswa): ?>
                  <option value="<?php echo $data_tb_siswa->id_siswa ?>"><?php echo $data_tb_siswa->nama_siswa ?></option>
                <?php endforeach; ?>
              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Nama Guru</label>
              <select class="form-control" id="id_guru" name="id_guru">
                <?php foreach ($tb_guru as $data_tb_guru): ?>
                  <option value="<?php echo $data_tb_guru->id_guru ?>"><?php echo $data_tb_guru->nama_guru ?></option>
                <?php endforeach; ?>
              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Nama Ekstrakulikuler</label>
              <input type="text" class="form-control" id="nama_ekskul" placeholder="Masukkan Nama Ekstrakulikuler" name="nama_ekskul">
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
                <span class="hidden-xs">Agra Laksmi Maitri</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img <img src="<?php echo base_url('assets/images/avatar5.png');?>" class="img-circle" alt="User Image">
                  <p>
                    Agra Laksmi Maitri - Web Developer
                  </p>
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

    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img <img src="<?php echo base_url('assets/images/avatar5.png');?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Agra Laksmi Maitri</p>
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
                <h3 class="box-title"><b>TABEL DATA RAPOR</b></h3>
              </div>
              <div class="box-tools" style="padding:10px;">
              </div>
              <div class="form-group">

                <!--  MENAMBAH NAMA DI BUTTON-->
                <button class="btn btn-success" data-toggle="modal"
                data-target="#modal_rapor"><i class="fa fa-plus-circle"></i>
                Tambah Data
              </button>
            </div>
              <!-- menampilkan Tabel -->
              <div class="box-body table-responsive">
                <table class="table table-hover table-bordered table-responsive">
                  <thead>
                    <tr class="bg-blue" align="center">
                      <th>No</th>
                      <th>Nama Wali Kelas</th>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Catatan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no =1; foreach ($tb_rapor as $input_rapor):?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $input_rapor->nama_guru?></td>
                        <td><?php echo $input_rapor->nama_siswa?></td>
                        <td><?php echo $input_rapor->tingkat?><?php echo $input_rapor->nama_kelas?></td>
                        <td><?php //echo $input_rapor->catatan?></td>
                        <td>
                          <!-- ketiga delete -->
                          <form class="" action="<?php echo base_url('admin/delete_rapor') ?>" method="post">
                          <button type="submit" class="btn btn-danger" name="delete_rapor">
                            <i class="fa fa-trash-o"></i>
                          </button>
                          <a class="btn btn-warning" href="<?php echo base_url('Kurikulum/rapor_hal1?id_rapor=').$input_rapor->id_rapor ?>">Cetak Hal 1</a>
                          <a class="btn btn-info" href="<?php echo base_url('Kurikulum/rapor_hal2?id_rapor=').$input_rapor->id_rapor ?>">Cetak Hal 2</a>
                          <a class="btn btn-success" href="<?php echo base_url('Kurikulum/rapor_hal3?id_rapor=').$input_rapor->id_rapor ?>">Cetak Hal 3</a>
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
function edit_ekskul(id_ekskul){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('Admin/edit_ekskul?id_ekskul=') ?>'+id_ekskul,
    success: function(data){
      $response = $(data);
      var id_ekskul = $response.filter('#id_ekskul').text();
      var id_guru = $response.filter('#id_guru').text();
      var nama_ekskul = $response.filter('#nama_ekskul').text();
      //menampilkan ke Modal
      $('#id_ekskul').val(id_ekskul);
      $('#id_guru').val(id_guru);
      $('#nama_ekskul').val(nama_ekskul);
      $('#modal_ubahekskul').modal('show');
    }
  });
}
</script>

</body>
</html>
