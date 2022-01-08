<?php

class Islem{
    public $num1;
    public $num2;

    public $toplama;
    public $cikarma;
    public $carpma;
    public $bolme;

    public function toplama(){
        $this->toplama = $this->num1 + $this->num2;
        return $this;
    }

    public function cikarma(){
        $this->cikarma = $this->num1 - $this->num2;
        return $this;
    }

    public function carpma(){
        $this->carpma = $this->num1 * $this->num2;
        return $this;
    }
    public function bolme(){
        $this->bolme = $this->num1 / $this->num2;
        return $this;
    }

    function goster(){
        echo $this->toplama . '<br>';
        echo $this->cikarma . '<br>';
        echo $this->carpma . '<br>';
        echo $this->bolme . '<br>';
    }
}

$islem = new Islem();
$islem->num1 = 100;
$islem->num2 = 20;
echo $islem->toplama()->cikarma()->carpma()->bolme()->goster();

