<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT 주소 FROM auto1 WHERE 주소 LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
	  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["주소"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>......</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  