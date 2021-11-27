<!DOCTYPE html>
<html>
<body>
<?php
include'connecttodb.php';
?>
<h1>Here is your:</h1>
<ol>
<?php
$whichId=$_POST["tripid"];
$whichName=$_POST["tripname"];
$start=$_POST["startdate"];
$end=$_POST["enddate"];
$country=$_POST["country"];
$url=$_POST["urlImage"];
$bus=$_POST["picktrip"];
$query='INSERT INTO bustrip VALUES("'.$whichId.'","'.$whichName.'","'.$start.'","'.$end.'","'.$country.'","'.$bus.'","'.$url.'");';
echo $query;
if(!mysqli_query($connection,$query)){
  die("Error while trying to add new trip".mysqli_error($connection));
}else{
  echo "Trip is added!";
}
?>
