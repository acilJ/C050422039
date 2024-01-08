<?php
// Membuat array asosiatif
$buah = array(
    "apel" => 100,
    "jeruk" => 80,
    "mangga" => 120,
    "pisang" => 60
);

// Menampilkan array sebelum pengurutan
echo "Array sebelum pengurutan: <br>";
print_r($buah);
echo "<br><br>";

// array_sort
echo "array_sort: <br>";
asort($buah);
print_r($buah);
echo "<br><br>";

// asort
echo "asort: <br>";
asort($buah);
print_r($buah);
echo "<br><br>";

// ksort
echo "ksort: <br>";
ksort($buah);
print_r($buah);
echo "<br><br>";

// rsort
echo "rsort: <br>";
rsort($buah);
print_r($buah);
echo "<br><br>";

// arsort
echo "arsort: <br>";
arsort($buah);
print_r($buah);
echo "<br><br>";

// krsort
echo "krsort: <br>";
krsort($buah);
print_r($buah);
echo "<br><br>";
?>
