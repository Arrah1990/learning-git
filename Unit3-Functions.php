<?php 

    $fName = "";     //established with initial value GLOBAL SCOPE
	$lName = "";     //"
	
	$fName = "Mark";   //assign a value to variables
	$lName = "Lever";
	
	
	function outputFullName() {
		
		global $fName, $lName;
		echo "$fName, $lName";
		echo "<br>";
		echo $fName. ", ". $lName;
		echo "<br>";
	
	}

    function outputFullName2($inFirstName, $inLastName) {
		echo "$inLastName, $inFirstName";
		echo "<br>";
		echo $inLastName. ", " . $inFirstName;
		echo "<br>";
	}
	
	
	function outputFullName3($inFirstName, $inLastName){
		return "$inLastName, $inFirstName";
	}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


        
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Unit-3 PHP Functions</h2>
	<h3>Writing and using PHP functions</h3>
	
	<div>
	  <h3>Student Roster</h3>
	  
	  <?php
	    outputFullName2('Agbor', 'Raymond');
		outputFullName2('Etchu', 'Arrah');
	  ?>
	
	</div>
	
	<div>
	
	<h3>Student Roster 2</h3>
	  
	  <?php
	    outputFullName('Mark');
		outputlName('Lever');
	  ?>
	
	</div>
	
	<div>
	
	<h3>Student Roster 3</h3>
	  
	  <?php
	    outputfName('Thomas');
		outputlName('Muller');
	  ?>
	
	</div>
	
	
</body>
</html>
