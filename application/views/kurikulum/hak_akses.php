<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- ketiga edit -->
<div class="modal fade" id="modal_ubahhakakses" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahhakakses">Ubah Data Hak Akses</h4>
      </div>
      <form class="" action="<?php echo base_url('Admin/update_hak_akses') ?>" method="post">
        <div class="modal-body">
          <!-- MULAI MEMBUAT FORM MENU -->
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Guru</label>
            <select class="form-control" id="id_guru" name="id_guru" required>
              <?php foreach ($tb_guru as $key => $value): ?>
                <option value="<?php echo $value->id_guru ?>"><?php echo $value->nama_guru ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" name="nama" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Hak Akses</label>
            <select class="form-control" id="hak_akses" name="hak_akses" required>
              <option value="pilih">Pilih</option>
              <option value="kurikulum">Kurikulum</option>
              <option value="guru">Guru</option>
              <option value="wali_kelas">Wali Kelas</option>
              <option value="siswa">Siswa</option>
              <option value="ortu">Wali Murid</option>
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
  <div class="modal fade" id="modal_hak_akses" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_hak_akses">Tambah Hak Akses</h4>
        </div>
        <form class="" action="<?php echo base_url ('Admin/create_hak_akses') ?>" method="post">
          <div class="modal-body">

            <!-- MULAI MEMBUAT FORM MENU -->
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" class="form-control" id="" placeholder="Masukkan Username" name="username" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="text" class="form-control" id="" placeholder="Masukkan Password" name="password" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label>Guru</label>
              <select class="form-control" name="guru" required>
                <?php foreach ($tb_guru as $key => $value): ?>
                  <option value="<?php echo $value->id_guru ?>"><?php echo $value->nama_guru ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Nama Lengkap</label>
              <input type="text" class="form-control" id="" placeholder="Masukkan Nama Lengkap" name="nama" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Hak Akses</label>
              <select class="form-control" id="hak_akses" name="hak_akses" required>
                <option value="pilih">Pilih</option>
                <option value="kurikulum">Kurikulum</option>
                <option value="guru">Guru</option>
                <option value="wali_kelas">Wali Kelas</option>
                <option value="siswa">Siswa</option>
                <option value="ortu">Wali Murid</option>
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

            <!-- Account Menu -->
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
                <h3 class="box-title"><b> TABEL DATA HAK AKSES </b></h3>
              </div>
              <div class="box-tools" style="padding:10px;">
                <div class="form-group">

                  <!--  MENAMBAH NAMA DI BUTTON-->
                  <button class="btn btn-success" data-toggle="modal"
                  data-target="#modal_hak_akses">
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
                    <th>Usename</th>
                    <th>Password</th>
                    <th>Nama User</th>\
                    <th>Hak Akses</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no =1; foreach ($tb_hak_akses as $input_hak_akses):?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $input_hak_akses->username?></td>
                      <td><?php echo $input_hak_akses->password?></td>
                      <td><?php echo $input_hak_akses->nama?></td>
                      <td><?php echo $input_hak_akses->hak_akses?></td>
                      <td

                      <form class="" action="<?php echo base_url('Admin/delete_hak_akses') ?>" method="post">
                        <!-- kelima -->
                        <button type="button" class="btn btn-warning" onclick="edit_hak_akses('<?php echo $input_hak_akses->username; ?>')">
                          <i class="fa fa-edit"></i>
                        </button>
                        <input type="hidden" name="username" value="<?php echo $input_hak_akses->username; ?>">
                        <button type="submit" class="btn btn-danger" name="delete_hak_akses" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
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
  <strong>Copyright &copy;<a href="./"> SMP N 12 YOGYAKARTA 2018 </a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<?php $this->load->view('template/javascript') ?>
<script type="text/javascript">
function edit_hak_akses(username){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('Admin/edit_hak_akses?username=') ?>'+username,
    success: function(data){
      $response = $(data);
      var username = $response.filter('#username').text();
      var password = $response.filter('#password').text();
      var nama = $response.filter('#nama').text();
      var id_guru = $response.filter('#id_guru').text();
      var hak_akses = $response.filter('#hak_akses').text();
      //menampilkan ke Modal
      $('#username').val(username);
      $('#password').val(password);
      $('#nama').val(nama);
      $('#id_guru').val(id_guru);
      $('#hak_akses').val(hak_akses);
      $('#modal_ubahhakakses').modal('show');
    }
  });
}
</script>
</body>
</html>
