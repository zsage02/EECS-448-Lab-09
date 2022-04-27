<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="formChecker.js">
	</script>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="header">
  <h1>EECS 448 Lab 08 Sage's Website</h1>
</div>

<div class="topnav">
  <a href="index.html">Home</a>
  <a href="exercise1.html">Exercise01</a>
  <a href="exercise2.html">Exercise02</a>
  <a href="customerFrontEnd.html">Exercise03</a>
</div>

<div class="row">
<style>
* {
  box-sizing: border-box;
}


.leftcolumn {   
  float: left;
  width: 50%;
}

.rightcolumn {
  float: left;
  width: 50%;
  padding-left: 20px;
}

.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

.card {
  background-color: grey;
  padding: 20px;
  margin-top: 20px;
  border: #990000;
  border-width: 5px;
  border-style: solid;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

table, th, td {
  border: 1px solid black;
}

</style>
</head>
<body>
<?php
	$wep = $_POST["weapons"];
	$arm = $_POST["armor"];
	$hor = $_POST["horses"];
	$shp = $_POST["sd"];
	$ship = 0;
	$total = 0;
?>
<div class="row">
  <div class="leftcolumn">
  	<table>
	<tr>
		<th></th>
		<th>Quantity</th>
		<th>Cost Per Item</th>
		<th>Sub Total</th>
	</tr>
	<tr>
		<th>Weapons</th>
		<td> <?php echo $wep ?> </td>
		<td>$30.00</td>
		<td> $<?php echo $wep*30 ?> </td>
	</tr>
	<tr>
		<th>Armor</th>
		<td> <?php echo $arm ?> </td>
		<td>$100.00</td>
		<td> $<?php echo $arm*100 ?> </td>
	</tr>
	<tr>
		<th>Horses</th>
		<td> <?php echo $hor ?> </td>
		<td>$50.00</td>
		<td> $<?php echo $hor*30 ?> </td>
	</tr>
	<tr>
		<th>Shipping</th>
		<td colspan = "2"> <?php echo $shp ?> </td>
		<td> $<?php
			if($shp == "7 Days")
			{
				$ship = 0;
			}
			else if($shp == "Over night")
			{
				$ship = 50;
			}
			else
			{
				$ship = 5;
			}
			echo $ship;
			?></td>
	</tr>
	<tr>
		<th colspan="3">Total Cost</th>
		<th> $<?php
			$total = $ship + ($wep*30) +($arm*100)+($hor*50);
			echo $total;
			?></th>

	</tr>
	</table>
</div>
</div>

</body>
</html>
