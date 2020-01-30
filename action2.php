<?php
  $conn = new mysqli("localhost","root","","test");
  if($conn->connect_error){
    die("Failed to connect!".$conn->connect_error);
  }
  if(isset($_POST['query'])){
    $inpText = $_POST['query'];
    $query = "SELECT 단지 FROM autoxx WHERE 단지 LIKE '%$inpText%'";
    $result = $conn->query($query);
    if($result->num_rows>0){
      while($row = $result->fetch_assoc()){
        echo '<a href="#" class="list-group-item list-group-item-action border-2">'.$row['단지'].'</a>';
      }
    }
    else{
      echo '<div class="list-group2">No Record</p>';
    }
  }
?>