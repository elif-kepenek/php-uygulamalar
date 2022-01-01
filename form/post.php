<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3'e Bölünebilme</title>
    <style>
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    error_reporting(E_ALL);
    $sayi = $_POST['sayi'];    
?>

<div class="container">
        <?php echo 'Girilen Sayı: ' . $sayi . '<br>';
        
        if ($sayi%3 == 0) {
            echo 'Girilen sayı 3\'e tam bölünüyor.';
        } elseif ($sayi%3 == 1) {
            echo 'Girilen sayının 3\'e bölümünden kalan 1\'dir.' . '<br>Girilen sayıdan sonraki bölünebilen ilk değer: ' . ($sayi + 2);
        } elseif ($sayi%3 == 2) {
            echo 'Girilen sayının 3\'e bölümünden kalan 2\'dir.' . '<br>Girilen sayıdan sonraki bölünebilen ilk değer: ' . ($sayi + 1);
        } else {
            echo 'Lütfen sayı giriniz.';
        }
        
        ?>
</div>
</body>
</html>