<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- ketiga edit -->
<div class="modal fade" id="modal_ubahdetailketrampilan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahdetailketrampilan">Ubah Nilai Ketrampilan</h4>
      </div>
      <form class="" action="<?php echo base_url('admin/update_detail_ketrampilan') ?>" method="post" name="autoSumForm">
        <div class="modal-body">
          <!-- MULAI MEMBUAT FORM MENU -->
          <input type="hidden" class="form-control" id="id_detail_ketrampilan" placeholder="" name="id_detail_ketrampilan">
          <div class="form-group">
            <label for="">Mata Pelajaran</label>
            <select class="form-control" id="id_mapel" name="id_mapel" required>
              <?php foreach ($tb_mapel as $data_tb_mapel): ?>
                <option value="<?php echo $data_tb_mapel->id_mapel ?>"><?php echo $data_tb_mapel->nama_mapel ?></option>
              <?php endforeach; ?>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Nama Siswa</label>
            <select class="form-control" id="id_siswa" name="id_siswa" required>
              <?php foreach ($tb_siswa as $data_tb_siswa): ?>
                <option value="<?php echo $data_tb_siswa->id_siswa ?>"><?php echo $data_tb_siswa->nama_siswa ?></option>
              <?php endforeach; ?>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Nilai Praktek</label>
            <input type="text" class="form-control" id="nilai_praktek" placeholder="0" name="nilai_praktek" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Nilai Folio</label>
            <input type="text" class="form-control" id="nilai_folio" placeholder="0" name="nilai_folio" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Nilai Proyek</label>
            <input type="text" class="form-control" id="nilai_proyek" placeholder="0" name="nilai_proyek" required>
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
  <div class="modal fade" id="modal_detail_ketrampilan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_detail_ketrampilan">Tambah Data Nilai Ketrampilan</h4>
        </div>
        <form class="" action="<?php echo base_url ('Admin/create_detail_ketrampilan')?>" method="post">
          <div class="modal-body">

            <!-- MULAI MEMBUAT FORM MENU -->
            <div class="form-group">
              <label for="">Mata Pelajaran</label>
              <select class="form-control" id="id_mapel" name="id_mapel" required>
                <option value="">:Pilih:.</option>
                <?php foreach ($tb_mapel as $data_tb_mapel): ?>
                  <option value="<?php echo $data_tb_mapel->id_mapel ?>"><?php echo $data_tb_mapel->nama_mapel ?></option>
                <?php endforeach; ?>
              </select>
              <p class="help-block"></p>
            </div>
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
              <label for="">Nilai Praktek</label>
              <input type="text" class="form-control" id="" placeholder="0" name="nilai_praktek" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Nilai Folio</label>
              <input type="text" class="form-control" id="" placeholder="0" name="nilai_folio" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Nilai Proyek</label>
              <input type="text" class="form-control" id="" placeholder="0" name="nilai_proyek" required>
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
                <h3 class="box-title"><b>TABEL NILAI KETERAMPILAN</b></h3>

              </div>
              <div class="box-tools" style="padding:10px;">
                <div class="form-group">

                  <!--  MENAMBAH NAMA DI BUTTON-->
                  <button class="btn btn-success" data-toggle="modal"
                  data-target="#modal_detail_ketrampilan"><i class="fa fa-plus"></i>
                  Tambah Data
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
                    <th align="center">No</th>
                    <th>Mata Pelajaran</th>
                    <th>Nama Siswa</th>
                    <th>Nilai Praktek</th>
                    <th>Nilai Folio</th>
                    <th>Nilai Proyek</th>
                    <th>Nilai Akhir</th>
                    <th>Predikat</th>
                    <th>Deskripsi Mata Pelajaran</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no =1; foreach ($tb_detail_ketrampilan as $input_detail_ketrampilan):?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $input_detail_ketrampilan->nama_mapel?></td>
                      <td><?php echo $input_detail_ketrampilan->nama_siswa?></td>
                      <td><?php echo $input_detail_ketrampilan->nilai_praktek?></td>
                      <td><?php echo $input_detail_ketrampilan->nilai_folio?></td>
                      <td><?php echo $input_detail_ketrampilan->nilai_proyek?></td>
                      <td><?php echo $input_detail_ketrampilan->nilai_akhir?></td>
                      <td><?php echo $input_detail_ketrampilan->nilai?></td>
                      <td><?php echo $input_detail_ketrampilan->deskripsi?></td>
                      <td>
                        <form class="" action="<?php echo base_url('admin/delete_detail_ketrampilan') ?>" method="post">
                          <!-- Kelima-->
                          <button type="button" class="btn btn-warning" onclick="edit_detail_ketrampilan('<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>')">
                            <i class="fa fa-edit"></i>
                          </button>
                          <input type="hidden" name="id_detail_ketrampilan" value="<?php echo $input_detail_ketrampilan->id_detail_ketrampilan; ?>">
                          <button type="submit" class="btn btn-danger" name="delete_detail_ketrampilan" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
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

function edit_detail_ketrampilan(id_detail_ketrampilan){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('admin/edit_detail_ketrampilan?id_detail_ketrampilan=') ?>'+id_detail_ketrampilan,
    success: function(data){
      $response = $(data);
      var id_detail_ketrampilan = $response.filter('#id_detail_ketrampilan').text();
      var id_siswa = $response.filter('#id_siswa').text();
      var id_mapel = $response.filter('#id_mapel').text();
      var nilai_praktek = $response.filter('#nilai_praktek').text();
      var nilai_folio = $response.filter('#nilai_folio').text();
      var nilai_proyek = $response.filter('#nilai_proyek').text();
      // var nilai_akhir = $response.filter('#nilai_akhir').text();
      // var id_deskripsi_mapel = $response.filter('#id_deskripsi_mapel').text();
      //menampilkan ke Modal
      $('#id_detail_ketrampilan').val(id_detail_ketrampilan);
      $('#id_siswa').val(id_siswa);
      $('#id_mapel').val(id_mapel);
      $('#nilai_praktek').val(nilai_praktek);
      $('#nilai_folio').val(nilai_folio);
      $('#nilai_proyek').val(nilai_proyek);
      // $('#nilai_akhir').val(nilai_akhir);
      // $('#id_deskripsi_mapel').val(id_deskripsi_mapel);
      $('#modal_ubahdetailketrampilan').modal('show');
    }
  });
}
</script>
</body>
</html>
