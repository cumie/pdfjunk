<?php
session_start();
include_once "../../lib/connection.php";
include_once "../../lib/library.php";
include_once "../lib/trekap.php";


$tahun= isset($_GET['tahun']) ? $_GET['tahun'] : date("Y");
$bulan= isset($_GET['bulan']) ? $_GET['bulan'] : date("m");
# UNTUK PAGING (PEMBAGIAN HALAMAN) 
$pageSql = "SELECT turaiankategori.*,nama_unit FROM turaiankategori LEFT JOIN tunitkerja ON tunitkerja.id_unitkerja=turaiankategori.id_unitkerja WHERE turaiankategori.tahun=".$tahun."  ";
 

// if(isset($_POST['filter'])){
	// $tahun=$_POST['tahun'];
	// $bulan=$_POST['bulan'];
	  // $pageSql="SELECT turaiankategori.*,nama_unit FROM turaiankategori LEFT JOIN tunitkerja ON tunitkerja.id_unitkerja=turaiankategori.id_unitkerja WHERE turaiankategori.tahun=".$tahun." ";
   
// }
$jumlahSQL = "SELECT turaiankategori.*,nama_uraian, SUM(anggaran_murni) AS angmur, SUM(anggaran_perubahan) AS angper,SUM(rencana_keuangan) as renkeu, 100*SUM(rencana_keuangan)/SUM(anggaran_perubahan) AS persen_renkeu, SUM(realisasi_keuangan) AS realkeu,100*SUM(realisasi_keuangan)/SUM(anggaran_perubahan) AS persen_realkeu, SUM(anggaran_perubahan)-SUM(realisasi_keuangan) AS siskeu, 100*(SUM(anggaran_perubahan)-SUM(realisasi_keuangan))/SUM(anggaran_perubahan) AS persen_siskeu FROM turaiankategori LEFT JOIN turaian ON turaian.id_uraiankategori=turaiankategori.id_uraiankategori LEFT JOIN trekap ON trekap.id_uraian=turaian.id_uraian WHERE turaiankategori.tahun=".$tahun." AND turaian.bulan=".$bulan." ";

$jumlahQry = mysqli_query($koneksidb, $jumlahSQL) or die ("error jumlah jumlahSQL: ".mysqli_error($koneksidb));
$pageQry = mysqli_query($koneksidb, $pageSql) or die ("error paging ja : ".mysqli_error($koneksidb));
$dataC = mysqli_fetch_array($pageQry);
// $jml	 = mysqli_num_rows($pageQry);
// $max	 = ceil($jml/$row);
 
?>

