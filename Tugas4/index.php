<!DOCTYPE html>
    <html>
        <head>
            <title>Perhitungan Total Pembelian</title>
             <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <?php
            define("PAJAK", 0.10);
            $barang = [
                "Keyboard" => 150000,
                "Mouse" => 50000,
                "Monitor" => 2000000
            ];
            $nama_barang = "Keyboard";
            $jumlah = 2;
            $harga = $barang[$nama_barang];
            $total = $harga * $jumlah;
            $pajak = $total * PAJAK;
            $total_bayar = $total + $pajak;
            ?>

            <div class="box">
                <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
                <hr>
                <p>Nama Barang: <?php echo $nama_barang; ?></p>
                <p>Harga Satuan: Rp <?php echo number_format($harga,0,",","."); ?></p>
                <p>Jumlah Beli: <?php echo $jumlah; ?></p>
                <p>Total Harga (Sebelum Pajak): Rp <?php echo number_format($total,0,",","."); ?></p>
                <p>Pajak (10%): Rp <?php echo number_format($pajak,0,",","."); ?></p>
                <b>Total Bayar: Rp <?php echo number_format($total_bayar,0,",","."); ?></b>
            </div>
        </body>
</html>