<!-- info-box -->
<div class="row">
  <?php include '../backend/select_kategori.php'; ?>
  <div class="col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-aqua">
        <i class="fa fa-th-list"></i>
      </span> <!-- /.info-box-icon -->
      <div class="info-box-content">
        <span class="info-box-text">Kategori Produk</span>
        <span class="info-box-number"><?php echo $kategori_banyakdata; ?><small> kategori</small></span>
      </div> <!-- /.info-box-content -->
    </div> <!-- /.info-box -->
  </div>

  <?php include '../backend/select_produk.php'; ?>
  <div class="col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-red">
        <i class="fa fa-heart"></i>
      </span> <!-- /.info-box-icon -->
      <div class="info-box-content">
        <span class="info-box-text">Jumlah Produk</span>
        <span class="info-box-number"><?php echo $produk_banyakdata; ?><small> produk</small></span>
      </div> <!-- /.info-box-content -->
    </div> <!-- /.info-box -->
  </div>

  <?php include '../backend/select_transaksi.php'; ?>
  <div class="col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-green">
        <i class="fa fa-money"></i>
      </span> <!-- /.info-box-icon -->
      <div class="info-box-content">
        <span class="info-box-text">Jumlah Transaksi</span>
        <span class="info-box-number"><?php echo $transaksi_banyakdata ; ?><small> transaksi</small></span>
      </div> <!-- /.info-box-content -->
    </div> <!-- /.info-box -->
  </div>
</div>
