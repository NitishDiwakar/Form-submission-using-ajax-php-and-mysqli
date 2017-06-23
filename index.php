<?php  
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ajax</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <div class="jumbotron">
  	<center><h1>Ajax form submission</h1></center>
  </div> <!-- end jumbotron -->
  	<div class="row">
  		<div class="col-sm-3"></div>
  		<div class="col-sm-6">
  			<div id="form-content">
			     <form method="post" action="" id="reg-form" autocomplete="off">
			   
					 <div class="form-group">
					 <input type="text" class="form-control" name="txt_fname" id="lname" placeholder="Name" required />
					 </div>
					    
					 <div class="form-group">
					 <input type="email" class="form-control" name="txt_email" id="lname" placeholder="Email" required />
					 </div>
					    	    
					 <hr />
					    
					 <div class="form-group">
					 <button type="submit" class="btn btn-primary">Submit</button>
					 </div>
			    
			    </form>     
			</div>
  		</div>
  		<div class="col-sm-3"></div>
  	</div>
  </div> <!-- end container -->

<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'submit.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});
});
</script>
</body>
</html>