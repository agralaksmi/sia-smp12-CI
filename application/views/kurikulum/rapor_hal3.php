<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rapor Hal 3</title>
  </head>
  <body onload="window.print();">
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
        <td colspan="9"><b>Kelompok B</b></td>
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
<h3>C. Ekstrakulikuler</h3>
<table border="1" width=" 70%">
<tr>
  <th>No</th>
  <th>Kegiatan Ekstrakulikuler</th>
  <th>Keterangan</th>
</tr>
<?php $no=1; ?>
<?php foreach ($tb_ekskul as $key => $value): ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $value->nama_ekskul ?></td>
    <td><?php echo $value->ket?></td>
  </tr>
<?php endforeach; ?>

</table>
<h3>D. Ketidakhadiran</h3>
  <ol>
    <table>
      <tr>
        <td>
          <table border="1" align="left" width="40%">
            <tr>
              <th>Keterangan</th>
              <th>Jumlah</th>
            </tr>
            <tr>
              <td>Sakit </td><td><?php echo $sakit; ?> hari</td>
            </tr>
            <tr>
              <td>ijin </td><td><?php echo $ijin; ?> hari</td>
            </tr>
            <tr>
              <td>Tanpa Keterangan </td><td><?php echo $tanpa_ket; ?> hari</td>
            </tr>
          </table>
        </td>
        <td>&ensp;</td>
        <td align="right">
          <table border="1" align="left" width="80%">
            <tr>
              <td>
                Keputusan :
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </ol>
  <table align="center" width="80%">
    <tr>
      <td>
        <table>
          <tr>
            <td><br><br>Mengetahui</td>
          </tr>
          <tr>
            <td>Orang Tua/Wali,</td></br>
          </tr>
          <tr>
            <td>&ensp;</td>
          </tr>
          <tr>
            <td>&ensp;</td>
          </tr>
          <tr>
            <br>
            <td>..................</td>
          </tr>
        </table>
      </td>
      <td>&ensp;</td>
      <td align="right">
        <table>
          <tr>
            <td><br><br>Yogyakarta, 11 juli </td>
          </tr>
          <tr>
            <td><br>Wali Kelas,</td>
          </tr>
          <tr>
            <td>&ensp;</td>
          </tr>
          <tr>
            <td>&ensp;</td>
          </tr>
          <tr>
              <br>
                <td>AVICA s.Kom</td></br>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <table align="center">
    <tr>
      <td>Mengetahui</td>
    </tr>
    <tr>
      <td>Kepala Sekolah,</td>
    </tr>
    <tr>
      <tr>
        <td>&ensp;</td>
      </tr>
      <tr>
        <td>&ensp;</td>
      </tr>
    </tr>
    <tr>
      <td>SUBANDYIO</td>
    </tr>
    <tr>
      <td>NIP</td>
    </tr>
  </table>
  <div align="right">
    Raport 7C Semester 1(Satu) Tahun Ajaran 2017/2018 : NAMA KAMU SIAPA
  </div>
  </body>
</html>
