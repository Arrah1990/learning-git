<?php 

   $counter = 16
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


        <style>
		
		
		    body {
				background-color:brown;
			    <?php
				   if ($counter <12) {
			      echo "color:brown";
				}
			    ?>	
				
			}
		
		    <?php
			   echo "h1 {background-color:blue;}";
			   echo "h3{background-color:green;}";
			?>
			
		
	    </style>


    <script>
	     
	
	    <?php 
	       echo "let name = 'Raymond'; "
		   //echo "h3 {background-color:red;}"; //this breaks in the browser
	    ?>
	    
	       console.log(name);  //output name variable to log
	   
	    <?php 
	   
	       echo "let names = ['Mary', 'Mark'];";
	    ?>
		
		   console.log(names);  //display array from PHP
	   
	   
	</script>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Unit-2 PHP Basics</h2>
	<h3>Using PHP, to output HTML, CSS and Javascript.</h3>
	
	<?php
	
	    echo "<p> This is outputed by PHP on the server.</P>";
	?>
	
	
	
</body>
</html>
