<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizi</title>
</head>
<body>
    
<?php 
    
    $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

echo '<pre>';
print_r($planets);

 function islem($planets, $sayi){
     echo "<pre>";
     $sonuc = array_map(function($q){
         if(($q!="") && ($q!=NULL)){
             return $q;
         }
        },$planets);
     $sonuc=array_filter( $sonuc, 'strlen' );
     shuffle($sonuc);
     $sonuc = array_slice($sonuc,0,$sayi);
     print_r($sonuc);
 }

 print_r(islem($planets, 2));
 print_r(islem($planets, 3));
 print_r(islem($planets, 4));
 print_r(islem($planets, 5));
 print_r(islem($planets, 6));

?>

</body>
</html>