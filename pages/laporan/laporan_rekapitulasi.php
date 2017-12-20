<?php
	$now = date("Y-m-d"); 
	$tahun = date("Y"); 
	$bulan = date("m");  
	$kondisi	= isset($_POST['k']) ? $_POST['kondisi'] : '';
	$ruangan	= isset($_POST['r']) ? $_POST['ruangan'] : '';
?>
	<form class="form-horizontal"  method="GET" action="page/laporan/laporancustom-pdf.php?tahun=['tahun']&bulan=['bulan']" target="_blank">
	
<table class="table table-hover table-striped">
							<tr>
      <th colspan="2" ><h2>Cetak Laporan Rekapitulasi</h2></th>
    </tr>
<tr>
<td>Tahun Rekap</td>
<td><select name="tahun" class="input-large"> 
			<?php
			$mySql2 = "SELECT * FROM turaiankategori GROUP BY tahun ORDER BY nama_kategori ASC";
			$myQry = mysqli_query($koneksidb, $mySql2) or die ("Gagal Query kategori  ".mysqli_error($koneksidb)); 
			while ($kolomData1 = mysqli_fetch_array($myQry)) {
				if ($tahun == $kolomData1['tahun']) {
					$cek = "selected";
				} else { $cek=""; }
				$tahun1 = $kolomData1['tahun']+1;

				if ($tahun == $tahun1) {
					$cek1 = "selected";
				} else { $cek1=""; }				
				echo "<option value='$kolomData1[tahun]' $cek> $kolomData1[tahun] </option>";
				echo "<option value='$tahun1' $cek1> $tahun1 </option>"; 
			}
			$mySql ="";
			?>
			</select></td>
</tr>  
<tr>
<td>Bulan Rekap</td>
<td>			
			<select name="bulan" class="input-large"> 
			<option value='01' <?php if ($bulan=='01') { echo "selected";} ?>> Januari</option> 
			<option value='02' <?php if ($bulan=='02') { echo "selected";} ?>> Februari </option> 
			
			<option value='03' <?php if ($bulan=='03') { echo "selected";} ?>> Maret </option> 
			
			<option value='04' <?php if ($bulan=='04') { echo "selected";} ?>> April </option> 
			
			<option value='05' <?php if ($bulan=='05') { echo "selected";} ?>> Mei </option> 
			
			<option value='06' <?php if ($bulan=='06') { echo "selected";} ?>> Juni </option> 
			
			<option value='07' <?php if ($bulan=='07') { echo "selected";} ?>> Juli </option> 
			
			<option value='08' <?php if ($bulan=='08') { echo "selected";} ?>> Agustus </option> 
			
			<option value='09' <?php if ($bulan=='09') { echo "selected";} ?>> September </option> 
			
			<option value='10' <?php if ($bulan=='10') { echo "selected";} ?>> Oktober </option>
			
			<option value='11' <?php if ($bulan=='11') { echo "selected";} ?>> November </option>
			
			<option value='12' <?php if ($bulan=='12') { echo "selected";} ?>> Desember </option> 
			
			</select></td>
</tr>   
 <tr>
 <td> &nbsp; </td>
<td > <button type="button" class="btn " name=" KEMBALI " id="cancel" value=" BATAL "  onclick="history.back();"/> Batal </button>
								<button type="reset" class="btn " name="reset" id="reset" onclick="return confirm('hapus data yang telah anda ketik?')"/>Reset</button>
		   <button type="submit" class="btn btn-primary">Proses</button></td>
 </form>
</tr>
</table>
