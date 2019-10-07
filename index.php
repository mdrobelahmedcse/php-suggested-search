<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP suggested search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="row">
    	  <div class="col-md-6 col-md-offset-3">
    	  	  <div class="search-form">
    	  	  	    <h2>Like Google Autocomplete textbox</h2>
                    
					     <div class="form-group">
					      <input type="text" class="form-control" id="country" placeholder="Enter your keyword" name="country">
					       <div id="countrylist">
					    	    
					       </div>
                     
					    </div>
					   
    	  	  </div>
    	  </div>
    </div>
</div>


<script type="text/javascript">
	  $(document).ready(function(){
	  	  $("#country").keyup(function(){
  
                  var query = $(this).val();
	  	           
	  	           if (query != '') 
	  	           {
	  	           	     $.ajax({

	  	           	     	   url:"search.php",
	  	           	     	   method:"POST",
	  	           	     	   data:{query:query},
	  	           	     	   success:function(data)
	  	           	     	   {
	  	           	     	   	   $('#countrylist').fadeIn();
	  	           	     	   	   $('#countrylist').html(data);
	  	           	     	   }
	  	           	     });
	  	           }
	  	           else{

	  	           	   $('#countrylist').fadeOut();
	  	           	   $('#countrylist').html("");
	  	           }
	  	  });

          
          $(document).on('click','li',function(){

          	          $('#countrylist').val($(this).text());
	  	           	  $('#countrylist').fadeOut();
          });

	  });
</script>

</body>
</html>
