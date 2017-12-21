<?php
ob_start();
 include('lampiran4.php');
 $content = ob_get_clean();
 
// conversion HTML => PDF
 require_once('../../plugins/html2pdf/html2pdf.class.php');
 try
 {
 $html2pdf = new HTML2PDF('P','F4','en', false, 'ISO-8859-15',array(15, 10, 10, 10));
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 $html2pdf->Output('laporan_rekapitulasi.pdf');
 }
 catch(HTML2PDF_exception $e) { echo $e; }
 
?>