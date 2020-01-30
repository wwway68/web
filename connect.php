 
 <?php

$conn=mysqli_connect("34.69.80.137", "root", "", "test");

if(mysqli_connect_errno($conn)){
	echo "connect failed";
   }
  else {
	  echo "connected";
	  }
	


?>