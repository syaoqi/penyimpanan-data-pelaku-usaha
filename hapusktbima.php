<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM kotabima WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'ktbimatampil.php'
</script>

