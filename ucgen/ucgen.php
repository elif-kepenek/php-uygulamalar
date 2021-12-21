<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üçgen</title>
</head>
<body>

<?php

//Girilen sayı değeri kadar girilen deseni 1 artarak satır aşağısında devam ettiren fonskyion

function ucgen($sayi,$desen='*'){
  
  for($a=1; $a<=$sayi; $a++) {
    for($b=1; $b<=$a; $b++) {
      echo $desen;
    }
    echo "<br>";
  }
}

ucgen(35,'O');

?>  

</body>
</html>