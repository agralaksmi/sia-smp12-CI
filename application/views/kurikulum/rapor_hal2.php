<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Rapor Hal 2</title>
</head>
<body onload="window.print();">
  <h3>B. Pengetahuan dan Ketrampilan</h3>
  <h4>Ketentuan Belajar Minimal (KBM) :  78</h4>
  <table border="1" width=" 100%">
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Mata Pelajaran</th>
      <th rowspan="2">KKM</th>
      <th colspan="3">Pengetahuan</th>
      <th colspan="3">Ketrampilan</th>
    </tr>
    <tr>
      <th>Angka</th>
      <th>Predikat</th>
      <th>Deskripsi</th>
      <th>Angka</th>
      <th>Predikat</th>
      <th>Deskripsi</th>
    </tr>
    <tr>
      <td colspan="9"><b>Kelompok A</b></td>
    </tr>
    <?php $no=1; ?>
    <?php foreach ($tb_nilai_matkul as $item_tb_nilai_matkul): ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $item_tb_nilai_matkul->nama_mapel ?></td>
        <td><?php echo $item_tb_nilai_matkul->kkm ?></td>
        <td><?php echo $item_tb_nilai_matkul->ulangan_harian ?></td>
        <td><?php echo $item_tb_nilai_matkul->nilai_peng ?></td>
        <td><?php echo $item_tb_nilai_matkul->desk_peng ?></td>
        <td><?php echo $item_tb_nilai_matkul->nilai_akhir ?></td>
        <td><?php echo $item_tb_nilai_matkul->nilai_ket ?></td>
        <td><?php echo $item_tb_nilai_matkul->desk_ket ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <div align="right">
    Raport <?php echo $tb_rapor->tingkat ?><?php echo $tb_rapor->nama_kelas ?> Semester 1(Satu) Tahun Ajaran <?php echo $tb_rapor->tahun_ajaran ?></td> : <?php echo $tb_rapor->nama_siswa ?>
  </div>
</body>
</html>
