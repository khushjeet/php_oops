<?php
class ConstantClass{
    const x = 10;
    private const y=20;
}

$obj = new ConstantClass;

echo "Value of Constant x=" . ConstantClass::x;
//echo "Value Of Y". ConstantClass::y;

