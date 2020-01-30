<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Autocomplete textbox using jQuery, PHP and MySQL</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <style>  
           ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:12px;  
           }  
           </style>  
      </head>  
      <body>  
           <br /><br />  
	  
		<meta charset="UTF-8">
        <form action="insert.php" method="POST" style="width:500px;">
		
             <table>
				<tr> <td>코드</td> 
                <td> <input type="int" name = "AA"</td> 
				</tr>
				
				<tr> <td>동주소</td> 
                <td>  <input type="text" name="BB" id="BB" class="form-control" placeholder="법정동주소" />  </td> 
				</tr>
				<div id="BBList"></div> 
				
				<tr> <td>단지</td> 
                <td> <input type="text" name="CC" id="CC" class="form-control" placeholder="단지명" /> </td> 
				<div id="CCList"></div> 
					
				</tr> <td>동번호</td> 
				<td> <input type="text" name="DD" id="DD" class="form-control" placeholder="동번호" /> </td> 
                <td> <input type="int" name = "DD"</td> 
				</tr>
                <div id="DDList"></div> 
					
				<tr>
                <td> <input type="submit" name = "submit" value="ADD"</td> 
				</tr>
             </table>
			 </form>
			 

           <div class="container" style="width:500px;">  
                <h3 align="center">Autocomplete textbox using jQuery, PHP and MySQL</h3><br />  
                <label>Enter BB Name</label>  
                <input type="text" name="BB" id="BB" class="form-control" placeholder="Enter BB Name" />  
                 
           </div>  
      </body>  
 </html>  
 
 
  <script>  
 $(document).ready(function(){  
      $('#BB').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"searchaa1.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#BBList').fadeIn();  
                          $('#BBList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#BB').val($(this).text());  
           $('#BBList').fadeOut();  
      });  
 });  
 
  
 $(document).ready(function(){  
      $('#CC').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"searchaa2.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#CCList').fadeIn();  
                          $('#CCList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#CC').val($(this).text());  
           $('#CCList').fadeOut();  
      });  
 });  
 </script>  
 