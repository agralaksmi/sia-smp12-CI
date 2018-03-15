<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!-- ketiga -->
<div class="modal fade" id="modal_ubahortu" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="modal_ubahortu">Ubah Data Wali Murid</h4>
      </div>
      <form class="" action="<?php echo base_url('admin/update_ortu') ?>" method="post">
        <div class="modal-body">
          <!-- MULAI MEMBUAT FORM MENU -->
          <input type="hidden" class="form-control" id="id_ortu" placeholder="" name="id_ortu" required>
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
            <label for="">Status Wali Murid</label>
            <select class="form-control" id="status" name="status" required>
              <option value="ayah">Ayah</option>
              <option value="ibu">Ibu</option>
              <option value="wali">Wali</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Nama Lengkap Wali Murid</label>
            <input type="text" class="form-control" id="nama_ortu" placeholder="Masukkan Nama Wali Murid " name="nama_ortu" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Tahun Lahir</label>
            <input type="number" class="form-control" id="tahun_lahir" placeholder="" name="tahun_lahir" required>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label for="">Jenjang Pendidikan</label>
            <select class="form-control" id="jenjang_pendidikan" name="jenjang_pendidikan" required>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="D3">D3</option>
              <option value="S1">S1</option>
              <option value="S2">S2</option>
              <option value="S3">S3</option>
            </select>
            <p class="help-block"</p>
            </div>
            <div class="form-group">
              <label for="">Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan" placeholder="Masukkan Pekerjaan" name="pekerjaan" required>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">Penghasilan</label>
              <select class="form-control" id="penghasilan" name="penghasilan" required>
                <option value="Kurang dari Rp. 500,000 ">Kurang dari Rp. 500,000 </option>
                <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
                <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>
                <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                <option value="Lebih dari Rp. 5,000,000">Lebih dari Rp. 5,000,000</option>
              </select>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">NIK</label>
              <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" name="nik" required>
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
    <div class="modal fade" id="modal_ortu" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="modal_ortu">Tambah Data Wali Murid</h4>
          </div>
          <form class="" action="<?php echo base_url ('Admin/create_ortu') ?>" method="post">
            <div class="modal-body">

              <!-- MULAI MEMBUAT FORM MENU -->
              <div class="form-group">
                <label for="">Siswa</label>
                <select class="form-control" id="" name="id_siswa" required>
                  <option value="">.:Pilih:.</option>
                  <?php foreach ($tb_siswa as $data_tb_siswa): ?>
                    <option value="<?php echo $data_tb_siswa->id_siswa ?>"><?php echo $data_tb_siswa->nama_siswa ?></option>
                  <?php endforeach; ?>
                </select>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">Status Wali Murid</label>
                <select class="form-control" name="status" required>
                  <option value="pilih">Pilih</option>
                  <option value="ayah">Ayah</option>
                  <option value="ibu">Ibu</option>
                  <option value="wali">Wali</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Nama Lengkap Wali Murid</label>
                <input type="text" class="form-control" id="" placeholder="Masukkan Nama Wali Murid " name="nama_ortu" required>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">Tahun Lahir</label>
                <input type="number" class="form-control" id="" placeholder="" name="tahun_lahir" required>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="">Jenjang Pendidikan</label>
                <select class="form-control" name="jenjang_pendidikan" required>
                  <option value="pilih">Pilih</option>
                  <option value="SD">SD</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA</option>
                  <option value="D3">D3</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                </select>
                <p class="help-block"</p>
                </div>
                <div class="form-group">
                  <label for="">Pekerjaan</label>
                  <input type="text" class="form-control" id="" placeholder="Masukkan Pekerjaan" name="pekerjaan" required>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">Penghasilan</label>
                  <select class="form-control" id="penghasilan" name="penghasilan" required>
                    <option value="pilih">Pilih</option>
                    <option value="Kurang dari Rp. 500,000 ">Kurang dari Rp. 500,000 </option>
                    <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
                    <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>
                    <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                    <option value="Lebih dari Rp. 5,000,000">Lebih dari Rp. 5,000,000</option>
                  </select>
                  <p class="help-block"></p>
                </div>
                <div class="form-group">
                  <label for="">NIK</label>
                  <input type="text" class="form-control" id="" placeholder="Masukkan NIK" name="nik" required>
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
                    <h3 class="box-title"><b>TABEL DATA WALI MURID</b></h3>
                  </div>
                  <div class="box-tools" style="padding:10px;">
                    <div class="form-group">

                      <!--  MENAMBAH NAMA DI BUTTON-->
                        <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
                      <button class="btn btn-success" data-toggle="modal"
                      data-target="#modal_ortu">
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
                  <?php if ($this->session->flashdata('delete')) { ?>
                    <div class="">
                      <div class="alert alert-success"><?php echo $this->session->flashdata('delete'); ?></div>
                    </div>
                  <?php } ?>
                </div>
                <!-- menampilkan Tabel -->
                <div class="box-body table-responsive">
                  <table class="table table-hover table-bordered table-responsive">
                    <thead>
                      <tr class="bg-blue" align="center">
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Status</th>
                        <th>Nama Wali Murid</th>
                        <th>Tahun Lahir</th>
                        <th>Jenjang Pendidikan</th>
                        <th>Pekerjaan</th>
                        <th>Penghasilan</th>
                        <th>NIK</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php $no =1; foreach ($tb_ortu as $input_ortu):?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $input_ortu->nama_siswa?></td>
                          <td><?php echo $input_ortu->status?></td>
                          <td><?php echo $input_ortu->nama_ortu?></td>
                          <td><?php echo $input_ortu->tahun_lahir?></td>
                          <td><?php echo $input_ortu->jenjang_pendidikan?></td>
                          <td><?php echo $input_ortu->pekerjaan?></td>
                          <td><?php echo $input_ortu->penghasilan?></td>
                          <td><?php echo $input_ortu->nik?></td>
                          <td>
                            <!-- ketiga delete -->
                            <form class="" action="<?php echo base_url('admin/delete_ortu') ?>" method="post">
                              <!-- kelima -->
                                <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
                              <button type="button" class="btn btn-warning" onclick="edit_ortu('<?php echo $input_ortu->id_ortu; ?>')">
                                <i class="fa fa-edit"></i>
                              </button>
                              <input type="hidden" name="id_ortu" value="<?php echo $input_ortu->id_ortu; ?>">
                              <button type="submit" class="btn btn-danger" name=delete_ortu onclick="return confirm('Apakah ANda Yakin Ingin Menghapus Data ini ? ?')">
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
    function edit_ortu(id_ortu){
      $.ajax({
        type: 'get',
        url: '<?php echo base_url('Admin/edit_ortu?id_ortu=') ?>'+id_ortu,
        success: function(data){
          $response = $(data);
          var id_ortu = $response.filter('#id_ortu').text();
          var id_siswa = $response.filter('#id_siswa').text();
          var status = $response.filter('#status').text();
          var nama_ortu = $response.filter('#nama_ortu').text();
          var tahun_lahir = $response.filter('#tahun_lahir').text();
          var jenjang_pendidikan = $response.filter('#jenjang_pendidikan').text();
          var pekerjaan = $response.filter('#pekerjaan').text();
          var penghasilan = $response.filter('#penghasilan').text();
          var nik = $response.filter('#nik').text();
          //menampilkan ke Modal
          $('#id_ortu').val(id_ortu);
          $('#id_siswa').val(id_siswa);
          $('#status').val(status);
          $('#nama_ortu').val(nama_ortu);
          $('#tahun_lahir').val(tahun_lahir);
          $('#jenjang_pendidikan').val(jenjang_pendidikan);
          $('#pekerjaan').val(pekerjaan);
          $('#penghasilan').val(penghasilan);
          $('#nik').val(nik);
          // $('#foto').val(foto);
          $('#modal_ubahortu').modal('show');
        }
      });
    }
    </script>

  </body>
  </html>
