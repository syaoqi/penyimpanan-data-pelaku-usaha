<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM ksb WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'ksbtampil.php'
</script>

