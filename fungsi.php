<?php

	function tambah($a, $b) { // Fungsi tambah dengan 2 parameter.
		return $a + $b; // Fungsi itu mengembalikan nilai, makanya harus pakai return.
	}

	function kurang($a, $b) {
		return $a - $b;
	}

	function kali($a, $b) {
		return $a * $b;
	}

	function bagi($a, $b) {
		return $a / $b;
	}

	echo "Contoh Fungsi Tambah : " . tambah(5, 7); // Untuk menampilkan data dan diisi dengan parameter data.

	echo '<br />'; // Break / ganti baris

	echo "Contoh Fungsi Kurang : " . kurang(10, 6);

	echo '<br />';

	echo "Contoh Fungsi Kali : " . kali(5, 6);

	echo '<br />';

	echo "Contoh Fungsi Bagi : " . bagi(45, 5);

	echo '<br /><br />';

	// Tambahan aja

	$n1 = tambah(5, 7);
	$n2 = kurang(10, 6);
	$n3 = kali(5, 6);
	$n4 = bagi(45, 5);

	$total = $n1 + $n2 + $n3 + $n4;
	$rata2 = ($n1 + $n2 + $n3 + $n4) / 4;

	echo "Total nilai adalah " . $total . ". Dengan rata - rata " . $rata2;
	
?>