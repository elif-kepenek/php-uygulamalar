<?php

class Bir{

    final public function metotBir(){
        echo 'Metot Bir';
    }

}

/*final*/ class Iki extends Bir{ //final ile tanımlandığında bir daha kalıtım yoluyla kullanılamaz.

    public function metotIki(){
        echo 'Metot İki';
    }

}

class Uc extends Iki{ 

    public function metotUc(){
        echo 'Metot Üç';
    }
}

$uc = new Uc();
$uc->metotBir();
$uc->metotIki();
$uc->metotUc();