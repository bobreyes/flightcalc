<!DOCTYPE html> 
<html> 
<head> 
	<title>Flight Time Calculator</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Flight Time Calculator</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p align="center">Traveling at an average cruising speed of 500kph, you will reach your destination after:</p>	

		<center>
		<?php

		$kms = $_POST["inputkms"];
		$time = $kms/465;
		$time = round($time,2);

		echo "<h2>$time hours</h2>";
	
		?>	
		
		<br /></br />
		
		<b>Copyright &copy;2013 bobreyes.com</b>
		</center>
	
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>

