<?php


  class OldConstructorClass{
    public function __construct(){
        echo "This Is From Old Constructor Class Or Parent Constructor Class ".PHP_EOL;
    }
  }
    class NewConstructorClass extends OldConstructorClass{
    public function __construct(){
            parent::__construct();
            echo "This is from the new Class" .PHP_EOL;
        }
    } 


    $obj1 = new NewConstructorClass();

    class myclass{
        public function __construct(){
           echo "This is parent constructor". PHP_EOL;
        }
     }
     class newclass1 extends myclass {
        public function __construct(){
           parent::__construct();
           echo "This is child class destructor" . PHP_EOL;
        }
     }
     $obj = new newclass1();
  
  
  