<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rapor Hal 1</title>
  </head>
  <body onload="window.print();">
    <h1 align="center">Pencapaian Kompetensi Siswa</h1>
    <table align="center" width="80%">
      <tr>
        <td>Nama Sekolah</td>
        <td> : SMP NEGERI 12 YOGYAKARTA</td>
        <td>Kelas</td>
        <td> : <?php echo $tb_rapor->tingkat ?><?php echo $tb_rapor->nama_kelas ?> </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td> : Jl. Tentara Pelajar 9 Yogyakarta</td>
        <td>Semester </td>
        <td> : <?php echo $tb_rapor->semester ?></td>
      </tr>
      <tr>
        <td>Nama </td>
        <td> : <?php echo $tb_rapor->nama_siswa ?></td>
        <td>Tahun Ajaran </td>
        <td> : <?php echo $tb_rapor->tahun_ajaran ?></td>
      </tr>
      <tr>
        <td>Nomor Induk </td>
        <td> : <?php echo $tb_rapor->nisn ?></td>
        <td></td>
        <td></td>
      </tr>
    </table>
    <h3>Capaian Kompetensi</h3>
    <h3>A. Sikap</h3>
    <ol>
      <li>
        <b>Sikap Spiritual</b><br>
        <table border="1" align="center" width="100%">
          <tr>
            <td>
              <p>
                Deskripsi
              </p>
              <br>
              <p>
                <?php echo $tb_siswa[0]->nama_siswa?>
                <?php echo $tb_siswa[0]->deskripsi ?>
              </p>
            </td>
          </tr>
        </table>
      </li>
      <br>
      <li>
        <b>Sikap Sosial</b><br>
        <table border="1" align="center" width="100%">
          <tr>
            <td>
              <p>
                Deskripsi
              </p>
              <br>
              <p>
                <?php echo $tb_siswa[0]->nama_siswa?>
                <?php echo $tb_siswa[0]->deskripsi ?>
              </p>
            </td>
          </tr>
        </table>
        <div align="right">
          Raport <?php echo $tb_rapor->tingkat ?><?php echo $tb_rapor->nama_kelas ?> Semester 1(Satu) Tahun Ajaran <?php echo $tb_rapor->tahun_ajaran ?></td> : <?php echo $tb_rapor->nama_siswa ?>
        </div>
      </li>
    </ol>
  </body>
</html>
