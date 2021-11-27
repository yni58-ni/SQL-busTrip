<!DOCTYPE html>
<html>
<body>
<?php
include'connecttodb.php';
?>
<h1>Here is the information about passenger</h1>
<ol>
<?php
        $query="SELECT * FROM passenger,passport WHERE passenger.passengerid =passport.passengerid ORDER BY passenger.lastname;";
        $result= mysqli_query($connection,$query);
        if(!$result){
         die("database query failed.");
        }
        while($row=mysqli_fetch_assoc($result)){
         echo "<li>";
         echo $row['passengerid'].' - '.$row['firstname'].' - '.$row['lastname'].' - '.$row['passportnum'].' - '.$row['citizenshipcountry'].' - '.$row['expireydate'].' - '.$row['birthdate'];
        }
        mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
?>
</body>
</html>

