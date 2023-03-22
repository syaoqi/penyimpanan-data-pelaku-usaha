<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM lotim WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'tampillotim.php'
</script>

