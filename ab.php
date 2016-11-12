<!DOCTYPE html>
<html>
<head>
	<title>Workshop || Tarif</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

</head>
<body>
<div class = "container">
	<h2>Data Collection</h2><br>
    <?php
    if(!empty($_GET['meg'])){
        echo $_GET['meg'];
    }
    
     ?>

    <form class = "form-horizontal" action="data.php" method="POST">
    	<div class = "form-group">
        <label class = "control-label col-md-2" for = "name">Name:</label>
        <div class = "col-md-6">
        	<input type = "text" name = "name" class = "form-control" placeholder = "Enter Your Full Name" required>
        </div>
    	</div>

    	<div class = "form-group">
        <label class = "control-label col-md-2" for = "name">Email:</label>
        <div class = "col-md-6">
        	<input type = "text" name = "email" class = "form-control" placeholder = "someone@example.com" required>
        </div>
    	</div>

    	<div class = "form-group">
        <label class = "control-label col-md-2" for = "name">Dept:</label>
        <div class = "col-md-6">
        	<input type = "text" name = "dept" class = "form-control" placeholder = "E.g. CSE , PME" required>
        </div>
    	</div>

    	<div class = "form-group">
        <label class = "control-label col-md-2" for = "name">Reg:</label>
        <div class = "col-md-6">
        	<input type = "text" name = "reg" class = "form-control" placeholder = "201X331XXX" required>
        </div>
    	</div>
    	<div class = "form-group">
    		
    		<div class = "col-sm-offset-2 col-md-6">
    			<button type = "submit" class ="btn btn-primary">Submit</button>
    		</div>
    	</div>


    	
  

  
</form>
</div>


</body>
</html>







