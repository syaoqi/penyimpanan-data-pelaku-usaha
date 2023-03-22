<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data </title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/editlobar.css">
</head>
<body  style="background-image: url(css/q.png)">
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand btn bg-dark" href="#"><b>UPTD</b></a>
  <a class="navbar-brand" href="#"><b>PELAKU USAHA LOBAR</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class=" btn btn-warning " href="tampillout.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>
	<div class="container">
    <div class="jumbotron">
    <h4> <b>UBAH DATA</b></h4>
      <div class="col-sm-6">
        <?php
        include "koneksi.php";
        //menampilkan data tertentu dari sql dalam bentuk objek
        $sql = $koneksi->query("SELECT * FROM lout WHERE nomor=".$_GET['nomor']);
        //konversi data yang terdapat di dalam variabel $sql menjadi bentuk array
        $s = mysqli_fetch_array($sql);
        // var_dump($s)
        ?>
        <form action="peditlout.php" method="POST">
        <div class="row">
            <div class="col-sm-6">
              
            </div>
            <div class="col-sm-6">
              <input type="hidden" name="nomor" class="form-control" value="<?php echo $s['nomor']?>">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Unit/Pelaku</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="unit" class="form-control" autofocus value="<?php echo $s['unit']?>">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>ALamat</label>
            </div>
            <div class="col-sm-6">
            <textarea name="alamat" class="form-control" value=""><?php echo $s['alamat']?></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>jenis (S/R/Rek)</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="jenis" class="form-control" value="<?php echo $s['jenis']?>">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Ruang Lingkup/Komoditas</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="rlk" class="form-control" value="<?php echo $s['rlk']?>">
            </div>
          </div>

           

          <div class="row">
            <div class="col-sm-6">
              <label>Masa Berlaku Sejak</label>
            </div>
            <div class="col-sm-6">
            <input type="date" name="mulai" class="form-control"  value="<?php echo $s['mulai']?>">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Masa Berlaku S/D</label>
            </div>
            <div class="col-sm-6">
            <input type="date" name="sampai" class="form-control" value="<?php echo $s['sampai']?>">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Nomor (S/R/Rek)</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="rek" class="form-control" value="<?php echo $s['rek']?>">
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <label>Lab Penguji</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="lab" class="form-control" value="<?php echo $s['lab']?>">
            </div>
          </div>

    <div class="row">
      <div class="col-sm-6">
     <button type="submit" class="btn btn-primary btn-block">Ubah</button>
            
          </div>
        </div>
    </form>
      </div>
    
</div>
</body>
</html>