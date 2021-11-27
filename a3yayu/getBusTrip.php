<!DOCTYPE html>
<html>
<body>
<?php
	include'connecttodb.php';
?>
<h1>Here are your bus trips:</h1>
<ol>
<?php
	$whichGroup = $_POST["order"];
	$whichOrder = $_POST["sort"];
	$query='SELECT* FROM bustrip ORDER BY '.$whichGroup.' '.$whichOrder.'';
	echo $query;
	$result= mysqli_query($connection,$query);
	if(!$result){
	 die("database query failed.");
	}
	while($row = mysqli_fetch_assoc($result)){
	 echo "<li>";
	 echo $row['tripid'].' - '.$row['tripname'].' - '.$row['startdate'].' - '.$row['enddate'].' - '.$row['country'].' - '.$row['assignedbus'].' - '.$row['urlImage'];
}
	mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>
