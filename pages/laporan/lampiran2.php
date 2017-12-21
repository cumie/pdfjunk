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

<?php include('head2.php');
?>

<table class="tisi">
  <tr>
  	<th rowspan="2">NO.</th>
		<th rowspan="2" width="400">KEGIATAN PENDIDIKAN DAN PENGAJARAN</th>
  </tr>
	<tr>
		<th>TEMPAT / INSTANSI</th>
		<th width="200">TANGGAL</th>
		<th width="150">JUMLAH ANGKA KREDIT</th>
    <th width="150">KETERANGAN / BUKTI FISIK</th>
  </tr>
	<tr>
  	<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		<th>5</th>
		<th>6</th>
  </tr>
	<tr class="g5">
    <td class="tisi-baqh bold">A.</td>
    <td>
			<b><u>Kegiatan Pendidikan</u>
		</td>
		<td> </td>
		<td> </td>
		<td> </td>
		<td> </td>
	</tr>

  <tr class="g5">
    <td class="tisi-baqh bold">-</td>
    <td>
      Memperoleh Ijazah S2
    </td>
    <td>UNIBRAW Malang</td>
    <td align="center">18 Juni 2008</td>
    <td align="center">50</td>
    <td>Fotocoy Ijazah Terlampir</td>
  </tr>

  <tr class="g5">
    <td></td>
    <td>
      <b>Sub Jumlah Kegiatan Pendidikan</b>
    </td>
    <td> </td>
    <td> </td>
    <td align="center">50</td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td class="tisi-baqh bold">B.</td>
    <td>
      <b><u>Kegiatan Pengajaran</u>
    </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td class="tisi-baqh bold"> </td>
    <td>
      <b><u>Melaksanakan Perkuliahan</u>
    </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td class="tisi-baqh bold">1.</td>
    <td>Memberi Kuliah :</td>
    <td></td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td> </td>
    <td>
      <ul>
        <li>Riset Operasional (3 sks)</li>
        <li>Studi Kelayakan Bisnis (3 sks)</li>
        <li>Manajemen Strategi (3 sks)</li>
        <li>Manajemen Operasional (3 sks)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">5.5.</td>
    <td>SK.Nomor : 007/PTS 240.XI.01/KEP/Q 2009 Tgl. 14 Oktober 2009</td>
  </tr>

  <tr class="g5">
    <td class="tisi-baqh bold">2.</td>
    <td>Memberi Kuliah :</td>
    <td></td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td> </td>
    <td>
      <ul>
        <li>Riset Pemasaran (3 sks)</li>
        <li>Akutansi Biaya (3 sks)</li>
        <li>Perekonomian Indonesia (3 sks)</li>
        <li>Pengantar Ekonomi Makro (3 sks)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">5.5.</td>
    <td>SK.Nomor : 004/PTS 240.XI.01/KEP/Q 2010 Tgl. 8 Maret 2010</td>
  </tr>

  <tr class="g5">
    <td class="tisi-baqh bold">3.</td>
    <td>Memberi Kuliah :</td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td> </td>
    <td>
      <ul>
        <li>Matematika Ekonomi & Bisnis (3 sks)</li>
        <li>Manajemen Strategi (3 sks)</li>
        <li>Riset Operasional (3 sks)</li>
        <li>Metode Penelitian (3 sks)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">5.5.</td>
    <td>SK.Nomor : 014/PTS 240.XI.01/KEP/Q 2010 Tgl. 18 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td class="tisi-baqh bold">4.</td>
    <td>Memberi Kuliah :</td>
    <td></td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td> </td>
    <td>
      <ul>
        <li>Statistik (3 sks)</li>
        <li>Perekonomian Indonesia (3 sks)</li>
        <li>Manajemen Strategi (3 sks)</li>
        <li>Riset Operasional (3 sks)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">5.5.</td>
    <td>SK.Nomor : 003/PTS 240.XI.01/KEP/Q 2011 Tgl. 1 Maret 2011</td>
  </tr>

  <tr class="g5">
    <td></td>
    <td>
      <b>Sub Jumlah Kegiatan Pengajaran</b>
    </td>
    <td> </td>
    <td> </td>
    <td align="center">22</td>
    <td> </td>
  </tr>

  <tr>
  	<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
  </tr>

  <tr class="g5">
    <td> </td>
    <td>
      <u>
        <b>
          Membimbing Dan Ikut Membimbing Dalam Menghasilkan Disertasi, Thesis, Skripsi, Dan Laporan Akhir Studi
        </b>
      </u>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>

  <tr class="g5">
    <td>1</td>
    <td>Pembimbing II Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Diah Marwiati (NPM.0611.32202.1452)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 020/PTS 240.XI.01/Q 2010 Tgl. 7 Januari 2010</td>
  </tr>

  <tr class="g5">
    <td>2</td>
    <td>Pembimbing II Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Evita Triana Lestari (NPM. 0611.32202.2931)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 021/PTS 240.XI.01/Q 2010 Tgl. 7 Januari 2010</td>
  </tr>

  <tr class="g5">
    <td>3</td>
    <td>Pembimbing II Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Revian Lara (NPM.0511.32202.750)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 012/PTS 240.XI.01/Q 2010 Tgl. 5 Januari 2010</td>
  </tr>

  <tr class="g5">
    <td>4</td>
    <td>Pembimbing II Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Burhan (NPM.0611.32202.1649)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 011/PTS 240.XI.01/Q 2010 Tgl. 5 Januari 2010</td>
  </tr>

</table>
<?php include('footer3.php');
?>
