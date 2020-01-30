<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="autocomplete-0.3.0.js"></script>
 
 
 <script> 
 
   jQuery(function(){ 
   $("#search").autocomplete({
	 source: "searchaa2.php";
 });
  });
  
 </script>
 

		<meta charset="UTF-8">
        <form action="insert.php" method="POST" style="width:500px;">
		
             <table>
				<tr> <td>코드</td> 
                <td> <input type="int" name = "AA" id = "search" </td> 
				</tr>
				<tr> <td>동주소</td> 
                <td> <input type="text" name = "BB"</td> 
				</tr>
				<tr> <td>단지</td> 
                <td> <input type="text" name = "CC"</td> 
				</tr>
				<tr> <td>동수</td> 
                <td> <input type="int" name = "DD"</td> 
				</tr>
                
				<tr>
                <td> <input type="submit" name = "submit" value="ADD"</td> 
				</tr>
             </table>
			 </form>
			 
 </html>