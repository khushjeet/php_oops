<?php
class Student{

 
    public $id;
    public $name;

    public $email;

    function __destruct(){
        var_dump($this);
        echo "Destructor is Called and Finsing this exection";
    }

    function __construct($id,$name,$email){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    public function getStudent(){
        echo "Id=".$this->id."Name = ".$this->name."Email=" .$this->email;
    }
     
    
}

$khush = new Student(11,"Khush","khush@gmail.com"); 
   

$khush->getStudent();

$jit  = new Student(12,"Jitan","Jitan100@gmail.com");
$jit->getStudent();

