<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malas ah</title>
</head>
<body>
    <h2>Hitung Pecahan Uang Rupiah</h2>
    <form method="post">
        <label for="jumlah">Masukkan jumlah uang (dalam Rupiah):</label><br>
        <input type="number" id="jumlah" name="jumlah" required><br><br>
        <input type="submit" value="Hitung Pecahan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah = $_POST['jumlah'];

        function hitungPecahanUang($jumlah) {
            $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
            $hasil = [];

            foreach ($pecahan as $uang) {
                if ($jumlah >= $uang) {
                    $lembar = floor($jumlah / $uang);
                    $hasil[$uang] = $lembar;
                    $jumlah -= $lembar * $uang;
                }
            }

            return $hasil;
        }

        $pecahanUang = hitungPecahanUang($jumlah);

        echo "<h3>Uang = Rp. " . number_format($jumlah, 0, ',', '.') . "</h3>";
        echo "<h4>Lembar:</h4>";
        echo "<ul>";
        foreach ($pecahanUang as $uang => $lembar) {
            echo "<li>Rp. " . number_format($uang, 0, ',', '.') . " : " . $lembar . " lembar</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
