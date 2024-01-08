<?php
    function ganjil($a) {
        return $a % 2 == 1;
    }

    $jumlah = 0;
    for ($i = 10; $i <= 123456; $i++) {
        if (ganjil($i)) {
            $jumlah++;
        }
    }

    echo "Jumlah bilangan ganjil antara 10 sampai 123456 adalah $jumlah";
?>