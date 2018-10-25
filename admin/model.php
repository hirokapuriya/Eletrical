<?php
  include('connection/connection.php');
  class model
  {
  	public function delete($del)
    {
      global $con;
      $execute_delete = mysqli_query($con,"delete from contact where id='$del'");

      return $execute_delete;
    }
  }

?>