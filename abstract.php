<?php
abstract class MainClass{
    protected int $m1,$m2,$m3,$m4,$m5;
    abstract public function percent():float;

}

class Second extends MainClass{
    public function __construct($x1,$x2,$x3,$x4,$x5) {
        $this->m1=$x1;
        $this->m2=$x2;
        $this->m3=$x3;
        $this->m4=$x4;
        $this->m5=$x5;
    }
    public function percent(): float{
        return ($this->m1 + $this->m2 + $this->m3 + $this->m4 + $this->m5) * 100/500;
    }
}

$obj2 = new Second(10,20,30,40,51);
echo "Percentage of All the Marks = ".$obj2->percent()."";