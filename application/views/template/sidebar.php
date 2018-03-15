
<!-- Sidebar Menu -->
<ul class="sidebar-menu">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
    <li class="header">Menu</li>
    <li class="treeview">
      <a href="<?php echo base_url('kurikulum/index')?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </ul>
    <ul class="sidebar-menu">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-list-ul"></i> <span>Master Data</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
      <li>
        <a href="<?php echo base_url('kurikulum/siswa')?>">
          <i class="fa fa-circle-o"></i> <span>Data Siswa</span>
        </a>
      </li>
      <li>
          <a href="<?php echo base_url('kurikulum/kelas')?>">
          <i class="fa fa-circle-o"></i> <span>Data Kelas</span>
        </a>
      </li>
      <li>
          <a href="<?php echo base_url('kurikulum/tahun_ajaran')?>">
          <i class="fa fa-circle-o"></i> <span>Data Tahun Ajaran</span>
        </a>
      </li>
      <li>
        <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
        <a href="<?php echo base_url('kurikulum/siswa_pertahun')?>">
          <i class="fa fa-circle-o"></i> <span>Data Siswa Pertahun</span>
        </a>
      <?php }?>
      </li>
      <li>
        <a href="<?php echo base_url('kurikulum/guru')?>">
          <i class="fa fa-circle-o"></i> <span>Data Guru</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('kurikulum/guru_ampu')?>">
          <i class="fa fa-circle-o"></i> <span>Data Guru Ampu</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('kurikulum/wali_kelas')?>">
          <i class="fa fa-circle-o"></i> <span>Data Wali Kelas</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('kurikulum/mapel')?>">
          <i class="fa fa-circle-o"></i> <span>Data Mata Pelajaran</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('kurikulum/ekskul')?>">
          <i class="fa fa-circle-o"></i> <span>Data Ektrakulikuler</span>
        </a>
      </li>
      <li>
        <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
        <a href="<?php echo base_url('kurikulum/presensi')?>">
          <i class="fa fa-circle-o"></i> <span>Data Presensi</span>
        </a>
      <?php } ?>
      </li>
      <li>
        <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
        <!-- hanya kurikulum -->
        <a href="<?php echo base_url('kurikulum/deskripsi_sikap')?>">
          <i class="fa fa-circle-o"></i> <span>Deskripsi Sikap</span>
        </a>
      <?php }?>
      </li>
      <li>
        <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
        <a href="<?php echo base_url('kurikulum/deskripsi_mapel')?>">
          <i class="fa fa-circle-o"></i> <span>Deskripsi Mata Pelajaran</span>
        </a>
      <?php }?>
      </li>
      <li>
        <a href="<?php echo base_url('kurikulum/ortu')?>">
          <i class="fa fa-circle-o"></i> <span>Data Orang Tua</span>
        </a>
      </li>
      </ul>
      </li>
    </ul>
  <ul class="sidebar-menu">
    <li class="treeview">
      <a href="#">
        <i class="fa fa-list-ul"></i> <span>Data Nilai</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
    <li>
    <a href="<?php echo base_url('kurikulum/detail_pengetahuan')?>">
      <i class="fa fa-circle-o"></i> <span>Nilai Pengetahuan</span>
    </a>
  </li>
  <li>
    <a href="<?php echo base_url('kurikulum/detail_ketrampilan')?>">
      <i class="fa fa-circle-o"></i> <span>Nilai Ketrampilan</span>
    </a>
  </li>
  <li>
    <a href="<?php echo base_url('kurikulum/nilai_ekskul')?>">
      <i class="fa fa-circle-o"></i> <span>Nilai Ekstrakulikuler</span>
    </a>
  </li>
    <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
  <li>
    <a href="<?php echo base_url('kurikulum/nilai_sikap')?>">
      <i class="fa fa-circle-o"></i> <span>Nilai Sikap</span>
    </a>
  </li>
<?php } ?>
</ul>
</li>
</ul>
<ul class="sidebar-menu">
<li class="header">Laporan</li>
<!-- Optionally, you can add icons to the links -->
<li class="treeview">
  <a href="<?php echo base_url('kurikulum/rapor')?>">
    <i class="fa fa-print"></i> <span>Hasil Rapor Siswa</span>
  </a>
</ul>
</li>
    <ul class="sidebar-menu">
        <li class="header">Lainnya</li>
        <?php if ($this->session->userdata('hak_akses')=="kurikulum") { ?>
          <li>
            <a href="<?php echo base_url('kurikulum/hak_akses')?>">
              <i class="fa fa-user"></i> <span>Hak Akses</span>
            </a>
          </li>
        <?php }?>

      </ul>
    </li>
    </ul>

</ul>
<!-- /.sidebar-menu -->