<?php include('head.php');
?>
<table class="table-main">
  <tr>
    <td colspan="2" align="center"><h4>REKAPITULASI LAPORAN REALISASI PROGRAM/KEGIATAN PEMBANGUNAN DANA APBD KABUPATEN BALANGAN TAHUN ANGGARAN <?php echo $tahun;?></h4> </td>
      
  </tr> 
  <tr>
    <td colspan="2" align="center">&nbsp; </td>
      
  </tr> 
  <tr>
    <td width="700"><b>Unit Kerja: <?php echo $dataC['nama_unit'];?>  </b>    </td>
     <td width="300" align="right">
	 	Posisi: <?php echo tampil_bulan($bulan);?> <?php echo $tahun;?>
     </td>
  </tr> 
  <tr>
  <td>&nbsp; </td>
  <td> &nbsp;</td>
  </tr>
  </table>


  
	<table class="table-user">
      <tr>
        <th rowspan="2" width="14" align="center"><strong><?php echo $isian0; ?></strong></th>
        <th rowspan="2"  width="70"><strong>Uraian</strong></th>
        <th width="60"><strong><?php echo $isian2; ?></strong></th>
		<th width="60"><strong><?php echo $isian3; ?></strong></th>  
		<th colspan="2" width="60"><strong><?php echo $isian4; ?></strong></th>   
		<th colspan="2"  width="60"><strong><?php echo $isian6; ?></strong></th> 
		<th colspan="2"  width="60"><strong><?php echo $isian8; ?></strong></th>  
		<th   width="40"><strong><?php echo $isian10; ?></strong></th>  
		<th rowspan="2"  width="50"><strong><?php echo $isian11; ?></strong></th>  
		 
        
      </tr>
	  <tr>
         
        <th width="35"><strong>Rp</strong></th>
		<th width="35"><strong>Rp</strong></th>  
		<th width="35"><strong>Rp</strong></th>  
		<th width="15"><strong>%</strong></th>  
		<th width="35"><strong>Rp</strong></th>  
		<th width="15"><strong>%</strong></th>  
		<th width="35"><strong>Rp</strong></th>  
		<th width="15"><strong>%</strong></th>   
		<th width="15"><strong>%</strong></th>   
      </tr>
		<?php
		$mySql = $pageSql." ORDER BY no_program ASC";
		$myQry = mysqli_query($koneksidb, $mySql)  or die ("Query salah : ".mysqli_error($koneksidb));
		$nomar  = 'A'; 
		while ($kolomData = mysqli_fetch_array($myQry)) {
	 $Kode = $kolomData['id_uraiankategori']; 
	$foo2 = str_repeat($kolomData['nama_kategori'],1);
	$id2 = wordwrap($foo2, 23, '<br />', true);
	 
		
		$jumlahSQLuraian = "SELECT turaiankategori.*,nama_uraian, SUM(anggaran_murni) AS angmur, SUM(anggaran_perubahan) AS angper,SUM(rencana_keuangan) as renkeu, 100*SUM(rencana_keuangan)/SUM(anggaran_perubahan) AS persen_renkeu, SUM(realisasi_keuangan) AS realkeu,100*SUM(realisasi_keuangan)/SUM(anggaran_perubahan) AS persen_realkeu, SUM(anggaran_perubahan)-SUM(realisasi_keuangan) AS siskeu, 100*(SUM(anggaran_perubahan)-SUM(realisasi_keuangan))/SUM(anggaran_perubahan) AS persen_siskeu , (SUM(realisasi_fisik))/COUNT(realisasi_fisik) AS persen_real FROM turaiankategori LEFT JOIN turaian ON turaian.id_uraiankategori=turaiankategori.id_uraiankategori LEFT JOIN trekap ON trekap.id_uraian=turaian.id_uraian WHERE turaiankategori.id_uraiankategori=".$kolomData['id_uraiankategori']." AND turaiankategori.tahun=".$tahun." AND turaian.bulan=".$bulan."  ";

		$jumlahQryuraian = mysqli_query($koneksidb, $jumlahSQLuraian) or die ("error jumlah jumlahSQL uraian: ".mysqli_error($koneksidb));
	$dataJumlahuraian = mysqli_fetch_array($jumlahQryuraian);	
	
		?> 
      <tr>
        <td align="center"> <b><?php echo $nomar++; ?></b> </td>
        <td><b><?php echo $id2; ?> </b></td>  
		 <td><b> <?php echo format_angka($dataJumlahuraian['angmur']); ?></b> </td> 	  
        <td><b> <?php echo format_angka($dataJumlahuraian['angper']); ?></b> </td> 	  
        <td> <b><?php echo format_angka($dataJumlahuraian['renkeu']); ?></b> </td> 	  
        <td> <b><?php echo number_format($dataJumlahuraian['persen_renkeu'],2); ?></b> </td> 	  
        <td><b> <?php echo format_angka($dataJumlahuraian['realkeu']); ?> </b></td> 	  
        <td> <b><?php echo number_format($dataJumlahuraian['persen_realkeu'],2); ?> </b></td> 	  
        <td> <b><?php echo format_angka($dataJumlahuraian['siskeu']); ?> </b></td> 	  
        <td><b> <?php echo number_format($dataJumlahuraian['persen_siskeu'],2); ?> </b></td>  
        <td><b> <?php echo number_format($dataJumlahuraian['persen_real'],2); ?> </b></td> 
		<td>&nbsp;</td> 
      </tr>
	  
	  <?php
		$mySql2 = "SELECT turaian.*,trekap.`id_rekap`,trekap.`anggaran_murni`,trekap.`anggaran_perubahan`,trekap.`rencana_keuangan`,trekap.`rencana_keuangan_persen`,trekap.`realisasi_keuangan`,trekap.`realisasi_keuangan_persen`,trekap.`sisa_keuangan`,trekap.`sisa_keuangan_persen`,trekap.`realisasi_fisik`,trekap.`kendala`,trekap.`tgl_update` FROM turaian LEFT JOIN trekap ON turaian.id_uraian=trekap.id_uraian WHERE id_uraiankategori=".$kolomData['id_uraiankategori']." AND turaian.bulan=".$bulan."  ORDER BY no_kegiatan ASC";
		$myQry2 = mysqli_query($koneksidb, $mySql2)  or die ("Query salah : ".mysqli_error());
		$nomor  = '1'; 
		while ($kolomData2 = mysqli_fetch_array($myQry2)) {
			 $Kode2 = $kolomData2['id_uraian'];
			 
	$foo = str_repeat($kolomData2['nama_uraian'],1);
	$id3 = wordwrap($foo, 23, '<br />', true);
	$foa = str_repeat($kolomData2['kendala'],1);
	$id4 = wordwrap($foa, 18, '<br />', true);
		?>
		<tr>
        <td align="center"> <?php echo $kolomData2['no_kegiatan']; ?> </td>
        <td> <?php echo $id3; ?> </td>  
        <td> <?php echo format_angka($kolomData2['anggaran_murni']); ?> </td>  
        <td> <?php echo format_angka($kolomData2['anggaran_perubahan']); ?> </td>  
        <td> <?php echo format_angka($kolomData2['rencana_keuangan']); ?> </td>  
        <td> <?php echo $kolomData2['rencana_keuangan_persen']; ?> </td>  
        <td> <?php echo format_angka( $kolomData2['realisasi_keuangan']); ?> </td>  
        <td> <?php echo $kolomData2['realisasi_keuangan_persen']; ?> </td>  
        <td> <?php echo format_angka($kolomData2['sisa_keuangan']); ?> </td>  
        <td> <?php echo $kolomData2['sisa_keuangan_persen']; ?> </td>  
        <td> <?php echo $kolomData2['realisasi_fisik']; ?> </td>  
        <td> <?php echo $id4; ?> </td>  
       
		 
      </tr>
		
      <?php } ?> 
	    
      <?php } ?>
	  
	  <?php $dataJumlah = mysqli_fetch_array($jumlahQry); ?>
	  <tr> 
	  <td align="center">  </td>
	  <td align="center"> <b>Jumlah</b> </td> 
         <td><b> <?php echo format_angka($dataJumlah['angmur']); ?> </b></td> 	  
        <td><b> <?php echo format_angka($dataJumlah['angper']); ?> </b></td> 	  
        <td><b> <?php echo format_angka($dataJumlah['renkeu']); ?> </b></td> 	  
        <td><b> <?php echo number_format($dataJumlah['persen_renkeu'],2); ?> </b></td> 	  
        <td><b> <?php echo format_angka($dataJumlah['realkeu']); ?> </b></td> 	  
        <td><b> <?php echo number_format($dataJumlah['persen_realkeu'],2); ?> </b></td> 	  
        <td><b> <?php echo format_angka($dataJumlah['siskeu']); ?> </b></td> 	  
        <td><b> <?php echo number_format($dataJumlah['persen_siskeu'],2); ?> </b></td>   
        <td> &nbsp;</td> 	    	  
        <td> &nbsp;</td>  	    	  
	  </tr>
    
	
	</table> 
	
<?php include('footer.php');
?>
	 