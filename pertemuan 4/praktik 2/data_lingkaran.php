<?php
require_once 'class_lingkaran.php';

     $linkar1 = new Lingkaran(7);
     $linkar2 = new Lingkaran(15);

    echo "Nilai PHI =" . Lingkaran::PHI;
    echo "<br>Luas Lingkaran 1 =" . $linkar1->getLuas();
    echo "<br>Keliling Lingkaran 1 =" . $linkar1->getKel();
    echo '<br><br>';
    echo "<br>Luas Lingkaran 2 =" . $linkar2->getLuas();
    echo "<br>Keliling Lingkaran 2 =" . $linkar2->getKel();

?>