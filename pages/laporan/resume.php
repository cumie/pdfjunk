<?php
session_start();
// include "../../lib/connection.php";
// include "../../lib/library.php";
//include_once "../masters/dosen_config.php";
// include_once "lib/seslogin.php";
// include_once "pages/masters/dosen_config.php";
// if($_GET) {

// $Kode	 = $_SESSION['ID_CRAB'];
// $sqlShow = "SELECT * FROM ".$tableName." WHERE ".$field[4]."='$Kode'";
// $qryShow = mysqli_query($koneksidb, $sqlShow)  or die ("Query ambil data salah : ".mysqli_error($koneksidb));
// $dataShow = mysqli_fetch_array($qryShow);
// for($i=0;$i<=$jmlField;$i++){
	// $data[$i] = $dataShow[$field[$i]];
// }
// } // Penutup GET
?>

<?php include('head_resume.php');
?>

<table class="tg" width="740">
    <tr>
        <td rowspan="13" class="tg-baqh" width="15">I.</td>
        <td colspan="15" class="tg-baqh" width="725">KETERANGAN PERORANGAN</td>
    </tr>
    <tr>
        <td width="15">1.</td>
        <td colspan="5">Nama</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td>2.</td>
        <td colspan="5">NIDN</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td>3.</td>
        <td colspan="5">Nomor Seri Kerpeg.</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td>4.</td>
      <td colspan="5">Tempat dan Tanggal Lahir</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td>5.</td>
        <td colspan="5">Jenis Kelamin</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td>6.</td>
        <td colspan="5">Pendidikan Tertinggi</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td>7.</td>
        <td colspan="5">Pangkat dan Golongan Ruang / TMT</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td>8.</td>
        <td colspan="5">Jabatan Fungsional / TMT</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td>9.</td>
        <td colspan="5">Fakultas / Jurusan / Program Studi</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td rowspan="2">10.</td>
        <td colspan="2" rowspan="2">Masa Kerja - Gol.</td>
        <td colspan="3">a. Lama</td>
        <td colspan="2">..........Tahun</td>
        <td colspan="7">..........Bulan</td>
    </tr>
    <tr>
        <td colspan="3">b. Baru</td>
        <td colspan="2">..........Tahun</td>
        <td colspan="7">..........Bulan</td>
    </tr>
    <tr>
        <td>11.</td>
        <td colspan="5">Unit Kerja</td>
        <td colspan="9"></td>
    </tr>
    <tr>
        <td colspan="2" rowspan="5" class="tg-baqh">II.</td>
        <td colspan="14" class="tg-tangah"> BIDANG DAN BUTIR KEGIATAN YANG DINILAI </td>
    </tr>
    <tr>
        <td colspan="8" class="tg-tangah">I. Unsur Utama</td>
        <td colspan="2" class="tg-tangah">II. Penunjang</td>
        <td rowspan="3" colspan="2" class="tg-tangah">JUMLAH</td>
        <td rowspan="3" colspan="2" class="tg-tangah">LEBIHAN</td>
    </tr>
    <tr>
        <td rowspan="2" colspan="2" class="tg-baqh">A</td>
        <td colspan="6" class="tg-baqh">B</td>
        <td rowspan="2" colspan="2">Penunjang Tugas Pokok Dosen</td>
    </tr>
    <tr>
        <td colspan="2" align="center">a</td>
        <td colspan="2" align="center">b</td>
        <td colspan="2" align="center">c</td>
    </tr>
    <tr>
        <td align="center">L</td>
        <td align="center">B</td>
        <td align="center">L</td>
        <td align="center">B</td>
        <td align="center">L</td>
        <td align="center">B</td>
        <td align="center">L</td>
        <td align="center">B</td>
        <td align="center">L</td>
        <td align="center">B</td>
        <td align="center">L</td>
        <td align="center">B</td>
        <td align="center">L</td>
        <td align="center">B</td>
    </tr>
    <tr>
        <td>1.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>5.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>6.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>7.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>8.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>9.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>10.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>11.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>12.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>13.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td rowspan="2" colspan="2">Jumlah Usul Angka Kredit</td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
        <td rowspan="2"></td>
    </tr>
    <tr>
    </tr>
    <tr>
        <td rowspan="3" colspan="2">Jumlah Angka Kredit Yang Seharusnya</td>
        <td rowspan="3" colspan="4"></td>
        <td rowspan="3" colspan="2"></td>
        <td rowspan="3" colspan="2"></td>
        <td rowspan="3" colspan="2"></td>
        <td rowspan="3" colspan="2"></td>
        <td rowspan="3" colspan="2"></td>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
        <td colspan="16" align="center">HASIL PENILAIAN PANITIA KOPERTIS WILAYAH XI</td>
    </tr>
    <tr>
        <td colspan="9" align="center">PERTIMBANGAN</td>
        <td colspan="7" align="center">TANDA TANGAN/PARAF</td>
    </tr>
    <tr>
      <td colspan="9" rowspan="10">tes <br><br><br> </td>
      <td colspan="7" rowspan="10">vv <br><br><br> </td>
    </tr>
</table>
<br>
<table class="tg" width="740">
    <tr>
        <td colspan="3" align="center">
          <h1>
            USUL PENETAPAN ANGKA KREDIT <br><br>
            KOPERTIS WILAYAH XI
          </h1>
        </td>
    </tr>
    <tr>
        <td width="150"> <h3>NAMA</h3> </td>
        <td width="15"> <h3>:</h3> </td>
        <td> <h3>-</h3> </td>
    </tr>
    <tr>
      <td> <h3>NIP/NIDN</h3> </td>
      <td> <h3>:</h3> </td>
      <td> <h3>-</h3> </td>
    </tr>
    <tr>
      <td> <h3>PANGKAT/GOL</h3> </td>
      <td> <h3>:</h3> </td>
      <td> <h3>-</h3> </td>
    </tr>
    <tr>
      <td> <h3>JABATAN</h3> </td>
      <td> <h3>:</h3> </td>
      <td> <h3>-</h3> </td>
    </tr>
    <tr>
      <td> <h3>UNIT KERJA</h3> </td>
      <td> <h3>:</h3> </td>
      <td> <h3>-</h3> </td>
    </tr>
    <tr>
      <td> <h3>USUL JABATAN</h3> </td>
      <td> <h3>:</h3> </td>
      <td> <h3>-</h3> </td>
    </tr>
    <tr>
      <td> <h3>RAPAT TANGGAL</h3> </td>
      <td> <h3>:</h3> </td>
      <td> <h3>-</h3> </td>
    </tr>
</table>
