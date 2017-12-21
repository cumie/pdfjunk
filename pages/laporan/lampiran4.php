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

<?php include('head4.php');
?>

<table class="tisi">
  <tr>
  	<th>NO.</th>
		<th width="400">KEGIATAN PENGABDIAN PADA MASYARAKAT</th>
		<th width="150">BENTUK</th>
		<th width="300">TEMPAT/INSTANSI</th>
		<th width="100">TANGGAL</th>
    <th width="100">JML. ANGKA KREDIT</th>
    <th width="100">KETERANGAN</th>
  </tr>
	<tr>
  	<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		<th>5</th>
		<th>6</th>
    <th>7</th>
  </tr>
	<tr class="g5">
		<td class="tisi-baqh bold"></td>
		<td>
			<b><u>Memberi Penyuluhan Kepada Masyarakan</u></b>
		</td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
    <td> </td>
	</tr>
	<tr class="g5">
		<td class="tisi-baqh bold">1</td>
		<td>
			Memberi Penyuluhan Mengenai Manajemen
			Pemasaran Pada program Pelatihan Kerja
			Berbasis Masyarakat Melalui Terapan
			Teknologi Tepat Guna
		</td>
		<td class="tisi-baqh" align="center">Penyuluhan</td>
		<td class="tisi-yw4l">Desa Tambak Danau Kec. Astambul Kab. Banjar Kalsel</td>
		<td class="tisi-yw4l">28 Oktober 2010</td>
  	<td class="tisi-baqh">1</td>
    <td class="tisi-yw4l">Laporan Terlampir</td>
	</tr>
  <tr class="g5">
		<td class="tisi-baqh bold">2</td>
		<td>
			Memberi Penyuluhan Mengenai Manajemen
			Pemasaran Pada program Pelatihan Kerja
			Berbasis Masyarakat Melalui Terapan
			Teknologi Tepat Guna
		</td>
		<td class="tisi-baqh" align="center">Penyuluhan</td>
		<td class="tisi-yw4l">Desa Tambak Danau Kec. Astambul Kab. Banjar Kalsel</td>
		<td class="tisi-yw4l">28 Oktober 2010</td>
  	<td class="tisi-baqh">1</td>
    <td class="tisi-yw4l">Laporan Terlampir</td>
	</tr>
  <tr class="g5">
		<td class="tisi-baqh bold">3</td>
		<td>
			Memberi Penyuluhan Mengenai Manajemen
			Pemasaran Pada program Pelatihan Kerja
			Berbasis Masyarakat Melalui Terapan
			Teknologi Tepat Guna
		</td>
		<td class="tisi-baqh" align="center">Penyuluhan</td>
		<td class="tisi-yw4l">Desa Tambak Danau Kec. Astambul Kab. Banjar Kalsel</td>
		<td class="tisi-yw4l">28 Oktober 2010</td>
  	<td class="tisi-baqh">1</td>
    <td class="tisi-yw4l">Laporan Terlampir</td>
	</tr>
</table>
<?php include('footer4.php');
?>
