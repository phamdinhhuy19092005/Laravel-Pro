<?php

class Demo
{
    public $a;
    private $b;
    protected $c;
}

class A extends Demo
{
    public function __construct()
    {
        $this->a = 10;
        $this->b = 'Không dùng được ngoài class';
       echo $this->c = 30; // chỉ được dùng trong lớp kế thừa 
    }
}

$a = new A;

echo $a->a;
echo $a->b;
