<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
<a class="navbar-brand btn bg-dark" href="#"><b>UPTD</b></a>

  <div class="collapse navbar-collapse" id="navbarNav">
    
  <div class="dropdown" style="margin-left:75%">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   KABUPATEN / KOTA
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="mataramtampil.php">MATARAM</a>
    <a class="dropdown-item" href="ksbtampil.php">SUMBAWA KSB</a>
    <a class="dropdown-item" href="sumbawatampil.php">SUMBAWA</a>
    <a class="dropdown-item"  href="ktbimatampil.php">KOTA BIMA</a>
    <a class="dropdown-item"  href="bimatampil.php"> BIMA</a>
    <a class="dropdown-item"  href="tampillobar.php">LOMBOK BARAT</a>
    <a class="dropdown-item"  href="tampilloteng.php">LOMBOK TENGAH</a>
    <a class="dropdown-item"  href="tampillotim.php">LOMBOK TIMUR</a>
    <a class="dropdown-item"  href="tampillout.php">LOMBOK UTARA</a>
  </div>
</div>
<ul class="navbar-nav ml-auto">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
	  <li class="nav-item">
        <a class=" btn btn-danger ml-auto" href="index.php"onclick="return confirm('yakin Ingin Keluar?')">KELUAR</a>
      </li>
    </ul>
  </div>
</nav>
</nav>
<!-- JS, Popper.js, and jQuery -->
<script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
<script  type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>