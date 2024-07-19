<?php
class Books{
    var $price;
    var $title;

    //member function

    function setPrice($pri){
        $this->price = $pri;
}
function get_price(){
    echo $this->price;
}

function set_title($tit){
    $this->title = $tit;
}

function get_title(){
    echo $this->title . "<br/>";
}
}


$physics = new Books();
$math = new Books();


$physics->setPrice(20);
$physics->set_title("ElectroMagnetics");

$math->setPrice(30);
$math->set_title("This is from Maths");

$math->get_price();
$math->get_title();


$physics->get_price();
$physics->get_title();

