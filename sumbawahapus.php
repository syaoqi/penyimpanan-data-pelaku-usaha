<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM sumbawa WHERE nomor=".$_GET['nomor']);
?>

<script>
	document.location = 'sumbawatampil.php'
</script>

