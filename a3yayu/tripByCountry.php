<!DOCTYPE html>
<html>
<body>
<?php
include'connecttodb.php';
?>

<h1>Here is the trip from the country</h1>
<ol>
<?php
$whichTrip=$_POST["name"];
$query= 'SELECT * from bustrip WHERE country= "'.$whichTrip.'";';
$result=mysqli_query($connection,$query);
if(!$result){
die("database query fialed");
}
echo"<ul>";
while($row=mysqli_fetch_assoc($result)){
echo "<li>".$row[tripid]." - " .$row[tripname]." - ".$row[startdate]." - ".$row[enddate]." - ".$row[country]." - ".$row[assignedbus]." - ".$row[urlImage]. "</li>";
}
echo"</ul>";
mysqli_free_result($result);
?>
</ol>
</body>
</html>
