<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM mataram WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'mataramtampil.php'
</script>

