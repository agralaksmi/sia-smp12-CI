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
            <!-- <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p><?php echo $_SESSION['nama']; ?></p>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img <img src="<?php echo base_url('assets/images/J.png');?>" class="img-circle" alt="User Image">
                    <p><?php echo $_SESSION['nama']; ?></p>
                </li>

                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url('Auth/logout') ?>" class="btn btn-default btn-flat">Log out</a>
                  </div>
                </li>
              </ul>
            </li> -->

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
            <img <img src="<?php echo base_url('assets/images/J.png');?>" class="img-circle" alt="User Image">
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
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h1 class="text-center">SELAMAT DATANG</h1>
            </div>
            <div class="panel-body">
              <div class="text">
                <h2>
                  <br>
                  <p>A.	VISI SEKOLAH</p>
                  <p>Menjadi SMP unggulan dalam pengembangan pendidikan berkarakter, ketaqwaan, kecerdasan dan ketrampilan dengan berwawasan lingkungan yang bertumpu pada kemandirian.</p>
                  <br>
                  <p>B.	INDIKATOR VISI SEKOLAH</p>
                  <p>1.	Unggul dalam peningkatan gain skor</p>
                  <p>2.	Unggul dalam pengembangan akademik</p>
                  <p>3.	Unggul dalam pengembangan keagamaan</p>
                  <p>4.	Unggul dalam olah raga dan kesenian</p>
                  <p>5.	Unggul dalam kedisiplinan, kebersihan, keindahan, kesehatan dan kenyamanan</p>
                  <br>
                  <p>C.	MISI SEKOLAH</p>
                  <p>1.	Melaksanakan pembelajaran secara efektif dan professional</p>
                  <p>2.	Menanamkan semangat keunggulan dan budaya mutu secara efektif kepada seluruh warga sekolah</p>
                  <p>3.	Menumbuhkan dan mengembangkan penghayatan terhadap agama yang dianut</p>
                  <p>4.	Menanamkan budi pekerti luhur sehingga warga sekolah memiliki akhlak mulia</p>
                  <p>5.	Menumbuhkan dan mengembangkan ilmu pengetahuan dan teknologi</p>
                  <p>6.	Mendorong dan membantu siswa untuk mengembangkan bakat prestasinya.</p>
                  <p>7.	 Membentuk pribadi yang peduli lingkungan</p>
                  <br>
                  <p>D. TUJUAN PENDIDIKAN</p>
                  <p>Meletakkan dasar pendidikan, keagamaan, kecerdasan, pengetahuan dan ketrampilan untuk hidup mandiri dan mengikuti pendidikan lanjutan</p>

                </h2>


              </div>
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

  </body>
  </html>
