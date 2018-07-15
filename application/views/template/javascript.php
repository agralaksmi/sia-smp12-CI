<script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js') ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/app.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>

<script type="text/javascript">

  $(document).ready(function() {
    $('.isi').load('home.html');
    $('.content-header h1').html('Halaman Kurikulum');
    $('table').DataTable({
        destroy: true,
        "language":{
          "lengthMenu":"Tampilkan _MENU_ data per halaman.",
          "info":"Menampilkan _START_ - _END_ dari _TOTAL_ data.",
          "zeroRecords":"Tidak ditemukan data yang sesuai.",
          "infoEmpty":"Menampilkan 0 - 0 dari 0 data.",
          "search":"Cari",
          "infoFiltered":"(disaring dari _MAX_ entri keseluruhan)",
          "thousands":".",
          "emptyTable":"Tidak ada data yang ditampilkan",
          "paginate":{
            "first":"<<",
            "last":">>",
            "next":"> Selanjutnya",
            "previous":"Sebelumnya <"
          }
        }
      });
  });

  function isiHalaman(halaman,judul) {
    $('.isi').load(halaman);
    $('.content-header h1').html(judul);
  }

  function hapus(tabel,id) {
    if (confirm('hapus data ini?')) {
      window.location='hapus-'+tabel+'.php?id='+id;
    }
  }

</script>
