<!DOCTYPE html>
  <html>
    <head>
    <title>Tambah Data</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/tambah.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<body style ="background-image: url(css/q.png)">
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand btn bg-dark" href="#"><b>UPTD</b></a>
  <a class="navbar-brand" href="#"><b>PELAKU USAHA MATARAM</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class=" btn btn-warning " href="mataramtampil.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="jumbotron" >
    <h4> <b>Tambah Data Pelaku Usaha</b></h4>
      <div  class="col-sm-6">
        <p><form action="ptambahmataram.php" method="POST"></p>

        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
              <input type="hidden" name="nomor" class="form-control" >
            </div>
          </div>

        
          <div class="row">
            <div class="col-sm-6">
              <label>Unit/Pelaku</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="unit" class="form-control"autofocus>
            </div>
          </div>

           <div class="row">
            <div class="col-sm-6">
              <label>ALamat</label>
            </div>
            <div class="col-sm-6">
            <textarea name="alamat" class="form-control"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>jenis (S/R/Rek)</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="jenis" class="form-control">
            </div>
          </div>
       
           
          <div class="row">
            <div class="col-sm-6">
              <label>Ruang Lingkup/Komoditas</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="rlk" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Masa Berlaku Sejak</label>
            </div>
            <div class="col-sm-6">
            <input type="date" name="mulai" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Masa Berlaku S/D</label>
            </div>
            <div class="col-sm-6">
            <input type="date" name="sampai" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Tahun Terbit</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="tahun" class="form-control">
            </div>
          </div>

        
          <div class="row">
            <div class="col-sm-6">
              <label>Nomor (S/R/Rek)</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="rek" class="form-control">
            </div>
          </div>


          <div class="row">
            <div class="col-sm-6">
              <label>Lab Penguji</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="lab" class="form-control">
            </div>
          </div>

    <div class="row" >
      <div class="col-sm-6">
     <button  type="submit" class="btn btn-primary btn-block">Tambahkan</button>
     <button  type="reset" class="btn btn-danger btn-block">reset</button>
          </div>
            </div>
        </div>
    </form>
      </div>

</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>