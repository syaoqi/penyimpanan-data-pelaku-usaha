<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM pu WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'tampillobar.php'
</script>

