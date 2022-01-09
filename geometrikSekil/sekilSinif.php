<?php

// Bu çalışmada farklı geometrik şekillerin çevre ve alanlarını hesapladık.

abstract class Sekil{
    public $alan;
    public $cevre;

    abstract public function alan($num1,$num2=null);
    abstract public function cevre($num1,$num2=null,$num3=null);

    public function goruntule(){
        echo '<br>Alan: '.$this->alan;
        echo '<br>Çevre: '.$this->cevre;
    }

}

class Ucgen extends Sekil{
    public function alan($num1,$num2=null){
        $this->alan = ($num1*$num2)/2;        
    }

    public function cevre($num1,$num2=null,$num3=null){
        $this->cevre = $num1+$num2+$num3;
    }
}

class Dikdortgen extends Sekil{
    public function alan($num1,$num2=null){
        $this->alan = $num1*$num2;        
    }

    public function cevre($num1,$num2=null,$num3=null){
        $this->cevre = $num1*2+$num2*2;
    }
}

class Kare extends Sekil{
    public function alan($num1,$num2=null){
        $this->alan = $num1*$num1;        
    }

    public function cevre($num1,$num2=null,$num3=null){
        $this->cevre = $num1*4;
    }
}

$ucgen = new Ucgen();
echo 'Üçgen';
$ucgen->alan(3,4);
$ucgen->cevre(3,4,5);
$ucgen->goruntule();

$dikdortgen = new Dikdortgen();
echo '<br>Dikdörtgen';
$dikdortgen->alan(5,6);
$dikdortgen->cevre(5,6);
$dikdortgen->goruntule();

$kare = new Kare();
echo '<br>Kare';
$kare->alan(5);
$kare->cevre(5);
$kare->goruntule();




