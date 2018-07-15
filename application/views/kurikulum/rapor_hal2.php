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
    <?php for ($i=0; $i <count($tb_nilai_matkul) ; $i++) { ?>
      <tr>
        <td><?php echo $i+1; ?></td>
        <td><?php echo $tb_nilai_matkul[$i]->nama_mapel ?></td>
        <td><?php echo $tb_nilai_matkul[$i]->kkm ?></td>
        <td><?php echo $tb_nilai_matkul[$i]->ulangan_harian ?></td>
        <td><?php echo $tb_nilai_matkul[$i]->nilai ?></td>
        <td><?php echo $tb_nilai_matkul[$i]->deskripsi ?></td>
        <td><?php echo $tb_nilai_ketrampilan[$i]->nilai_akhir_ket ?></td>
        <td><?php echo $tb_nilai_ketrampilan[$i]->nilai_ket ?></td>
        <td><?php echo $tb_nilai_ketrampilan[$i]->desk_ket ?></td>
      </tr>
    <?php $i++; } ?>
  </table>
  <div align="right">
    Rapor <?php echo $tb_rapor->tingkat ?><?php echo $tb_rapor->nama_kelas ?> Semester <?php echo $semester_sekarang ?> Tahun Ajaran <?php echo $tb_rapor->tahun_ajaran ?></td> : <?php echo $tb_rapor->nama_siswa ?>
  </div>
</body>
</html>
