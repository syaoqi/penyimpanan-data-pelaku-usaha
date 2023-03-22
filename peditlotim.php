<?php  
include "koneksi.php";

$nomor = $_POST['nomor'];
$unit = $_POST['unit'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$rlk =$_POST['rlk'];
$mulai = $_POST['mulai'];
$sampai = $_POST['sampai'];
$tahun = $_POST['tahun'];
$rek = $_POST['rek'];
$lab = $_POST['lab'];

$update = "UPDATE lotim SET nomor='$nomor',unit='$unit',alamat='$alamat',jenis='$jenis',rlk='$rlk',mulai='$mulai', sampai='$sampai',  tahun='$tahun', rek='$rek',lab='$lab' where nomor='$nomor'";
mysqli_query($koneksi, $update);
if (mysqli_query($koneksi, $update)) {
	header("location:tampillotim.php");
}else{
	echo "eror gayn,". mysqli_error($koneksi);
}