<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM dompu WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'domputampil.php'
</script>

