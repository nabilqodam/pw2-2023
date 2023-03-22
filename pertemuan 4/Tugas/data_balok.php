<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		require_once 'class_balok.php';

		$balok1 = new Balok(29, 16, 7);
		echo "<br>Balok Pertama:";
		echo "<br>Luas: " . $balok1->getLuas();
		echo "<br>Keliling: " . $balok1->getKeliling();
		echo "<br>Volume: " . $balok1->getVolume();
		echo "<hr>";

		$balok2 = new Balok(29, 16, 7);
		echo "<br>Balok Kedua:";
		echo "<br>Luas: " . $balok2->getLuas();
		echo "<br>Keliling: " . $balok2->getKeliling();
		echo "<br>Volume: " . $balok2->getVolume();
		echo "<hr>";

		$balok3 = new Balok(29, 16, 7);
		echo "<br>Balok Ketiga:" ;
		echo "<br>Luas: " . $balok3->getLuas();
		echo "<br>Keliling: " . $balok3->getKeliling();
		echo "<br>Volume: " . $balok3->getVolume();
		echo "<hr>";

		$balok4 = new Balok(29, 16, 7);
		echo "<br>Balok Keempat:";
		echo "<br>Luas: " . $balok4->getLuas();
		echo "<br>Keliling: " . $balok4->getKeliling();
		echo "<br>Volume: " . $balok4->getVolume();
		echo "<hr>";