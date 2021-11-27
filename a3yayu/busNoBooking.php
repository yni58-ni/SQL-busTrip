<!DOCTYPE html>
<html>
<body>
<?php
include"connecttodb.php";
?>
<?php
$query='SELECT * FROM bustrip WHERE tripid NOT IN (SELECT bustrip.tripid FROM booking,bustrip WHERE booking.tripid=bustrip.tripid)';
$result=mysqli_query($connection,$query);
if(!$result){
die("database query failed".mysqli_error($connection));
}
echo "<ul>";
while($row=mysqli_fetch_assoc($result)){
echo "<li>".$row[tripid]." - ".$row[tripname]."</li>";
}
echo "</ul>";
mysqli_free_result($result);
?>
</body>
</html>
