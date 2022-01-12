<?php

// $arr = [
//     'isim'=>'İsim Bilgisi',
//     'soyisim'=>'Soyisim Bilgisi',
//     'yas'=>'Yaş Bilgisi',
// ];
// echo json_encode($arr); //Diziyi json formatına döndürür

// $obj = '{
//     "isim": "İsim Bilgisi",
//     "soyisim": "Soyisim Bilgisi",
//     "yas": "Yaş Bilgisi"
//   }';

// $arr1 = json_decode($obj); //Json formatın objecte döndürür.

// echo '<pre>';
// print_r($arr1);
// echo $arr1->isim;
// echo $arr1->soyisim;
// echo $arr1->yas;

// $arr2 = json_decode($obj,true); // Dizi olarak almak istediğimizde 2. parametre true gireriz.
// echo '<pre>';
// print_r($arr2);

$obj = file_get_contents('./json.json');
$arr = json_decode($obj,true);
echo '<pre>';
print_r($arr);