<?php
  $hostname="localhost";
  $username="root";
  $password="";
  $db_name="Eletrical";
  
  $con=mysqli_connect($hostname,$username,$password,$db_name);
  if(!$con)
  {
    echo "database could not connected".mysqli_error();
  }
?>