<?php
   class myclass {
   
      /* Member variables */
      static int $var1 = 0;
      public static function mystaticmethod() {
         echo "This is a static method".  PHP_EOL;
      }
      public function myinstancemethod() {
         echo "This is an instance method".  PHP_EOL;  
         echo "calling static method from instance method" . PHP_EOL;
         //self method 
         self::mystaticmethod();
      }
   }

   $obj = new myclass;
   $obj->myinstancemethod();

