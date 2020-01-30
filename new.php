
<html>
   <input type="text" size="30" value="" class="autoupdate" name="field1" />
   <br></br>
   
<input type="text" size="30" value="" class="autoupdate" name="field2" />    
<br></br>
<input type="text" size="30" value="" class="autoupdate" name="field3" />

<script src="http://code.jquery.com/jquery-3.2.1.min.js" ></script>
        <script type="text/javascript">
		
<script type="text/javascript">
    var searchResults=[];
    function lookup(inputString) 
    {
        if(inputString.length == 0) 
        {
            // Hide the suggestion box.
            $('#suggestions').hide();
        }
        else if(searchResults[inputString])
        {
           $('#suggestions').show();
           $('#autoSuggestionsList').html(searchResults[inputString]);
        }
        {

            $.post("bb1.php", {queryString: ""+inputString+""}, function(data)
            {
                if(data.length >0) 
                {
                    $('#suggestions').show();
                    $('#autoSuggestionsList').html(data);
                }
            });
        }
    } // lookup

    function fill(thisValue) 
    {
        $('#inputString').val(thisValue);
        setTimeout("$('#suggestions').hide();", 200);
    }

</script>
</html>