<?php

// abstract sınıf kullanılarak miras yoluyla oluşturulan sınıflar da aynı fonksiyonları içermelidir.

abstract class Urun{

    public $urunAdi;
    public $urunFiyat;
    public $urunVergi;

    abstract public function urunAdi($urunAdi);
    abstract public function urunFiyat($urunFiyat);
    abstract public function urunVergi($urunVergi);

    public function urunEkle(){
        echo '<br>Ürün adı: '.$this->urunAdi;
        echo '<br>Ürün fiyatı: '.$this->urunFiyat;
        echo '<br>Ürün vergisi: '.$this->urunVergi;
    }

}

class Icecek extends Urun{

    public function urunAdi($urunAdi){
        $this->urunAdi = $urunAdi;
    }

    public function urunFiyat($urunFiyat){
        $this->urunFiyat = $urunFiyat;
    }

    public function urunVergi($urunVergi){
        $this->urunVergi = $urunVergi;
    }
}

class Tekstil extends Urun{
    public function urunAdi($urunAdi){
        $this->urunAdi = $urunAdi;
    }

    public function urunFiyat($urunFiyat){
        $this->urunFiyat = $urunFiyat;
    }

    public function urunVergi($urunVergi){
        $this->urunVergi = $urunVergi;
    }
}


$icecek = new Icecek();
$icecek->urunAdi('Ürün Ad Bilgisi');
$icecek->urunFiyat('Ürün Fiyat Bilgisi');
$icecek->urunVergi('Ürün Vergi Bilgisi');
$icecek->urunEkle();

$tekstil = new Tekstil();
$tekstil->urunAdi('Ürün Ad Bilgisi');
$tekstil->urunFiyat('Ürün Fiyat Bilgisi');
$tekstil->urunVergi('Ürün Vergi Bilgisi');
$tekstil->urunEkle();
