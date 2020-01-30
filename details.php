<?php
  $conn = new mysqli("localhost","root","","test");
  if($conn->connect_error){
    die("Failed to connect!".$conn->connect_error);
  }
  if(isset($_POST['submit'])){
    $data = $_POST['search'];
    $sql = "SELECT * FROM autoxx WHERE 단지명 = '$data'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
 
    echo "ID : ".$row['id']."<br>";
    echo "Country Name : ".$row['동주소']."<br>";
    echo "Country Code : ".$row['단지']."<br>";
    echo "City : ".$row['city']."<br>";
  }
?>