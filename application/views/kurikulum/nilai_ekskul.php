<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- ketiga edit -->
<div class="modal fade" id="modal_ubahnilaiekskul" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahnilaiekskul">Ubah Nilai Ekstrakulikuler</h4>
      </div>
      <form class="" action="<?php echo base_url('admin/update_nilai_ekskul') ?>"method="post" name="autoSumForm">
        <div class="modal-body">
          <!-- MULAI MEMBUAT FORM MENU -->
          <input type="hidden" class="form-control" id="id_nilai_ekskul" placeholder="" name="id_nilai_ekskul">
          <div class="form-group">
            <label for="">Nilai</label>
            <input type="text" class="form-control" id="nilai" placeholder="Masukkan Nilai" name="nilai" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" id="ket" placeholder="Masukkan Keterangan" name="ket" required>
            <p class="help-block"></p>
          </div>

          <!--  AKHIR MODAL MENU -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!--  MULAI MODAL-->
<body class="hold-transition skin-black sidebar-mini">
  <div class="modal fade" id="modal_nilai_ekskul" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_nilai_ekskul">Tambah Data Nilai Ekstrakulikuler</h4>
        </div>
        <form class="" action="<?php echo base_url('admin/create_nilai_ekskul') ?>" method="post">
          <div class="modal-body">

            <!-- MULAI MEMBUAT FORM MENU -->
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
              <label for="">Ekstrakulikuler</label>
              <select class="form-control" id="id_ekskul" name="id_ekskul" required>
                <option value="">:Pilih:.</option>
                <?php foreach ($tb_ekskul as $data_tb_ekskul): ?>
                  <option value="<?php echo $data_tb_ekskul->id_ekskul ?>"><?php echo $data_tb_ekskul->nama_ekskul ?></option>
                <?php endforeach; ?>
              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Nilai</label>
              <input type="text" class="form-control" id="" placeholder="Masukkan Nilai" name="nilai" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Predikat</label>
              <input type="text" class="form-control" id="" placeholder="" name="predikat" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Keterangan</label>
              <input type="text" class="form-control" id="" placeholder="Masukkan Keterangan" name="ket" required>
              <p class="help-block"></p>
            </div>

            <!--  AKHIR MODAL MENU -->

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
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
                <h3 class="box-title"><b>TABEL DATA NILAI EKSTRAKULIKULER</b></h3>
              </div>
              <div class="box-tools" style="padding:10px;">
                <div class="form-group">

                  <!--  MENAMBAH NAMA DI BUTTON-->
                  <button class="btn btn-success" data-toggle="modal"
                  data-target="#modal_nilai_ekskul">
                  <i class="fa fa-plus-circle"></i> Tambah Data
                </button>
              </div>
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
            <div class="box-body table-responsive">
              <table class="table table-hover table-bordered table-responsive">
                <thead>
                  <tr class="bg-blue" align="center">
                    <th>No</th>
                    <th>Nama Guru</th>
                    <th>Kelas</th>
                    <th>Nama Siswa</th>
                    <th>Ekstrakulikuler</th>
                    <th>Nilai</th>
                    <th>Predikat</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no =1; foreach ($tb_nilai_ekskul as $input_nilai_ekskul):?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $input_nilai_ekskul->nama_siswa?></td>
                      <td><?php echo $input_nilai_ekskul->nama_ekskul?></td>
                      <td><?php echo $input_nilai_ekskul->nilai?></td>
                      <td><?php echo $input_nilai_ekskul->predikat?></td>
                      <td><?php echo $input_nilai_ekskul->ket?></td>
                      <td>
                        <form class="" action="<?php echo base_url('admin/delete_nilai_ekskul') ?>" method="post">
                          <!-- Kelima-->
                          <button type="button" class="btn btn-warning" onclick="edit_nilai_ekskul('<?php echo $input_nilai_ekskul->id_nilai_ekskul; ?>')">
                            <i class="fa fa-edit"></i>
                          </button>
                          <input type="hidden" name="id_nilai_ekskul" value="<?php echo $input_nilai_ekskul->id_nilai_ekskul; ?>">
                          <button type="submit" class="btn btn-danger" name="delete_nilai_ekskul" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
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

function edit_nilai_ekskul(id_nilai_ekskul){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('admin/edit_nilai_ekskul?id_nilai_ekskul=') ?>'+id_nilai_ekskul,
    success: function(data){
      $response = $(data);
      var id_nilai_ekskul = $response.filter('#id_nilai_ekskul').text();
      var id_siswa = $response.filter('#id_siswa').text();
      var id_ekskul = $response.filter('#id_ekskul').text();
      var nilai = $response.filter('#nilai').text();
      var predikat = $response.filter('#predikat').text();
      var ket = $response.filter('#ket').text();
      //menampilkan ke Modal
      $('#id_nilai_ekskul').val(id_nilai_ekskul);
      $('#id_siswa').val(id_siswa);
      $('#id_ekskul').val(id_ekskul);
      $('#nilai').val(nilai);
      $('#predikat').val(predikat);
      $('#ket').val(ket);
      $('#modal_ubahnilaiekskul').modal('show');
    }
  });
}
</script>
</html>
