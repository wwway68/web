<html>
    <head>
        <title>jQuery Autocomplete</title>
        <style type="text/css">
            ul {
                float: left;
                list-style: none;
                padding: 0px;
                border: 1px solid black;
                margin-top: 2px;
            }

            input, ul {
                width: 250px;
            }

            li:hover {
                color: silver;
                background: #0088cc;
				}
				
			li2:hover {
                color: silver;
                background: #0088cc;
            }
        </style>
    </head>
	
    <body>
        <input type="text" placeholder="Search Query..." id="searchBox">
        <div id="response"></div>
		<br></br>
					
		<input type="text" placeholder="Search Query..." id="searchBox2">
        <div id="response2"></div>
		
		
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" ></script>
        <script type="text/javascript">
		
		<script>
		
            $(document).ready(function () {
                $("#searchBox").keyup(function () {
                    var query = $("#searchBox").val();

                    if (query.length > 0) {
                        $.ajax(
                            {
                                url: 'bb1.php',
                                method: 'POST',
                                data: {
                                    search: 1,
                                    q: query
                                },
                                success: function (data) {
                                    $("#response").html(data);
                                },
                                dataType: 'text'
                            }
                        );
                    }
                });

                $(document).on('click', 'li', function () {
                    var country = $(this).text();
                    $("#searchBox").val(country);
                    $("#response").html("");
                });
            });
        </script>
		
	
		
    </body>
</html>