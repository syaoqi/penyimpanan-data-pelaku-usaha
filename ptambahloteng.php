<?php  
include "koneksi.php";

$unit = $_POST['unit'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$rlk =$_POST['rlk'];
$mulai = $_POST['mulai'];
$sampai = $_POST['sampai'];
$rek = $_POST['rek'];
$lab = $_POST['lab'];

$simpan = "INSERT INTO loteng (unit,alamat,jenis,rlk,mulai,sampai,rek,lab) 
VALUES ('$unit','$alamat','$jenis','$rlk','$mulai','$sampai','$tahun','$rek','$lab'))";

if ($simpan){
	mysqli_query($koneksi, $simpan);
	echo"<script language='JavaScript'>
	 alert ('Data Berhasil Disimpan');
	 document.location ='tampilloteng.php'
	 </script>";

} else {
echo"gagal upload".mysqli_error($koneksi);
}
