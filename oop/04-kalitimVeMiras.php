<?php



class Hash{

    public function md5Hash($string){
        return md5($string).' Hash Class';
    }

    public function sha1Hash($string){
        return sha1($string);
    }

}

class User extends Hash{
    public $username;
    public $password;

    public function saveUser($username, $password){
        $this->username = $username;
        $this->password = $this->md5Hash($password);
        // $this->password = parent::md5Hash($password); //Aynı metotdan bu sınıfımızda da varsa miras alınan sınıfı kullanmak için parent:: sözcüğünü kullanırız.

    }
    
    public function showUser(){
        echo $this->username . '<br>';
        echo $this->password . '<br>';
    }
}

$user = new User();
$user->saveUser('kullanici', '123456');
$user->showUser();