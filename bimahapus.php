<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM bima WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'bimatampil.php'
</script>

