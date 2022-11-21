<?php 

function query($query){
	global $koneksi;
	$sql = $koneksi->query($query);
	$fetch = [];
	while ($fetchs = $sql->fetch_assoc()) {
		$fetch[] = $fetchs;
	}
	return $fetch;
}

 ?>
