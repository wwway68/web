<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
					////////// search in all table columns
					////////// using concat mysql function
    $query = "SELECT * FROM `autoxx` WHERE CONCAT(`코드`, `단지명`, `단지`, `동수`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `autoxx`";
    $search_result = filterTable($query);
}

					//////////////// function to connect and execute the query

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="searchTT.php" method="POST">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>코드</th>
                    <th>단지명</th>
                    <th>단지</th>
                    <th>동수</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><input type="text"> <?php echo $row['코드'];?></td>
                    <td><?php echo $row['단지명'];?></td>
                    <td><?php echo $row['단지'];?></td>
                    <td><?php echo $row['동수'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        
   
	  
</html>

?>