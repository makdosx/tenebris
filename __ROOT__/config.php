<?php


class data
    {

    public $connect = array();

    public function __construct()
        {
         $this->connect[0]="localhost";
         $this->connect[1]="tenebris";
         $this->connect[2]="tenebris";
         $this->connect[3]="tenebris";
           }

      public function __destruct()
        {
         $this->connect[0]=null;
         $this->connect[1]=null;
         $this->connect[2]=null;
         $this->connect[3]=null;
           }

      } // end of coonect class
  



   class security extends data
       { 


        public $connect = array();
        public function __construct()
           {

         $this->connect[0]="localhost";
         $this->connect[1]="tenebris";
         $this->connect[2]="tenebris";
         $this->connect[3]="tenebris";

         } // end of class extends of connect with parent and child

 
       public function __destruct()
        {
         $this->connect[0]=null;
         $this->connect[1]=null;
         $this->connect[2]=null;
         $this->connect[3]=null;
           }


         } // end of class
          


?>
