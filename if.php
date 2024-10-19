<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If PHP</title>
</head>
<body>
    <form action="" method="get">
        Nilai : <input type="number" name="nilai"/>
        <input type="submit" value="Proses"/>
    </form>
    <?php
    $nilai = $_GET['nilai'];
    if($nilai > 100){
        echo "Data anda tidak valid";
    }elseif($nilai >= 70){
        echo "Lulus ujian dengan baik";
    }elseif($nilai >= 60){
        echo "Lulus ujian dengan cukup";
    }else{
        echo "Tidak lulus ujian"
    }
    ?>
</body>
</html>