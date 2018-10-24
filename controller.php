<?php
  include("model.php");
  class controller
  {
    public function con_register($name,$subject,$phone,$email,$message)
    {
      $ins=new model;
      
        $register = $ins->contact($name,$subject,$phone,$email,$message);  
        if($register)
        {  
             echo "<script>alert('Registration Successful')</script>";  
             header("location:contact.php");
        }
        else
        {  
            echo "<script>alert('Registration Not Successful')</script>";  
        }
      }
  } 

?>