<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM lout WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'tampillout.php'
</script>

