
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Testing the Emailer Class</h2>
	
	<?php 
	    
		require 'EmailerClass.php';   //access the class file
	
	    $emailTest = new Emailer(); //instantiates the new emailer object
		
		$emailTest->set_senderEmail("reagbor@dmacc.edu");
		
		echo $emailTest->getsenderEmail();  //return email
		
		$emailTest->set_recipientEmail("etchumac@gmail.com");
		
		echo $emailTest->getrecipientEmail();  //
		
		$emailTest->set_subject("Hello Joann");
		
		echo $emailTest->getSubject();
		
		$emailTest->set_message("Thank You");
		
		echo $emailTest->getMessage();
		
		echo $emailTest->sendEmail();
		
		
		
		
		
		
		
		
	
	?>
	
</body>
</html>











