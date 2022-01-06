<?php
session_start();
include 'fonksiyon/helper.php';

$user = [
    'elif' => [
        'password'=>'123456',
        'eposta'=>'elif@elif.com'
    ]
];

if (get('islem') == 'giris') {

    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');

    if(!post('username')){
        $_SESSION['error'] = 'Lütfen kullanıcı adınızı giriniz.';
        header('Location:login.php');
        exit();
    }
    if(!post('password')){
        $_SESSION['error'] = 'Lütfen kullanıcı şifrenizi giriniz.';
        header('Location:login.php');
        exit();
    } else {
        if(array_key_exists(post('username'),$user)){
            if($user[post('username')]['password'] == post('password')){

                $_SESSION['login'] = true;
                $_SESSION['kullanici_adi'] = post('username');
                $_SESSION['e-posta'] = $user[post('username')]['eposta'];
                header('Location:index.php');
                exit();

            } else {
                $_SESSION['error'] = 'Kayıtlı kullanıcı bulunamadı.';
                header('Location:login.php');
                exit();
            }
        } else {
            $_SESSION['error'] = 'Kayıtlı kullanıcı bulunamadı.';
            header('Location:login.php');
            exit();
        }
    }
}

if (get('islem') == 'hakkimda') {
    $hakkimda = post('hakkimda');
    file_put_contents('./db/'.session('kullanici_adi').'.txt',htmlspecialchars($hakkimda));
    header('Location:index.php?islem=true');
}else{
    header('Location:index.php?islem=false');

}

if (get('islem') == 'cikis'){
    session_destroy();
    session_start();
    $_SESSION['error'] = 'Oturum sonlandırıldı.';
    header('Location:login.php');
}

if (get('islem') == 'renk'){
    echo 'renk';
    // echo get('color');
    // setcookie('color',get('color'), time() + (86400 * 360));
    // echo '<pre>';
    // print_r($_SERVER);
}