<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$user = $_POST['user'];
$pass = md5($_POST['pass']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where user='$user' and pass='$pass'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['user'] = $user;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	?>
	<script>
		alert('Gagal Login');
		document.location = "index.php";
	</script>
	<?php
}
?>
