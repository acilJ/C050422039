<?php
$buah = array("apel", "pisang", "jeruk", "mangga");
$buah_pertama = array_shift($buah);
echo "Elemen pertama yang dihapus: " . $buah_pertama . "<br>";
echo "Array setelah penghapusan elemen pertama: <br>";
print_r($buah);
?>
