<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
            <label>Masukkan Total Jam Kerja</label><br/>
            <input type="text" name="total"><br/>
            <input type="submit" value="oke">
    </form>
    
        <?php 
            $total = $_POST['total'] ?? ''; 
            $uanglembur = 50000;
            $onlyNumbers = filter_var($total, FILTER_SANITIZE_NUMBER_INT);
            if($onlyNumbers <= 8){
                echo "Anda tidak lembur, total jam kerja hanya $onlyNumbers jam";
            }else if ($onlyNumbers > 8){
            $uanglemburlanjutan = ($onlyNumbers - 9) * 25000;
            $total = $uanglembur + $uanglemburlanjutan;
            $totaljamlembur = $onlyNumbers-8;
            echo "Lama Jam Kerja : $onlyNumbers <br> Jumlah Kompensasi : Rp. $total <br>";
            echo "Jam Lebih : $totaljamlembur Jam";
            }
        ?>
</body>
</html>
