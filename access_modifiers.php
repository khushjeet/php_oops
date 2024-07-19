<?php
class BankAccount
{
    //  public  $id;

    private $id;

    public $name;

    public $email;

    function __construct(int $id = 11, string $name = "Amit", $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    public function getData()
    {
        echo "Id=" . $this->id . "Name" . $this->name . "" . $this->email . "";
    }

}

$amit = new BankAccount(12, "amit", "amt@gmail.com");
$amit->getData();
echo $amit->$id;


   class Book {
      private $price;
      protected $title;
      function __construct(string $param1="PHP Basics", int $param2=380) {
         $this->title = $param1;
         $this->price = $param2;
      }
      public function getPrice(){
         echo "Price: $this->price <br/>";
      }
      public function getTitle(){
         echo "Title: $this->title <br/>";
      }
   }
   class mybook {
      public function getmytitle($b) {
         echo "Title: $b->title <br/>";
      }
   }
   $b1 = new mybook();
   $b = new Book();
   $b1->getmytitle($b);
