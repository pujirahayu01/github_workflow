<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    
</head>
<body>
    <?php
    if(isset($_POST['Hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];

        $operasi  = $_POST['operasi'];
        switch($operasi){
            case 'tambah':
                $hasil = $bil1+$bil2;
                break;
            case 'kurang' :
                $hasil = $bil1-$bil2;
                break;
            case 'kali' :
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi' :
                $hasil = $bil1 / $bil2;
                break;
            
        }
     }
    
    ?>
    <div class="main">
        <h1 class="title"> KALKULATOR SEDERHANA </h1>
        <p>Untuk mempermudah dalam menghitung angka</p>
        
        <form method="post" action="kalkulator.php">
            <input type="number" name="bil1" class="bil" placeholder="Masukkan Bilangan ke - 1 ">
            <input type="number" name="bil2" class="bil" placeholder="Masukkan Bilangan ke - 2 ">
            
            
            <!-- mencoba menambahkan fitur operasi -->
            <select class="opt" name="operasi">
                <option value="tambah"> + </option>
                <option value="kurang"> - </option>
                <option value="kali"> x </option>
                <option value="bagi"> / </option>
            </select>

            <input type="submit" name="Hitung" value="Hitung" class="tombol">

        </form>

    
    <?php if(isset($_POST['Hitung'])){ ?>
        <input type="text" value="<?php echo $hasil; ?>" class="bil" disabled />
    <?php } else{ ?>
        <input type="text" value ="0" class="bil" disabled/>
    <?php } ?>

    </div>
    
</body>
</html>