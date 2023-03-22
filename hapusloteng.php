<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM loteng WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'tampilloteng.php'
</script>

