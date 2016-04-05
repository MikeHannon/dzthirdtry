<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="statesarray.css">
	<title></title>
</head>
<body>
	<p>
		<span style="font-weight:bold;text-decoration: underline;">Starting ZE Program!<br></span>
		<?php
			$i = 1;
			$heads = 0;
			$tails = 0;
			$flipit = 0;
			while($i < 5001)
			{
				$flipit = rand(0,1);
				echo ('Attempt #' . $i . ': Throwing a coin... It\'s a ');
				if($flipit == 0)
				{
					++$heads;
					echo 'head';
				}
				else
				{
					++$tails;
					echo 'tail';
				}
				echo ('! ... Got ' . $heads . ' head(s) so far and ' . $tails . ' tail(s) so far' . '<br>');
				++$i;
			}
		?>
		<span style="font-weight:bold;text-decoration: underline;">Ending The Program!  Don't let the door hit you on the way out!<br></span>
	</p>
</body>
</html>