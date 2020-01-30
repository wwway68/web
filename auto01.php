<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AutoComplete Search Using Bootstrap 4, PHP, MySQLi & Ajax</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-info">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 bg-light p-4 mt-3 rounded">
        <h4 class="text-center">AutoComplete Search Using Bootstrap 4, PHP, MySQLi & Ajax</h4>
        <hr class="my-1">
        <h5 class="text-center text-secondary">Write any country name in the search box</h5>
		
		
        <form action="details.php" method="post" class="form-inline p-3">
          <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info1" placeholder="Search..." style="width:80%;">
         
		 <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0" style="width:20%;">
        </form>
		</div>
		<div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 315px;">
        <div class="list-group1" id="show-list1">
      
          
        </div>
      </div>
    </div>
  </div>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.js"></script>
  <script>
    $(document).ready(function(){
      $("#search").keyup(function(){
        let searchText = $(this).val();
        if(searchText != ''){
          $.ajax({
            url:'action.php',
            method:'post',
            data:{query:searchText},
            success:function(response){
              $("#show-list1").html(response);
            }
          });
        }
        else{
          $("#show-list1").html('');
        }
      });
      $(document).on('click','a', function(){
        $("#search").val($(this).text());
        $("#show-list1").html('');
      });
    });
  </script>
  
  