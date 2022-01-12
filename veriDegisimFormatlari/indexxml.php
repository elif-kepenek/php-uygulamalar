<?php

// header('Content-type: apllication/xml charset="utf8"');

// $xml = new SimpleXMLElement('<kisiler>');

// $kisi = $xml->addChild('kisi');
//         $kisi->addChild('isim','İsim Bilgisi');
//         $kisi->addChild('soyisim','Soyisim Bilgisi');
//         $kisi->addChild('yas','Yaş Bilgisi');
// echo $xml->asXML();


$kisiler = simplexml_load_file('./xml.xml');
echo '<pre>';
print_r($kisiler);