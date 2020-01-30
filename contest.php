<?php

$conn=mysqli_connect("localhost", "root", "", "test");

if(mysqli_connect_errno($conn)){
	echo "connect failed";
   }
  else {
	  echo "connected";
	  }
	

?>