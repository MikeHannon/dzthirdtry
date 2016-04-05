<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<ul style="font-family:monospace;">
		<?php 
		ini_set('xdebug.var_display_max_depth', 5);
		ini_set('xdebug.var_display_max_children', 10000);
		ini_set('xdebug.var_display_max_data', 1024);
		$i = 0;
		while($i < 100)
		{
			scoreit(rand(50, 100));
			++$i;
		}
		function scoreit($grade) //Complete failure at understanding for each loops, keys, and all associated with them.
		{
			// $h1 = '<h1>';
			$h1 = '';
			$h1 = $h1 . 'Your Score: ' . $grade . '/100</h1>';
			$h2 = '<h2>Your grade is ';
			if($grade >= 90)
			{
				$h2 = $h2 . 'A.</h2>';
			}
			else if($grade >= 80)
			{
				$h2 = $h2 . 'B.</h2>';
			}
			else if($grade >= 70)
			{
				$h2 = $h2 . 'C.</h2>';
			}
			else
			{
				$h2 = $h2 . 'D.</h2>';
			}
			echo $h1;
			echo $h2;
		}
		keysandvalues($users);
		?>
	</ul>
</body>
</html>