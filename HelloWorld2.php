<?php

   $firstName = "Raymond";     //Datatype:String   Scope:Global
   $lastName = "Agbor";  //Datatype:String   Scope:Global

?>



<!doctype html>
 <html>
 
 <head>
 
 <meta charset="utf-8">
 <title>Untitled Document</title>
    
</head>

<body>
    <?php
        echo "<h1>Hello Jeff!!!!!</h1>";
		echo "<p>This is not formatted.</p>";
    ?>
   
   
	<h1>WDV34 Intro to 	PHP</h1>
	<h2>Monday Nights 6-10pm</h2>
	
	<p>Hello World!!!</p>
	
	
	<h2>Hello <?php echo $firstName; ?></h2>
	<h2>Hello <?php echo $firstName." ".$lastName; ?></h2>
	
	    <?php
	
	        echo "<h3>PHP Wrote This line</h3>";
	    
        ?>		
	<p>This is a paragrph.</p>
		
</body>

</html>