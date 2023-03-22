<?php
require 'functions.php';
$tampil = query("SELECT * FROM ksb");

if (isset($_POST["cari"]) ){
	$tampil = cari8($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pelaku Usaha</title>
    <link rel="stylesheet" type="text/css" href="css/tampil.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style ="background-image: url(css/q.png)">
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand btn bg-dark" href="#"><b>UPTD</b></a>
  <a class="navbar-brand" href="#"><b>PELAKU USAHA SUMBAWA BESAR</b></a>
  <!-- <a class="navbar-brand"href="home.php "><b>DATA PELAKU USAHA</b></a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class=" btn btn-warning " href="home.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
	<a  class="button btn btn-primary" href="ksbtambah.php">Tambah</a>
<a  class="button btn btn-success" href="ksbtampil.php">Tampilkan Semua Data</a>

	<h4>DATA PELAKU USAHA</h4>
	<form  action="" method ="POST">
	<div style="margin-top:12px" class="row">
	<div  class="col-sm-5">
<input class ="form-control" type="text" name="keyword" autofocous placeholder="masukkan data" autocomplete="off">
</div>
      <div class="col-sm-2">
			<button class="btn btn-success " type="submit" name="cari" style="padding : 5px">Cari Data</button>
			</div>
          </div>
	</form>

		<thead>
			<tr>
				<th >No</th>
				<th >Unit/Pelaku</th>
                <th >Alamat</th>
				<th >Jenis (S/R/Rek) </th>
				<th >Ruang Lingkup/Komoditas</th>
				<th >Mulai Berlaku Sejak</th>
				<th >Masa Berlaku s/d</th>
				<th >Tahun Terbit</th>
				<th>Nomor (S/R/Rek)</th>
				<th>Lab Penguji</th>
				
				<th>Tools</th>
				
			</tr>
		</thead>
		<?php $i = 1; ?>
<?php foreach ($tampil as $row) : ?>
	
			<tr>
			<td><?= $i ?></td>
				<td><?php echo $row['unit']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['jenis']; ?></td>
				<td><?php echo $row['rlk']; ?></td>
				<td><?php echo $row['mulai']; ?></td>
				<td><?php echo $row['sampai']; ?></td>
				<td><?php echo $row['tahun']; ?></td>
				<td><?php echo $row['rek']; ?></td>
				<td><?php echo $row['lab']; ?></td>
				<td>
					<a href="ksbedit.php?nomor=<?php echo $row['nomor'];?>" type="button" class="btn btn-warning btn-sm" style= "margin-bottom:5px"  >UBAH</a>
					<a href="ksbhapus.php?nomor=<?php echo $row['nomor'];?>" type="button" class="btn btn-danger btn-sm">HAPUS</a>
				</td>
				
			</tr>
			<?php $i++ ;?>
<?php endforeach; ?>

	</table>
	</div>
</div>
</body>
</html>