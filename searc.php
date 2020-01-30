<?php  

 $connect = mysqli_connect("localhost", "root", "", "test");  
 
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * INTO XXX FROM auto1 WHERE 주소 LIKE '%".$_POST["query"]."%'"; 
	  $result = mysqli_query($connect, $query);  	  
	  
 }
 ?>  