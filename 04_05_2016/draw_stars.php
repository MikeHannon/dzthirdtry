<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<p>
		<?php
			$x = array(4, 6, 1, 3, 5, 7, 25);
			$y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
			draw_stars($x);
			draw_stars($y);
			function draw_stars($arr)
			{
				foreach($arr as $val)
				{
					if(is_numeric($val) == true)
					{
						$i = 0;
						while($i < $val)
						{
							echo '*';
							++$i;
						}
					}
					else
					{
						$i = 0;
						$count = strlen($val);
						$newchar = substr($val, 0, 1);
						while($i < $count)
						{
							echo $newchar;
							++$i;
						}
					}
					echo '<br>';
				}
			}
		?>
	</p>
</body>
</html>