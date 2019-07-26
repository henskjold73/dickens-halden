<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Dickens Pizzeria og Bar</title>
</head>
<body>

<style>	

body{
	font-family: "Times New Roman", Times, serif;
	background-color: palegoldenrod;
}

.food-name{
	font-size: 24px;
}
	
.pizza {
    margin-top: 25px;
}

.price{
	font-size: 24px;
}

.size{
	font-size: 18px;
	font-weight: 600;
}

img{
	display: block;
    margin-left: auto;
    margin-right: auto;
	max-width: 100%;
}

</style>

<div class="container"> 

<img src="/img/logo_trans.png" />

<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	// $host = "remotemysql.com";
	// $username = "gyOfDnXUtZ";
	// $password = "PoSR4kdUV4";
	// $database = "gyOfDnXUtZ";
	// $db = mysqli_connect($host, $username, $password, $database);

	// if (mysqli_connect_errno())
  	// {
  	// 	echo "Failed to connect to database.";
	  // }
	  
	$pizzas = file('http://dickens-halden.no/pizza.csv');




	echo "<h1><b><i>Pizza</i></b></h1>";
	


	echo "<div class=\"row\">";
	echo "<div class=\"col\">";
	echo "</div>";

	echo "<div class=\"col\">";
	echo "<div class=\"row\">";
	echo "<div class=\"col size\">";
	echo "<i>30cm.</i>";
	echo "</div>";

	echo "<div class=\"col size\">";
	echo "<i>40cm.</i>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";


	foreach ($pizzas as $line_num => $pizza) {
		$p = explode(";", $pizza);

		echo "<div id=\"p$p[0]\" class=\"row pizza\">";

		echo "<div class=\"col\">";
		echo "<span class=\"food-name\">";
		echo htmlspecialchars($p[0]) . ". " . htmlspecialchars($p[1]);
		echo "</span>";
		echo "<div>";
		echo htmlspecialchars($p[2]);
		echo "</div>";
		echo "</div>";

		echo "<div class=\"col\">";
		echo "<div class=\"row\">";
		echo "<div class=\"col price\">";
		echo htmlspecialchars($p[3]) . ".- / " . htmlspecialchars($p[4]) . ".-";
		echo "</div>";

		if($p[5]){
		echo "<div class=\"col price\">";
		echo htmlspecialchars($p[5]) . ".- / " . htmlspecialchars($p[6]) . ".-";
		echo "</div>";
		}

		echo "</div>";
		echo "</div>";

		



		echo "</div>";	
		
	}

?>

<img src="/img/logo_matvenner_trans.png" />

</div>
</body>

</html>