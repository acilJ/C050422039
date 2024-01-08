    <div>
        Hasil Biaya <br>
        <?php
        if(isset($_POST['hitung'])) {
            $jum = $_POST['jumlah'];
            $hasil = 0;

            if ($jum < 100) {
                $tarif = 150;
                $hasil = $jum * $tarif;
            } else if ($jum < 200) {
                $tarif = 100;
                $hasil = $jum * $tarif;
            } else {
                $tarif = 80;
                $hasil = $jum * $tarif;
            }

            echo "Jumlah Lembar Fotocopy = $jum <br>";
            echo "Tarif harga = $tarif <br>";
            echo "Biaya harus bayar = $hasil <br>";
        }
        ?>
    </div>