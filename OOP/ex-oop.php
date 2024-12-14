<?php

class Uesrs
{
    public $username;
    public $password;
    public $db_username = "huyPham";
    public $db_password = "1234567";


    public function setInfo($name, $pass)
    {
        echo  $this->username = $name;
        echo "<br>";
        echo  $this->password = $pass;
        echo "<br>";
    }

    public function checkLogin()
    {
        echo ($this->db_username === $this->username && $this->db_password === $this->password) ? "Xinh  chào " . $this->username : "User không tồn tại trên hệ thống";
    }
}
$users = new Uesrs;

$users->setInfo("huyPham", "1234567");
$users->checkLogin();
