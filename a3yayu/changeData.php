<!DOCTYPE html>
<html>
<body>
<?php
include'connecttodb.php';
?>
<h1>Here is your updated data:</h1>
<ol>
<?php
$whichName=$_POST["tripname"];
$whichStart=$_POST["startdate"];
$whichEnd=$_POST["enddate"];
$whichTrip=$_POST["tripid"];
$whichPic =$_POST["urlImage"];
$query='UPDATE bustrip SET tripname= "'.$whichName.'", startdate= "'.$whichStart.'", enddate= "'.$whichEnd.'", urlImage ="'.$whichPic.'" WHERE tripid='.$whichTrip.';';
echo $query;
$result=mysqli_query($connection,$query);
if(!$result){
die("database fialed.");
}
echo "Your trip is updated!";
mysqli_close($connection);
?>
</ol>
</boday>
</html>
