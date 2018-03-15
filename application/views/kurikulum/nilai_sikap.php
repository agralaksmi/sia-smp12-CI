<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- ketiga edit -->
<div class="modal fade" id="modal_ubahnilaisikap" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahnilaisikap">Ubah Data Nilai Sikap</h4>
      </div>
      <form class="" action="<?php echo base_url('admin/update_nilai_sikap') ?>" method="post">
        <div class="modal-body">
          <!-- MULAI MEMBUAT FORM MENU -->
          <input type="hidden" class="form-control" id="id_nilai_sikap" placeholder="" name="id_nilai_sikap">
          <div class="form-group">
            <label for="">Nama Siswa</label>
            <select class="form-control" id="id_siswa" name="id_siswa">
              <?php foreach ($tb_siswa as $data_tb_siswa): ?>
                <option value="<?php echo $data_tb_siswa->id_siswa ?>"><?php echo $data_tb_siswa->nama_siswa ?></option>
              <?php endforeach; ?>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Jenis Sikap</label>
            <select class="form-control" id="id_deskripsi_sikap" name="id_deskripsi_sikap">
              <?php foreach ($tb_deskripsi_sikap as $data_tb_deskripsi_sikap): ?>
                <option value="<?php echo $data_tb_deskripsi_sikap->id_deskripsi_sikap ?>"><?php echo $data_tb_deskripsi_sikap->jenis_deskripsi ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Nilai</label>
            <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" placeholder="0">
            <p class="help-block">Contoh : A,B</p>
          </div>
          <div class="form-group">
            <label for="">Deskripsi Sikap</label>
            <select class="form-control" id="id_deskripsi_sikap" name="id_deskripsi_sikap">
              <?php foreach ($tb_deskripsi_sikap as $data_tb_deskripsi_sikap): ?>
                <option value="<?php echo $data_tb_deskripsi_sikap->id_deskripsi_sikap ?>"><?php echo $data_tb_deskripsi_sikap->deskripsi ?></option>
              <?php endforeach; ?>
            </select>
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
  <div class="modal fade" id="modal_nilai_sikap" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_nilai_sikap">Tambah Nilai Sikap</h4>
        </div>
        <form class="" action="<?php echo base_url ('Admin/create_nilai_sikap')?>" method="post">
          <div class="modal-body">

            <!-- MULAI MEMBUAT FORM MENU -->

            <div class="form-group">
              <label for="">Nama Siswa</label>
              <select class="form-control" id="id_siswa" name="id_siswa">
                <option value="">:Pilih:.</option>
                <?php foreach ($tb_siswa as $data_tb_siswa): ?>
                  <option value="<?php echo $data_tb_siswa->id_siswa ?>"><?php echo $data_tb_siswa->nama_siswa ?></option>
                <?php endforeach; ?>
              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Jenis Sikap</label>
              <select class="form-control" id="" name="id_deskripsi_sikap">
                <option value="">:Pilih:.</option>
                <?php foreach ($tb_deskripsi_sikap as $data_tb_deskripsi_sikap): ?>
                  <option value="<?php echo $data_tb_deskripsi_sikap->id_deskripsi_sikap ?>"><?php echo $data_tb_deskripsi_sikap->jenis_deskripsi ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Nilai</label>
                <input type="text" class="form-control" id="" name="nilai_akhir" placeholder="0">
              <!-- <input type="text" class="form-control" id="" name="nilai_akhir" placeholder="0"> -->
              <!-- <select class="form-control" id="" name="nilai_akhir">
                <option value="">:Pilih:.</option>
                <option value="A">A</option>
                <option value="B">B</option>

              </select> -->
              <p class="help-block">Contoh : A,B</p>
            </div>
            <div class="form-group">
              <label for="">Deskripsi Sikap</label>
              <select class="form-control" id="" name="id_deskripsi_sikap">
                <option value="">:Pilih:.</option>
                <?php foreach ($tb_deskripsi_sikap as $data_tb_deskripsi_sikap): ?>
                  <option value="<?php echo $data_tb_deskripsi_sikap->id_deskripsi_sikap ?>"><?php echo $data_tb_deskripsi_sikap->deskripsi ?></option>
                <?php endforeach; ?>
              </select>
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
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">

                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">

                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Log out</a>
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
                <h3 class="box-title"><b>TABEL DATA NILAI SIKAP</b></h3>
            </div>
            <div class="box-tools" style="padding:10px;">
              <div class="form-group">

                <!--  MENAMBAH NAMA DI BUTTON-->
                <button class="btn btn-success" data-toggle="modal"
                data-target="#modal_nilai_sikap">
                <i class="fa fa-plus-circle"></i> Tambah Data
              </button>
            </div>
          </div>

            <!-- menampilkan Tabel -->
            <div class="box-body table-responsive">
              <table class="table table-hover table-bordered table-responsive">
                <thead>
                  <tr class="bg-blue" align="center">
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Sikap</th>
                    <th>Nilai</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no =1; foreach ($tb_nilai_sikap as $input_nilai_sikap):?>
                    <tr>
                      <td><?php echo $input_nilai_sikap->id_nilai_sikap ?></td>
                      <td><?php echo $input_nilai_sikap->nama_siswa?></td>
                      <td><?php echo $input_nilai_sikap->jenis_deskripsi?></td>
                      <td><?php echo $input_nilai_sikap->nilai_akhir?></td>
                      <td><?php echo $input_nilai_sikap->deskripsi?></td>
                      <td>
                        <form class="" action="<?php echo base_url('admin/delete_nilai_sikap') ?>" method="post">
                        <!-- Kelima-->
                        <button type="button" class="btn btn-warning" onclick="edit_nilai_sikap('<?php echo $input_nilai_sikap->id_nilai_sikap; ?>')">
                          <i class="fa fa-edit"></i>
                        </button>
                        <input type="hidden" name="id_nilai_sikap" value="<?php echo $input_nilai_sikap->id_nilai_sikap; ?>">
                        <button type="submit" class="btn btn-danger" name="delete_nilai_sikap" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
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

function edit_nilai_sikap(id_nilai_sikap){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('admin/edit_nilai_sikap?id_nilai_sikap=') ?>'+id_nilai_sikap,
    success: function(data){
      $response = $(data);
      var id_nilai_sikap = $response.filter('#id_nilai_sikap').text();
      var id_siswa = $response.filter('#id_siswa').text();
      var nilai_akhir = $response.filter('#nilai_akhir').text();
      var id_deskripsi_sikap = $response.filter('#id_deskripsi_sikap').text();

      //menampilkan ke Modal
      $('#id_nilai_sikap').val(id_nilai_sikap);
      $('#id_siswa').val(id_siswa);
      $('#nilai_akhir').val(nilai_akhir);
      $('#id_deskripsi_sikap').val(id_deskripsi_sikap);
      $('#modal_ubahnilaisikap').modal('show');
    }
  });
}
</script>

</body>
</html>
