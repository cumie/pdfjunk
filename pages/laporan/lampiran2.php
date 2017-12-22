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
			 <u>Kegiatan Pendidikan</u>
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
    <td> <u>Kegiatan Pengajaran</u> </td>
    <td> </td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td class="tisi-baqh bold"> </td>
    <td> <u>Melaksanakan Perkuliahan</u>
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

  <tr class="g5" align="center">
  	<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		<th>5</th>
		<th>6</th>
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

  <tr class="g5">
    <td>5</td>
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
        <li>David Pardede (NPM.0611.32202.1759)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 010/PTS 240.XI.01/Q 2010 Tgl. 5 Januari 2010</td>
  </tr>

  <tr class="g5">
    <td>6</td>
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
        <li>Eny Siswati (NPM.0611.32202.1269)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 0009/PTS 240.XI.01/Q 2010 Tgl. 5 Januari 2010</td>
  </tr>

  <tr class="g5">
    <td>7</td>
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
        <li>H.M.Adhri Kasuma (NPM. 0611.32202.996)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 0008/PTS 240.XI.01/Q 2010 Tgl. 5 Januari 2010</td>
  </tr>

  <tr class="g5">
    <td>8</td>
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
        <li>Catur Widiyanto (NPM. 0611.32202.1388)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 0007/PTS 240.XI.01/Q 2010 Tgl. 5 Januari 2010</td>
  </tr>

  <tr class="g5">
    <td>9</td>
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
        <li>Hendra Wardana (NPM. 0511.32202.655)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3190/PTS 240.XI.01/Q 2010 Tgl. 4 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>10</td>
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
        <li>Siti Khoiriyah  (NPM. 0711.32202.1818)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3187/PTS 240.XI.01/Q 2010 Tgl. 1 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>11</td>
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
        <li> Budi Utomo (NPM. 0711.32202.2102)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2603/PTS 240.XI.01/Q 2010 Tgl. 7 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>12</td>
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
        <li> Gt Sahida Purnamasari (NPM. 0711.32202.2269)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2598/PTS 240.XI.01/Q 2010 Tgl. 7 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>13</td>
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
        <li> Gt Sahida Purnamasari (NPM. 0711.32202.2269)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2598/PTS 240.XI.01/Q 2010 Tgl. 7 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>14</td>
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
        <li> Kurnia Aprianti (NPM. 0711.32202.2079)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2598/PTS 240.XI.01/Q 2010 Tgl. 7 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>15</td>
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
        <li> Emmy Rahmiany (NPM. 0711.32202.2424)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3201/PTS 240.XI.01/Q 2010 Tgl. 4 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>16</td>
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
        <li> Anton Kristanto (NPM. 0711.32202.2205)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3191/PTS 240.XI.01/Q 2010 Tgl. 4 Juli 2010</td>
  </tr>

  <tr class="g5" align="center">
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
  </tr>
  
  <tr class="g5">
    <td>17</td>
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
        <li> Sudaris (NPM. 0711.32202.2334)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2602/PTS 240.XI.01/Q 2010 Tgl. 7 Agustus 2010</td>
  </tr>

  <tr class="g5">
    <td>18</td>
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
        <li> Trio Bayu Wardana (NPM. 0711.32202.2183)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2783/PTS 240.XI.01/Q 2010 Tgl. 22 September 2010</td>
  </tr>

  <tr class="g5">
    <td>19</td>
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
        <li> Endah Sulistea Reni (NPM. 0711.32202.2428)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3486/PTS 240.XI.01/Q 2010 Tgl. 9 Nopember 2010</td>
  </tr>

  <tr class="g5">
    <td>20</td>
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
        <li> Saidah Ridhani (NPM. 0711.32202.2944)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3479/PTS 240.XI.01/Q 2010 Tgl. 9 Nopember 2010</td>
  </tr>

  <tr class="g5">
    <td>21</td>
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
        <li> Lola Malihah (NPM. 0811.32202.3857)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3480/PTS 240.XI.01/Q 2010 Tgl. 9 Nopember 2010</td>
  </tr>

  <tr class="g5">
    <td>22</td>
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
        <li> Alamsyah (NPM. 0711.32202.1900)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3649/PTS 240.XI.01/Q 2010 Tgl. 10 Desember 2010</td>
  </tr>

  <tr class="g5">
    <td>23</td>
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
        <li> Maya Sari (NPM. 0611.32202.1583)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3500/PTS 240.XI.01/Q 2010 Tgl. 9 Nopember 2010</td>
  </tr>

  <tr class="g5">
    <td>24</td>
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
        <li> Zaldy Febriansyah (NPM. 0711.32202.1820)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3256/PTS 240.XI.01/Q 2010 Tgl. 13 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td>25</td>
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
        <li> Imam Nur Sugianto (NPM. 0711.32202.2478)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 247/PTS 240.XI.01/Q 2010 Tgl. 5 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td>26</td>
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
        <li> Novita Anggraini (NPM. 0411.32202.392)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1149/PTS 240.XI.01/Q 2010 Tgl. 16 Maret 2011</td>
  </tr>

  <tr class="g5">
    <td>27</td>
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
        <li> Johan Bernandus (NPM. 0411.32202.540)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1150/PTS 240.XI.01/Q 2010 Tgl. 16 Maret 2011</td>
  </tr>

  <tr class="g5">
    <td>28</td>
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
        <li> Aldhila Ramadano (NPM. 0711.32202.3436)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1401/PTS 240.XI.01/Q 2010 Tgl. 28 April 2011</td>
  </tr>

  <tr class="g5">
    <td>29</td>
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
        <li> Jiyanto (NPM. 0611.32202.1400)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1405/PTS 240.XI.01/Q 2010 Tgl. 28 April 2011</td>
  </tr>

  <tr class="g5">
    <td>30</td>
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
        <li> M.Syaiful Rahman (NPM. 0711.32202.2216)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1370/PTS 240.XI.01/Q 2010 Tgl. 10 April 2011</td>
  </tr>

  <tr class="g5">
    <td>30</td>
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
        <li> M.Syaiful Rahman (NPM. 0611.32202.1523)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1370/PTS 240.XI.01/Q 2010 Tgl. 10 April 2011</td>
  </tr>

  <tr class="g5">
    <td>31</td>
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
        <li> Riyadi Mulaicin (NPM. 0711.32202.2216)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1371/PTS 240.XI.01/Q 2010 Tgl. 10 April 2011</td>
  </tr>

  <tr class="g5">
    <td>32</td>
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
        <li> Imam Santoso (NPM. 0711.32202.2356)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1375/PTS 240.XI.01/Q 2010 Tgl. 10 April 2011</td>
  </tr>

  <tr class="g5">
    <td>33</td>
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
        <li> Rahman Nor Wahyudi (NPM. 0711.32202.2263)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1377/PTS 240.XI.01/Q 2010 Tgl. 10 April 2011</td>
  </tr>

   <tr class="g5" align="center">
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
  </tr>


  <tr class="g5">
    <td>34</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Nurul Anwar  (NPM. 0911322020767)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 2139/PTS 240.XI.01/Q 2010 Tgl. 6 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>35</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Masjuani (NPM. 0911322020760)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 2132/PTS 240.XI.01/Q 2010 Tgl. 6 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>36</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Samidi (NPM. 0911322020879)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 2310/PTS 240.XI.01/Q 2010 Tgl. 6 Juli 2010</td>
  </tr>
  
  <tr class="g5">
    <td>37</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Darmansyah (NPM. 0911322020909)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 2311/PTS 240.XI.01/Q 2010 Tgl. 6 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>38</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Hamdani (NPM. 0911322021904)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 2171/PTS 240.XI.01/Q 2010 Tgl. 6 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>39</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> H.Arkani (NPM. 0911322020796)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 2204/PTS 240.XI.01/Q 2010 Tgl. 6 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>40</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Didi Sulistiyanto (NPM. 0911322021008)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 2205/PTS 240.XI.01/Q 2010 Tgl. 6 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>41</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Ibnu Majah Albaihaqi  (NPM. 0911322021008)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 2206/PTS 240.XI.01/Q 2010 Tgl. 6 Juli 2010</td>
  </tr>

  <tr class="g5">
    <td>42</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Rusdiati (NPM. 0911322021404)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 482/PTS 240.XI.01/Q 2010 Tgl. 16 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td>43</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Ratman Fauzi (NPM. 0911322021405)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 483/PTS 240.XI.01/Q 2010 Tgl. 16 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td>44</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> H.Parianata (NPM. 0911322021417)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 371/PTS 240.XI.01/Q 2010 Tgl. 16 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td>45</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Siti Fatimah (NPM. 0911322021288)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 475/PTS 240.XI.01/Q 2010 Tgl. 16 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td>46</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> H.Syaifuddin (NPM. 0911322021277)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 473/PTS 240.XI.01/Q 2010 Tgl. 16 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td>47</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Muhammad (NPM. 0911322021291)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 478/PTS 240.XI.01/Q 2010 Tgl. 16 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td>48</td>
    <td>Pembimbing II Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li> Akhmad Syarwani (NPM.0911322021289)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">2</td>
    <td>Surat Penunjukan Nomor : 476/PTS 240.XI.01/Q 2010 Tgl. 16 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td></td>
    <td>
      <b>Sub Jumlah Pembimbing Skripsi/Tesis</b>
    </td>
    <td> </td>
    <td> </td>
    <td align="center">46.50</td>
    <td> </td>
  </tr>

  <tr class="g5" align="center">
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
  </tr>

  <tr class="g5">
    <td> </td>
    <td>
      <u>
        <b>
         Bertugas Sebagai Penguji Pada 
         Ujian Akhir      
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
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Catur Widiyanto (NPM. 0611.32202.1388)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 471/PTS 240.XI.01/Q 2010 Tgl. 20 Pebruari 2010</td>
  </tr>
  
  <tr class="g5">
    <td>2</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
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
    <td>Surat Penunjukan Nomor : 472/PTS 240.XI.01/Q 2010 Tgl. 20 Pebruari 2010</td>
  </tr>

  <tr class="g5">
    <td>3</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Evita Triana Lestari (0611.32202.2931)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 473/PTS 240.XI.01/Q 2010 Tgl. 20 Pebruari 2010</td>
  </tr>

  <tr class="g5">
    <td>4</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>H.M.Adhri Kasuma (0611.32202.996)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 490/PTS 240.XI.01/Q 2010 Tgl. 4 Maret 2010</td>
  </tr>

  <tr class="g5">
    <td>5</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Burhan (0611.32202.1649)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 483/PTS 240.XI.01/Q 2010 Tgl. 1 Maret 2010</td>
  </tr>

  <tr class="g5">
    <td>6</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Revian Lara (0511.32202.750)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 482/PTS 240.XI.01/Q 2010 Tgl. 1 Maret 2010</td>
  </tr>

  <tr class="g5">
    <td>7</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>David Pardede (0611.32202.1759)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 484/PTS 240.XI.01/Q 2010 Tgl. 2 Maret 2010</td>
  </tr>

  <tr class="g5">
    <td>8</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Eny Siswati, MH (0611.32202.1269)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 486/PTS 240.XI.01/Q 2010 Tgl. 2 Maret 2010</td>
  </tr>

  <tr class="g5">
    <td>9</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Nor Agus Susilawati (0611.32202.1628)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2753/PTS 240.XI.01/Q 2010 Tgl. 21 September 2010</td>
  </tr>

  <tr class="g5">
    <td>10</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Rahmi Puji Astuti (0711.32202.2292)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2778/PTS 240.XI.01/Q 2010 Tgl. 22 September 2010</td>
  </tr>

  <tr class="g5">
    <td>11</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Gusti Sahida Purnamasari (NPM.0711.32202.2269)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3242/PTS 240.XI.01/Q 2010 Tgl. 11 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td>12</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Suharto (0611.32202.2347)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1862/PTS 240.XI.01/Q 2010 Tgl. 19 Mei 2010</td>
  </tr>

  <tr class="g5">
    <td>13</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Kurnia Aprianti (0711.32202.2079)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2677/PTS 240.XI.01/Q 2010 Tgl. 23 Agustus 2010</td>
  </tr>

  <tr class="g5">
    <td>14</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Miratiningsih (0611.32202.1763)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1542/PTS 240.XI.01/Q 2010 Tgl. 10 Mei 2010</td>
  </tr>

  <tr class="g5">
    <td>15</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Didit Eko Prasetyo (0611.32202.1763)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1877/PTS 240.XI.01/Q 2010 Tgl. 20 Mei 2010</td>
  </tr>

  <tr class="g5">
    <td>16</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Akhmad Luthfi (0811.32202.4460)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2009/2010</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2063/PTS 240.XI.01/Q 2010 Tgl. 21 Juni 2010</td>
  </tr>

  <tr class="g5" align="center">
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
  </tr>

  <tr class="g5">
    <td>17</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Nuryanto (0711.32202.2283)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 883/PTS 240.XI.01/Q 2010 Tgl. 3 Maret 2011</td>
  </tr>

  <tr class="g5">
    <td>18</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Puryedianto (0711.32202.2211)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 803/PTS 240.XI.01/Q 2010 Tgl. 28 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td>19</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Indah Astuti (0811.32202.2822)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 789/PTS 240.XI.01/Q 2010 Tgl. 26 Pebruari 2011</td>
  </tr>

  <tr class="g5">
    <td>20</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Lola Malihah (0811.32202.3857)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3674/PTS 240.XI.01/Q 2010 Tgl. 13 Desember 2011</td>
  </tr>

  <tr class="g5">
    <td>21</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Sujianto (0711.32202.2170)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 0098/PTS 240.XI.01/Q 2010 Tgl. 12 Januari 2011</td>
  </tr>

  <tr class="g5">
    <td>22</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Saidah Ridhani Syahrizada (0711.32202.2170)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 0182/PTS 240.XI.01/Q 2010 Tgl. 26 Januari 2011</td>
  </tr>

  <tr class="g5">
    <td>23</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Melliyana Agustina (0611.32202.1143)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3467/PTS 240.XI.01/Q 2010 Tgl. 8 Nopember 2010</td>
  </tr>

  <tr class="g5">
    <td>24</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Raudah (0711.32202.2250)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3536/PTS 240.XI.01/Q 2010 Tgl. 20 Nopember 2010</td>
  </tr>

  <tr class="g5">
    <td>25</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Syariati (0711.32202.1918)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1338/PTS 240.XI.01/Q 2010 Tgl. 28 April 2011</td>
  </tr>

  <tr class="g5">
    <td>26</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Alamsyah (0711.32202.1900)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1338/PTS 240.XI.01/Q 2010 Tgl. 15 April 2011</td>
  </tr>

  <tr class="g5">
    <td>27</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Khoirudin (0611.32202.1534)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1646/PTS 240.XI.01/Q 2010 Tgl. 4 Mei 2011</td>
  </tr>

  <tr class="g5">
    <td>28</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Johan Berhandus (0411.32202.540)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1332/PTS 240.XI.01/Q 2010 Tgl. 18 April 2011</td>
  </tr>

  <tr class="g5">
    <td>29</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Sri Iriana Ulfah (0711.32202.2389)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1087/PTS 240.XI.01/Q 2010 Tgl. 17 Maret 2011</td>
  </tr>

  <tr class="g5">
    <td>30</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Bernandus Anggur (0711.32202.2127)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 869/PTS 240.XI.01/Q 2010 Tgl. 4 Maret 2011</td>
  </tr>

  <tr class="g5">
    <td>31</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Darsana (0711.32202.2406)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1269/PTS 240.XI.01/Q 2010 Tgl. 9 April 2011</td>
  </tr>

  <tr class="g5">
    <td>32</td>
    <td>Anggota Tim Penguji Skripsi Mahasiswa An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Untung Apriawan (0711.32202.2558)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Genap) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 1200/PTS 240.XI.01/Q 2010 Tgl. 18 Maret 2011</td>
  </tr>

  <tr class="g5">
    <td>33</td>
    <td>Anggota Tim Penguji Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Masjuani (0911322020760)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2900/PTS 240.XI.01/Q 2010 Tgl. 1 Oktober 2010</td>
  </tr>

  <tr class="g5" align="center">
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
  </tr>

  <tr class="g5">
    <td>34</td>
    <td>Anggota Tim Penguji Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Hamdani (0911322021094)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2907/PTS 240.XI.01/Q 2010 Tgl. 1 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td>34</td>
    <td>Anggota Tim Penguji Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Hamdani (0911322021094)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2907/PTS 240.XI.01/Q 2010 Tgl. 1 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td>36</td>
    <td>Anggota Tim Penguji Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Samidi (0911322020879)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2958/PTS 240.XI.01/Q 2010 Tgl. 1 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td>37</td>
    <td>Anggota Tim Penguji Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Darmansyah (0911322020909)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2959/PTS 240.XI.01/Q 2010 Tgl. 1 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td>37</td>
    <td>Anggota Tim Penguji Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Darmansyah (0911322020909)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 2959/PTS 240.XI.01/Q 2010 Tgl. 1 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td>38</td>
    <td>Anggota Tim Penguji Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>H.Arkani (0911322020796)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3007/PTS 240.XI.01/Q 2010 Tgl. 1 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td>39</td>
    <td>Anggota Tim Penguji Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Didik Sulistiyanto (0911322020796)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3008/PTS 240.XI.01/Q 2010 Tgl. 1 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td>40</td>
    <td>Anggota Tim Penguji Tesis Mahasiswa Program Pasca Sarjana An. :</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="g5">
    <td></td>
    <td>
      <ul>
        <li>Ibnu Majah Albaihaqi (0911322020796)</li>
      </ul>
    </td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">0.5</td>
    <td>Surat Penunjukan Nomor : 3009/PTS 240.XI.01/Q 2010 Tgl. 1 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td></td>
    <td>
      <b>Sub Jumlah Penguji Skripsi/Tesis</b>
    </td>
    <td> </td>
    <td> </td>
    <td align="center">20</td>
    <td> </td>
  </tr>

  <tr class="g5" align="center">
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
  </tr>

  <tr class="g5">
    <td> </td>
    <td>
      <u>
        <b>
         Pembimbing Akademik Mahasiswa      
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
    <td>Dosen Penasehat Akademik Tahun Akademik 2010/2011</td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td align="center">(Smt.Ganjil) 2010/2011</td>
    <td align="center">2</td>
    <td>SK.Nomor : 018/PTS 240.XI.01/KEP/Q 2010 Tgl. 20 Oktober 2010</td>
  </tr>

  <tr class="g5">
    <td></td>
    <td>
      <b>Sub Jumlah Pembimbing Akademik</b>
    </td>
    <td> </td>
    <td> </td>
    <td align="center">2</td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td> </td>
    <td>
      <u>
        <b>
         Mengembangkan Bahan Pelajaran      
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
    <td>Membuat Diktat : Matematika Ekonomi</td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td> </td>
    <td align="center">5</td>
    <td>Diktat Terlampir</td>
  </tr>

  <tr class="g5">
    <td></td>
    <td>
      <b>Sub Jlh Mengembangkan Bhn Pelajaran</b>
    </td>
    <td> </td>
    <td> </td>
    <td align="center">5</td>
    <td> </td>
  </tr>

  <tr class="g5">
    <td> </td>
    <td>
      <u>
        <b>
         Menduduki Jabatan Pimpinan PT     
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
    <td>Sebagai Ketua Jurusan Manajemen (2 Semester)</td>
    <td>STIE Panca Setia Banjarmasin</td>
    <td>17 Mei 2010 s/d 17 Mei 2014</td>
    <td align="center">6</td>
    <td>SK.Nomor : 005/PTS 240.XI.01/KEP/C 2010 Tgl. 17 Mei 2010</td>
  </tr>

  <tr class="g5">
    <td></td>
    <td>
      <b>Sub Jlh Menduduki Jab.Pimpinan PT</b>
    </td>
    <td> </td>
    <td> </td>
    <td align="center">6</td>
    <td> </td>
  </tr>

  <tr class="g5" align="center">
    <td></td>
    <td>
      <b>Jumlah Keseluruhan</b>
    </td>
    <td> </td>
    <td> </td>
    <td align="center"><b>151.5</b></td>
    <td> </td>
  </tr>
</table>
<?php include('footer2.php');
?>
