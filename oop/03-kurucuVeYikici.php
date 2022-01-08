<?php

// Çalıştırmasak dahi ilk çalışan metodumuz __construct() son çalışan metodumuz __destruct() olacak.

class User{

    public function __construct(){
        echo 'Yapıcı metot çalıştı.<br>'; // Database bağlantısı başlatılabir. 
    }

    public function __destruct(){
        echo 'Yıkıcı metot çalıştı.<br>'; // Database bağlantısı sonlandırılabilir.
    }

    public function yaz(){
        echo 'Deneme<br>';
    }
}

$user = new User();
echo $user->yaz();
