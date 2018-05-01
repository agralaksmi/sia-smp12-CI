<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- ketiga edit -->
<div class="modal fade" id="modal_ubahdetailpengetahuan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahdetailpengetahuan">Ubah Nilai Pengetahuan</h4>
      </div>
      <form class="" action="<?php echo base_url('admin/update_detail_pengetahuan') ?>" method="post" name="autoSumForm">
        <div class="modal-body">

          <!-- MULAI MEMBAGI 2 MENU-->
          <div class="row">
            <div class="col-md-6">
              <!-- MULAI MEMBUAT FORM MENU -->
              <input type="hidden" class="form-control" id="id_detail_pengetahuan" placeholder="" name="id_detail_pengetahuan">
              <div class="form-group">
                <label for="">Tugas 1</label>
                <input type="number" class="form-control" id="tugas1" name="tugas1" required onkeyup="sum();" />
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">Tugas 2</label>
                <input type="number" class="form-control" id="tugas2" name="tugas2" required onkeyup="sum();" />
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">Tugas 3</label>
                <input type="number" class="form-control" id="tugas3" placeholder="0" name="tugas3" onkeyup="sum();" />
                <p class="help-block"></p>
              </div>
            </div>
            <!-- MULAI MEMBAGI 2 MENU-->
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tugas 4</label>
                <input type="number" class="form-control" id="tugas4" placeholder="0" name="tugas4" onkeyup="sum();" />
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">UTS</label>
                <input type="number" class="form-control" id="uts" placeholder="0" name="uts" required>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">UAS</label>
                <input type="number" class="form-control" id="uas" placeholder="0" name="uas" required>
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
                <h3 class="box-title"><b>TABEL NILAI PENGETAHUAN</b></h3>

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
                      <label>Mapel</label>
                      <select class="form-control" name="id_mapel">
                        <option value="">Pilih</option>
                        <?php foreach ($tb_mapel as $data_tb_mapel): ?>
                          <option value="<?php echo $data_tb_mapel->id_mapel ?>"><?php echo $data_tb_mapel->nama_mapel ?></option>
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
              <div class="table-responsive">
                <table class="table table-hover table-bordered table-responsive">
                  <thead>
                    <tr class="bg-blue" align="center">
                      <th>No</th>
                      <th>Wali Kelas</th>
                      <th>Mata Pelajaran</th>
                      <th>Kelas</th>
                      <th>Nama Siswa</th>
                      <th>T1</th>
                      <th>T2</th>
                      <th>T3</th>
                      <th>T4</th>
                      <th>UTS</th>
                      <th>UAS</th>
                      <th>Hasil Akhir</th>
                      <th>Predikat</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no =1; foreach ($tb_detail_pengetahuan as $input_detail_pengetahuan):?>
                      <tr>
                        <td><?php echo @$no++ ?></td>
                        <td><?php echo @$input_detail_pengetahuan->nama_guru?></td>
                        <td><?php echo @$input_detail_pengetahuan->nama_mapel?></td>
                        <td><?php echo @$input_detail_pengetahuan->tingkat?><?php echo @$input_detail_pengetahuan->nama_kelas?></td>
                        <td><?php echo @$input_detail_pengetahuan->nama_siswa?></td>
                        <td><?php echo @$input_detail_pengetahuan->tugas1?></td>
                        <td><?php echo @$input_detail_pengetahuan->tugas2?></td>
                        <td><?php echo @$input_detail_pengetahuan->tugas3?></td>
                        <td><?php echo @$input_detail_pengetahuan->tugas4?></td>
                        <td><?php echo @$input_detail_pengetahuan->uts?></td>
                        <td><?php echo @$input_detail_pengetahuan->uas?></td>
                        <td><?php echo @$input_detail_pengetahuan->ulangan_harian?></td>
                        <td><?php echo @$input_detail_pengetahuan->nilai?></td>
                        <td><?php echo @$input_detail_pengetahuan->deskripsi?></td>
                        <td>
                          <form class="" action="<?php echo base_url('admin/delete_detail_pengetahuan') ?>" method="post">
                            <input type="hidden" name="id_detail_pengetahuan" value="<?php echo @$input_detail_pengetahuan->id_detail_pengetahuan; ?>">
                              <!-- Kelima-->
                              <button type="button" class="btn btn-warning" onclick="edit_detail_pengetahuan('<?php echo @$input_detail_pengetahuan->id_detail_pengetahuan; ?>')">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="submit" class="btn btn-danger" name="delete_detail_pengetahuan" onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
                                <i class="fa fa-trash-o"></i>
                              </button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>

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

function tambah_detail_pengetahuan(id_wali_kelas,id_kelas,id_siswa,id_mapel,id_siswa_pertahun){
  $('#id_wali_kelas_tambah').val(id_wali_kelas);
  $('#id_kelas_tambah').val(id_kelas);
  $('#id_siswa_tambah').val(id_siswa);
  $('#id_siswa_pertahun_tambah').val(id_siswa_pertahun);
  $('#id_mapel_tambah').val(id_mapel);
  $('#modal_detailpengetahuan').modal('show');
}

function edit_detail_pengetahuan(id_detail_pengetahuan){
  $.ajax({
    type: 'get',
    url: '<?php echo base_url('admin/edit_detail_pengetahuan?id_detail_pengetahuan=') ?>'+id_detail_pengetahuan,
    success: function(data){
      $response = $(data);
      // var id_detail_pengetahuan = $response.filter('#id_detail_pengetahuan').text();
      var id_wali_kelas = $response.filter('#id_wali_kelas').text();
      var id_kelas = $response.filter('#id_kelas').text();
      var id_siswa = $response.filter('#id_siswa').text();
      var id_mapel = $response.filter('#id_mapel').text();
      var ulangan_harian = $response.filter('#ulangan_harian').text();
      var tugas1 = $response.filter('#tugas1').text();
      var tugas2 = $response.filter('#tugas2').text();
      var tugas3 = $response.filter('#tugas3').text();
      var tugas4 = $response.filter('#tugas4').text();
      var uts = $response.filter('#uts').text();
      var uas = $response.filter('#uas').text();
      var id_deskripsi_mapel = $response.filter('#id_deskripsi_mapel').text();
      //menampilkan ke Modal
      $('#id_detail_pengetahuan').val(id_detail_pengetahuan);
      $('#id_wali_kelas').val(id_wali_kelas);
      $('#id_kelas').val(id_kelas);
      $('#id_siswa').val(id_siswa);
      $('#id_mapel').val(id_mapel);
      $('#ulangan_harian').val(ulangan_harian);
      $('#tugas1').val(tugas1);
      $('#tugas2').val(tugas2);
      $('#tugas3').val(tugas3);
      $('#tugas4').val(tugas4);
      $('#uts').val(uts);
      $('#uas').val(uas);
      $('#id_deskripsi_mapel').val(id_deskripsi_mapel);
      $('#modal_ubahdetailpengetahuan').modal('show');
    }
  });
}

</script>


</body>
</html>
