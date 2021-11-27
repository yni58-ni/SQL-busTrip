<!DOCTYPE html>
<html>
<body>
<?php
include"connecttodb.php";
?>
<?php
$ppl=$_POST['person'];
$trip=$_POST['newTrip'];
$query='DELETE FROM booking WHERE tripid='.$trip.' AND passengerid='.$ppl.';';
echo $query;
$result=mysqli_query($connection,$query);
if(!$result){
die("database query on deleting booking failed.".mysqli_error($connection));
}else{
echo "Booking is deleted!";
exit;
}
?>

