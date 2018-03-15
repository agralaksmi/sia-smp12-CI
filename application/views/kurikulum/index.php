<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('template/links') ?>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-black sidebar-mini">

  <!-- <?php //session_start(); ?> -->

  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="./" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SMP</b>12</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SMP N 12 YK</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li>
              <div class="Navbar-form">
              </div>
            </li>
          </ul>
        </div>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                <p><?php echo $_SESSION['nama']; ?></p>
                <!-- <span class="hidden-xs">Agra Laksmi Maitri</span> -->
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
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Data Siswa</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/siswa')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Data Guru</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/guru')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>Data Guru Ampu</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/guru_ampu')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Data Ekskul</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/ekskul')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3>Data Ortu</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/ortu')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>Data Mapel</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/mapel')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-black">
                <div class="inner">
                  <h3>Data Kelas</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/kelas')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-navy">
                <div class="inner">
                  <h3>Data Presensi</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/presensi')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3>Deskripsi Sikap</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/deskripsi_sikap')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3>Deskripsi Mapel</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/deskripsi_mapel')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Nilai Pengetahuan</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/detail_pengetahuan')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>Nilai Ketrampilan</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/detail_ketrampilan')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Nilai Ekskul</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/nilai_ekskul')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-navy">
                <div class="inner">
                  <h3>Nilai Sikap</h3>
                  <!-- <p>Data Siswa</p> -->
                </div>
                <div class="icon">
                  <i class="ion ion-people"></i>
                </div>
                <a href="<?php echo base_url('kurikulum/nilai_sikap')?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
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

  </body>
  </html>
