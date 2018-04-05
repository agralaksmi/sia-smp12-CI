<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- ketiga edit -->
<div class="modal fade" id="modal_ubahguru" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahguru">Ubah Data Guru</h4>
      </div>
      <form class="" action="<?php echo base_url('admin/update_guru') ?>" method="post">
        <div class="modal-body">
          <input type="hidden" id="id_guru" name="id_guru" value="">
          <!-- MULAI MEMBUAT FORM MENU -->
          <div class="form-group">
            <label for="">NIP</label>
            <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP" name="nip" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Nama Guru</label>
            <input type="text" class="form-control" id="nama_guru" placeholder="Masukan Nama Guru" name="nama" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin " name="jk" required>
              <option value="perempuan">Perempuan</option>
              <option value="laki-laki">Laki-laki</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" placeholder="" name="tanggal_lahir" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Golongan Ruang</label>
            <input type="text" class="form-control" id="golongan_ruang" placeholder="" name="golongan_ruang" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Tingkatan</label>
            <input type="text" class="form-control" id="tingkatan" placeholder="" name="tingkatan" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Tugas Tertentu</label>
            <input type="text" class="form-control" id="tugas_tertentu" placeholder="" name="tugas_tertentu" required>
            <p class="help-block"></p>
          </div>
          <!-- <div class="form-group">
            <label for="">Foto</label>
            <input type="file" class="form-control" id="foto" placeholder="" name="foto">
            <p class="help-block"></p>
          </div> -->
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
  <div class="modal fade" id="modal_guru" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal_guru">Tambah Data Guru</h4>
        </div>
        <form class="" action="<?php echo base_url ('Admin/create_guru') ?>" method="post">
          <div class="modal-body">

            <!-- MULAI MEMBUAT FORM MENU -->
            <div class="form-group">
              <label for="">NIP</label>
              <input type="text" class="form-control" id="" placeholder="Masukkan NIP" name="nip"  required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Nama Guru</label>
              <input type="text" class="form-control" id="" placeholder="Masukan Nama Guru" name="nama" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Jenis Kelamin</label>
              <select class="form-control" name="jk">
                <option value="">Pilih</option>
                <option value="perempuan">Perempuan</option>
                <option value="laki-laki">Laki-laki</option>
              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Tanggal Lahir</label>
              <input type="date" class="form-control" id="" placeholder="" name="tanggal_lahir" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Golongan Ruang</label>
              <input type="text" class="form-control" id="" placeholder="" name="golongan_ruang" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Tingkatan</label>
              <input type="text" class="form-control" id="" placeholder="" name="tingkatan" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Tugas Tertentu</label>
              <input type="text" class="form-control" id="" placeholder="" name="tugas_tertentu" required>
              <p class="help-block"></p>
            </div>
            <!-- <div class="form-group">
              <label for="">Foto</label>
              <input type="file" class="form-control" id="" placeholder="" name="foto">
              <p class="help-block"></p>
            </div> -->

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
                <h3 class="box-title"><b>TABEL DATA GURU</b></h3>
              </div>
              <div class="box-tools" style="padding:10px;">
                <div class="form-group">

                  <!--  MENAMBAH NAMA DI BUTTON-->
                    <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
                  <button class="btn btn-success" data-toggle="modal"
                  data-target="#modal_guru">
                  <i class="fa fa-plus"></i> Tambah Data
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
              <?php if ($this->session->flashdata('delete')) { ?>
                <div class="">
                  <div class="alert alert-danger"><?php echo $this->session->flashdata('delete'); ?></div>
                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('exist')) { ?>
              <div class="">
                <div class="alert alert-warning"><?php echo $this->session->flashdata('exist'); ?></div>
              </div>
            <?php } ?>
            </div>

            <!-- menampilkan Tabel -->
            <div class="box-body table-responsive">
              <table class="table table-hover table-bordered table-responsive">
                <thead>
                  <tr class="bg-blue" align="center">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama </th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Golongan Ruang</th>
                    <th>Tingkatan</th>
                    <th>Tugas Tertentu</th>
                    <th>Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $no =1; foreach ($tb_guru as $input_guru):?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $input_guru->nip?></td>
                      <td><?php echo $input_guru->nama_guru?></td>
                      <td><?php echo $input_guru->jenis_kelamin?></td>
                      <td><?php echo $input_guru->tanggal_lahir?></td>
                      <td><?php echo $input_guru->golongan_ruang?></td>
                      <td><?php echo $input_guru->tingkatan?></td>
                      <td><?php echo $input_guru->tugas_tertentu?></td>
                      <!-- <td><img src="../images/1.jpg" height="100px"></td> -->
                      <td>
                        <!-- delete ketiga -->
                        <form class="" action="<?php echo base_url('admin/delete_guru') ?>" method="post">

                          <!-- Kelima-->
                            <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
                          <button type="button" class="btn btn-warning" onclick="edit_guru('<?php echo $input_guru->id_guru; ?>')">
                            <i class="fa fa-edit"></i>
                          </button>
                          <input type="hidden" name="id_guru" value="<?php echo $input_guru->id_guru; ?>">
                          <!-- delete keempat -->
                          <button type="submit" class="btn btn-danger" name="delete_guru" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
                            <i class="fa fa-trash-o"></i>
                          </button>
                        <?php } ?>
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

function edit_guru(id_guru){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('admin/edit_guru?id_guru=') ?>'+id_guru,
    success: function(data){
      $response = $(data);
      var id_guru = $response.filter('#id_guru').text();
      var nip = $response.filter('#nip').text();
      var nama_guru = $response.filter('#nama_guru').text();
      var jenis_kelamin = $response.filter('#jenis_kelamin').text();
      var tanggal_lahir = $response.filter('#tanggal_lahir').text();
      var golongan_ruang = $response.filter('#golongan_ruang').text();
      var tingkatan = $response.filter('#tingkatan').text();
      var tugas_tertentu = $response.filter('#tugas_tertentu').text();
      // var foto = $response.filter('#foto').text();
      //menampilkan ke Modal
      $('#id_guru').val(id_guru);
      $('#nip').val(nip);
      $('#nama_guru').val(nama_guru);
      $('#jenis_kelamin').val(jenis_kelamin);
      $('#tanggal_lahir').val(tanggal_lahir);
      $('#golongan_ruang').val(golongan_ruang);
      $('#tingkatan').val(tingkatan);
      $('#tugas_tertentu').val(tugas_tertentu);
      // $('#foto').val(foto);
      $('#modal_ubahguru').modal('show');
    }
  });
}
</script>

</body>
</html>
