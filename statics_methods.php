<?php
   class myclass {
   
      /* Member variables */
      static int $var1 = 0;
      public static function mystaticmethod() {
         echo "This is a static method".  PHP_EOL;
      }
      public function myinstancemethod() {
         echo "This is an instance method".  PHP_EOL;
      }
   }

   myclass::mystaticmethod();
   $obj = new myclass;
   $obj->myinstancemethod();
   $obj->mystaticmethod();
   //myclass::myinstancemethod();
