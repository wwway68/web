 
 <?php

if(isset($_POST['submit'])){
$aa=$_POST['date'];
$bb=$_POST['addr'];
$cc=$_POST['addr2'];
$dd=$_POST['comp'];

$conn=mysqli_connect("34.84.28.189", "root", "9425", "test");

$sql = "insert into order111 (코드, 주소, 단지, 동수) values ('$aa', '$bb', '$dd', '$cc')";

 mysqli_query($conn, $sql);
 
if(mysqli_connect_errno($conn)){
	
	echo "connect failed";
   }
  else {
	  
	   header("Location: index.html");
	   echo "입력완료";
	  }
	
}

?>