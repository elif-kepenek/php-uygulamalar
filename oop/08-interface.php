<?php

interface A{
    public function a();
    public function b();
}

// interface başka bir interface'den kalıtım yoluyla kullanılabilir.

interface B{
    public function c();
    public function d();
}

// abstract sınıflarda sadece bir tane sınıftan kalıtım yoluyla alabiliyoruz interface ile birden fazla sınıftan kalıtım yoluyla ulaşabiliriz.

class C implements A,B{
    public function a(){}
    public function b(){}
    public function c(){}
    public function d(){}
}