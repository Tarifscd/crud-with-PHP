<?php require('dbconfig.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Workshop || Tarif</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

</head>
<body>
<!--getting data from database start-->
<?php
    $sql = "SELECT *FROM info";
    $result = $conn->query($sql);
?>
<div class = "container">
	<h2>All Student Data</h2><br>
	<a class = "btn btn-success" href="ab.php">ADD</a>

	<table class = "table">
     <thead>
     	<tr>
     		<th>Name</th>
     		<th>Email</th>
     		<th>Department</th>
     		<th>Registration No.</th>
     	</tr>
     </thead>
     <tbody>
     	<!--getting data from database start-->
<?php
    $sql = "SELECT *FROM info";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
    		echo '<tr class = "danger">
                  <td>'.$row["name"].'</td>
                  <td>'.$row["email"].'</td>
                  <td>'.$row["dept"].'</td>
                  <td>'.$row["reg"].'</td>
    		</tr>';
    	}
    }
    else {
    	echo "0 result";
    }
    $conn->close();
?>
     </tbody>
	</table>
  
</div>


</body>
</html>







