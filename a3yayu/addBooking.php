<?php
include'connecttodb.php';
$trip=$_POST['newTrip'];
$whichPpl=$_POST['ppl'];
$whichPrice=$_POST['price'];
$query='INSERT INTO booking VALUES("'.$whichPpl.'","'.$trip.'",'.$whichPrice.');';
echo $query;
if(!mysqli_query($connection,$query)){
die("Error while trying to add new booking".mysqli_error($connection));
}else{
echo "Booking was added.";
}
?>
