<?php
  $conn = new mysqli("localhost","root","","test");
  if($conn->connect_error){
    die("Failed to connect!".$conn->connect_error);
  }
  if(isset($_POST['query'])){
    $inpText = $_POST['query'];
    $query = "SELECT 동주소 FROM autoxx WHERE 동주소 LIKE '%$inpText%'";
    $result = $conn->query($query);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        echo '<a href="#" class="form-control form-control-lg rounded-0 border-info1">'.$row['동주소'].'</a>';
      }
    }
    else{
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>