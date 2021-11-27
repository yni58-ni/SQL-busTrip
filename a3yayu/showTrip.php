<!DOCTYPE html>
<html>
<body>
<?php
include'connecttodb.php';
?>
<h1>Here is the trip you selected:</h1>
<ol>
<?php
$whichtrip =$_POST["picktrip"]; //get selected trip value from the form
$query = 'SELECT * FROM bustrip WHERE tripid= "'.$whichtrip.'"'; //fill in with correct query
$result = mysqli_query($connection, $query);
if (!$result) {
die("databases query on trip failed. ");
}
echo "<ul>"; //put the artwork in an unordered bulleted list 
 while ($row = mysqli_fetch_assoc($result)) {
 echo "<li>".$row[tripid]." - " .$row[tripname]." - ".$row[startdate]." - ".$row[enddate]." - ".$row[country]." - ".$row[assignedbus]." - ".$row[urlImage]. "</li>";
 echo '<img src="'.$row[urlImage].'"height ="60" width="60">';
}
echo "</ul>"; //end the bulleted list
mysqli_free_result($result);
?>
</ol>
</body>
</html>
