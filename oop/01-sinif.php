<?php

// $this anahtar sözcüğü ile erişebiliriz.


class Urun{

    public $name = 'Kitap';
    public $kdv;
    const FIYAT = 100;

    public function writeName(){
        return $this->name;
    }

    public function hesap($num1,$num2){
        $this->kdv = $num1*$num2/100;
    }
}

class User{
    public $ad;
    public $soyad;
    public $eposta;
    public $telefon;

    public function addUser($ad,$soyad,$eposta,$telefon){
        $this->ad = $ad;
        $this->soyad = $soyad;
        $this->eposta = $eposta;
        $this->telefon = $telefon;
    }
}

$urun = new Urun();
echo $urun->name; //Sınıfı değişkene aktarıp özelliğine erişebilirim.
echo '<br>';
echo $urun->writeName(); //Sınıf içerisindeki metoda erişebilirim.
echo '<br>';
echo Urun::FIYAT; //Sınıf içerisindeki sabite erişeblirim. Bunun için sınıfı başlatmama gerek yok.
echo '<br>';
$urun->hesap(100,18); //Sınıf içerisindeki metoda parametre göndererek ulaştım.
echo $urun->kdv;
echo '<br>';


$user = new User();
$user->addUser('Ad Bilgisi','Soyad Bilgisi','E-Posta Bilgisi','Telefon Bilgisi');
echo 'Ad: ' . $user->ad . '<br>Soyad: ' . $user->soyad . '<br>E-Posta: ' . $user->eposta . '<br>Telefon: ' . $user->telefon;