<?php

class Demo
{
    public $att_1;
    public function setValue($value)
    {
        return $this->att_1 = $value;
    }

    public function getValue(){
        return $this->att_1;
    }
}

$demo = new Demo;
echo "Set: " . $demo->setValue(19);
echo "<br>";
echo "Get: " . $demo->getValue();
