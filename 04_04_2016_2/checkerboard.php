<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">	
	<title>Checkerboard</title>
	<link rel="stylesheet" type="text/css" href="checkerboard.css">
</head>
<body>
	<?php
		$black = false;
		for( $i = 0; $i < 8; $i++) 
		{
			if($black == true)
			{
				$black = false;
			}
			else
			{
				$black = true;
			}
				echo "<div class=row>";
		
			for ($j = 0; $j < 8; $j++) 
			{		
				if($black == true)
				{
					echo "<div class='square black'></div>";
					$black = false;
				}
				else
				{
					echo "<div class='square'></div>";
					$black = true;
				}
			}
			echo "</div><br>";
		}
	?>


</body>
</html>




<?php



?>