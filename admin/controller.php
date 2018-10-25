<?php
  include("model.php");
  class controller
  {
      public function delete($del)
      {
         $obj=new model();
         $obj->delete($del);
      }
  } 

?>