<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<style type="text/css">
td {
	cursor: pointer;
}
.editor{
	display: none;
}
</style>
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
            <label for="">Deskripsi Sikap</label>
            <input type="text" class="form-control" name="jenis_deskripsi_sikap" id="jenis_deskripsi_sikap" value="" readonly>
          </div>

          <div class="form-group">
            <label for="">Nilai</label>
            <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" placeholder="Huruf">
            <p class="help-block">Contoh : A,B,C</p>
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
                    <label for="">Jenis Deskripsi</label>
                    <select class="form-control" name="jenis_deskripsi_sikap">
                      <option value="">Pilih</option>
                      <option value="Deskripsi Sosial">Deskripsi Sosial</option>
                      <option value="Deskripsi Spiritual">Deskripsi Spiritual</option>

                    </select>
                    <p class="help-block">Help text here.</p>
                  </div>

                  <div class="form-group">
                    <label>Semester</label>
                    <input class="form-control" type="text" name="semester" value="<?php echo $semester_sekarang?>" readonly>
                  </div>
                  <div class="text-center form-group">
                    <button type="submit" name="cek" class="btn btn-success">Search</button>
                  </div>
                </form>
              </div>
            </div>
            <br>
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
    //  var id_nilai_sikap = $response.filter('#id_nilai_sikap').text();
      var id_wali_kelas = $response.filter('#id_wali_kelas').text();
      var jenis_deskripsi_sikap = $response.filter('#jenis_deskripsi_sikap').text();
      var nilai_akhir = $response.filter('#nilai_akhir').text();

      //menampilkan ke Modal
      $('#id_nilai_sikap').val(id_nilai_sikap);
      $('#jenis_deskripsi_sikap').val(jenis_deskripsi_sikap);
      $('#nilai_akhir').val(nilai_akhir);
      $('#modal_ubahnilaisikap').modal('show');
    }
  });
}
</script>
<script type="text/javascript">
$(function(){
$.ajaxSetup({
	type:"post",
	cache:false,
	dataType: "json"
})
$(document).on("click","td",function(){
$(this).find("span[class~='caption']").hide();
$(this).find("input[class~='editor']").fadeIn().focus();
});

$(document).on("keydown",".editor",function(e){
if(e.keyCode==13){
var target=$(e.target);
var value=target.val();
var id=target.attr("data-id");
var data={id:id,value:value};
if(target.is(".field-nilai")){
data.modul="nilai_akhir";
}

// $.ajax({
// 	data:data,
// 	url:"<?php echo base_url('kurikulum/update_nilai_sikap'); ?>",
// 	success: function(a){
// 	 target.hide();
// 	 target.siblings("span[class~='caption']").html(value).fadeIn();
//    console.log(data);
//    //window.location.reload();
// 	}
// })

$.ajax({
    type: "POST",
    url: "<?php echo base_url('kurikulum/update_nilai_sikap');?>",
    data: data,
    success: function(msg) {
    	 target.hide();
    	 target.siblings("span[class~='caption']").html(value).fadeIn();
       console.log(msg);
       window.location.reload();
    }
});


}

});

});

</script>
</body>
</html>
