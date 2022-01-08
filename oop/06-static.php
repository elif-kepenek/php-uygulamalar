<?php

class User{

    public static $ad;
    public $soyad;

    public static function setIsim($ad){
        self::$ad = $ad; // static metotlarda erişebilmek için self:: sözcüğünü kullanırız.
    }

    public static function getIsim(){
        return self::$ad;
    }
}

echo User::$ad = 'Birinci İsim<br>'; //static olduğu için bu şekilde erişebiliriz.
// $user = new User();
// $user->soyad = 'Soyad Bilgisi';
// echo User::$ad;

User::setIsim('Ad Soyad Bilgisi');
echo User::getIsim();