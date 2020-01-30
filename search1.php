<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } 

$getData = $_GET['term'];

$query = $mysqli =  query ("select COL2 from auto where COL2 like '%".$getData."%');

 while($row = $query->fetch_assoc()) {
   $data [] =  $row['COL2'];
 }
 echo json_encode($data);

?>