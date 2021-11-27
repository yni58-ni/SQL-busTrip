<!DOCTYPE html>
<html>
<body>
<?php
include'connecttodb.php';
?>
<?php
$whichPpl=$_POST['people'];
$query="SELECT * FROM booking,bustrip,passenger WHERE booking.passengerid=$whichPpl AND booking.tripid=bustrip.tripid GROUP BY tripname;";
$result=mysqli_query($connection,$query);
if(!$result){
 die("Error while trying to view booking".mysqli_error($connection));
}
echo "<ul>";
while($row=mysqli_fetch_assoc($result)){
echo "<li>".$row[tripname]."</li>";
}
echo "</ul>";
?>
</body>
</html>
