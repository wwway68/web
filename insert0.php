 
 <?php

$conn=mysqli_connect("localhost", "root", "", "test");
$sql =mysqli_query($conn, "insert into autoxx (코드, 단지명, 단지, 동수) values ('aa', 'bb', 'cc', 'dd')");

if(mysqli_connect_errno($conn)){
	echo "connect failed";
   }
  else {
	  echo "connected";
	  }
	


?>