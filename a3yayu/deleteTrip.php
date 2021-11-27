<!DOCTYPE html>
<html>
<body>
<?php
include'connecttodb.php';
?>
<?php
$whichTrip=$_POST["tripid"];
$query='DELETE FROM bustrip WHERE tripid= "'.$whichTrip.'";';
$result=mysqli_query($connection,$query);
if(!$result){
	die("trip cannot be deleted, because it has been booked.");
}
echo "Trip is deleted!";
mysqli_close($connection);
?>
</body>
</html>

