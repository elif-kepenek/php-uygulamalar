<?php

// public: Her yerden erişilebilir.
// private: Sadece sınıf içerisinden erişilebilir.
// protected: Sınıf içerisinden erişlebilir, miras alma yoluyla kullanılabilir.

class User{

    public $ad;
    protected $eposta;
    private $sifre;

    public function getIsım(){
        return $this->ad;
    }

    public function setIsım($ad){
        $this->ad = $ad;
    }

    public function getEposta(){
        return $this->eposta;
    }

    public function setEposta($eposta){
        $this->eposta = $eposta;
    }

    public function getSifre(){
        return $this->sifre;
    }

    public function setSifre($sifre){
        $this->sifre = $sifre;
    }

}

$user = new User();
$user->setIsım('İsim Bilgisi');
$user->setEposta('E-Posta Bilgisi');
$user->setSifre('Şifre Bilgisi');

echo $user->getIsım() . '<br>';
echo $user->getEposta() . '<br>';
echo $user->getSifre() . '<br>';
