<!DOCTYPE html>
<html>
<body>
<h1>Bus Trip Website</h1>

<?php
	include"connecttodb.php";// connect to the database
?>

<h2>List Bus Trip</h2>
<p>Select your order type:</p>
<form action ="getBusTrip.php" method="POST">
	
	<input type="radio" id="type1" name="order" value="tripname">
	<label for="type1"> Trip Name</label>

	<input type="radio" id="type2" name="order" value="country">
	<label for="type2"> Country</label>

<p>Ascending or Descending?</p>

	<input type="radio" id="type3" name="sort" value="ASC">
	<label for="type3"> Ascending</label>

	<input type="radio" id="type4" name="sort" value="DESC">
	<label for="type4">Descending</label><br>
<input type="submit" value="submit">
</form>

<p>
<hr>
<p>
<h2>Change trip name, start date, end date and image</h2>
Select your bus trip:
<form action="showTrip.php" method="post">
<select name="picktrip" id="picktrip">
 <option value="100">Select Here</option>
<?php
include "getFullTrip.php";// select bus trip based on their id
?>
<input type="submit" value="View trip details"><br>
</select>
</form>

<form action="changeData.php" method="post" enctype="multipart/form-data">
Trip ID:<input type="text" name="tripid"><br>
New Trip Name:<input type="text" name="tripname"><br>
New Start Date:<input type="date" name="startdate"><br>
New End Date:<input type="date" name="enddate"><br>
Image:<input type="text" name="urlImage"><br>
<input type="submit" value="View Updated trip">
</form>

<P>
<hr>
<p>
<h2>Delete a trip</h2>
<form action="deleteTrip.php" method="post">
Trip ID:<input type="text" name="tripid"><br>
<input type="submit" herf="url_to_delete" onclick="return confirm('Are you sure you want to delete this item?');">
</form>

<p>
<hr>
<p>
<h2>Add a new tip</h2>
<form action="addTrip.php" method="post" enctype="multipart/form-data">
Trip ID:<input type="text" name="tripid"><br>
Trip Name:<input type="text" name="tripname"><br>
Start date:<input type="date" name="startdate"><br>
End date:<input type="date" name="enddate"><br>
Country:<input type="text" name="country"><br>
Image:<input type="text" name="urlImage"><br>
Select a bus here:
<select name="picktrip" id="picktrip">
 <option value="CAND123">CAND123</option>
 <option value="UWO1122">UWO1122</option>
 <option value="VAN1111">VAN1111</option>
 <option value="TAXI222">TAXI222</option>
 <option value="VAN2222">VAN2222</option>
 <option value="UWO3311">UWO3311</option>
 <option value="TAXI111">TAXI111</option>
 <option value="TAXI333">TAXI333</option>
</select>
<input type="submit" value="Add a new trip">
</form>

<p>
<hr>
<p>
<h2>View a trip by selecting a country</h2>
<form action="tripByCountry.php" method="post">
Select a country from here:
<select name="name" id="name">
 <option value="1000"> Select here</option>
<?php
include'getFullCountry.php';
?>
<input type="submit" value="view the trip.">
</form>


<p>
<hr>
<p>
<h2>Create a booking for a trip</h2>
<form action="addBooking.php" method="post">
Select a trip here:
<select name="newTrip" id="newTrip">
 <option value="1000"> Select here</option>
<?php
include'getCountry.php';
?>
</select>

Select a passenger here:
<select name="ppl" id="ppl">
 <option value="11">Homer Simpson</option>
 <option value="22">Marge Simpson</option>
 <option value="33">Bart Simpson</option>
 <option value="34">Lisa Simpson</option>
 <option value="35">Maggie Simpson</option>
 <option value="44">Ned Flanders</option>
 <option value="45">Todd Flanders</option>
 <option value="66">Heidi Klum</option>
 <option value="77">Michael Scott</option>
 <option value="78">Dweight Schrute</option>
 <option value="79">Pan Beesly</option>
 <option value="80">Creed Bratton</option>
 <option value="81">Niles Crane</option>
</select>
Trip price:<input type="text" name="price"><br>
<input type="submit" value="Add a new booking">
</form>


<P>
<hr>
<p>
<h2> View information about a passenger</h2>
<form action="getPassenger.php" method="post">
<input type="submit" value="Click here to view">
</form>

<p>
<hr>
<p>
<h2>View booking from a selected passenger</h2>
<form action="getBooking.php" method="post">
Select a passenger here:
<select name="people" id="people">
 <option value="11">Homer Simpson</option>
 <option value="22">Marge Simpson</option>
 <option value="33">Bart Simpson</option>
 <option value="34">Lisa Simpson</option>
 <option value="35">Maggie Simpson</option>
 <option value="44">Ned Flanders</option>
 <option value="45">Todd Flanders</option>
 <option value="66">Heidi Klum</option>
 <option value="77">Michael Scott</option>
 <option value="78">Dweight Schrute</option>
 <option value="79">Pan Beesly</option>
 <option value="80">Creed Bratton</option>
 <option value="81">Niles Crane</option>
</select>	
<input type="submit" value="View their booking">
</form>

<p>
<hr>
<p>
<h2>Delete a booking</h2>
<form action="deleteBooking.php" method="post">
Select a passenger here:
<select name="person" id="person">
 <option value="11">Homer Simpson</option>
 <option value="22">Marge Simpson</option>
 <option value="33">Bart Simpson</option>
 <option value="34">Lisa Simpson</option>
 <option value="35">Maggie Simpson</option>
 <option value="44">Ned Flanders</option>
 <option value="45">Todd Flanders</option>
 <option value="66">Heidi Klum</option>
 <option value="77">Michael Scott</option>
 <option value="78">Dweight Schrute</option>
 <option value="79">Pan Beesly</option>
 <option value="80">Creed Bratton</option>
 <option value="81">Niles Crane</option>
</select>

Select a trip here:
<select name="newTrip" id="newTrip">
 <option value="1000"> Select here</option>
<?php
include'getCountry.php';
?>
</select>
<br>
<input type="submit" value="Delete a booking">
</form>

<p>
<hr>
<p>
<h2>List all the trips that don't have any booking</h2>
<form action="busNoBooking.php" method="post">
<input type="submit" value="click here to see trip">


<?php
mysqli_close($connection);
?>
</body>
</html>


