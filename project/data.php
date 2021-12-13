<?php
class Numbers
{
   public function __construct(){
       $this->number = '';
       for($i = 0; $i < 16 ; $i++) $this->number .= strval(rand(0,9));
   }

   public function getData(){
       return $this->number;
   }

   public function isHappy($data){
       $left = 0 ;
       $right = 0;
       for($i = 0; $i < 3 ; $i++)
       {
        $left += intval($data[$i]);
        $right += intval($data[15 - $i]);
       }
       $equel = ($left == $right);
       return $equel == $_POST['vote'];
   }
}
?>