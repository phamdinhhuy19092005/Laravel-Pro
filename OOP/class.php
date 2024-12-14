<?php
class Hinhchunhat {

    public $dai;
    public $rong;

    public function __construct()
    {
        $this->dai = 30;
        $this->rong = 20;
    }

    public function dientich(){
        return 2*($this->dai + $this->rong);
    }

    public function chuvi(){
        return $this->dai + $this->rong;
    }
}


$hinhcn = new Hinhchunhat();

echo "Diện tích hình chữ nhật" . $hinhcn->dientich();
echo "<br>";
echo "Chu vi hình chữ nhật" . $hinhcn->chuvi();
