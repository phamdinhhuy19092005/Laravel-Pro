<!-- Giúp chúng ta truy xuất các thuộc tính 
, phương thức trong 1 lớp mà không cần khởi tạo
-->

<?php

class hinhchunhat
{
    public static $dai;
    public static $rong;

    public static function chuvi()
    {
        return 2 * (self::$dai + self::$rong);
    }
}


echo hinhchunhat::$dai = 20;
echo "<br>";
echo hinhchunhat::$rong = 15;
echo "<br>";
echo "Chu vi hình chữ nhật là: " .  hinhchunhat::chuvi();
echo "<br>";

// 1 cách sử dụng khác
class Demo
{
    public function __construct()
    {
        echo hinhchunhat::$dai = 50;
        echo hinhchunhat::$rong = 30;

        echo hinhchunhat::chuvi();
    }
}

new Demo;

?>