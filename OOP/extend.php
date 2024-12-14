<?php

class Xehoi
{
    public $banh;
    public $tocdo;
}


class BMW extends Xehoi
{
    public function __construct()
    {
        $this->banh = 4;
        $this->tocdo = 30 . 'KM/h';
    }
}

$BMW = new BMW;

echo "Xe BMW của bạn có " . $BMW->banh . ' bánh ' . $BMW->tocdo;
