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
		$users['first_name'] = "Michael";
		$users['last_name'] = "Choi";
		// $users['first_name'] = "Matthew";
		// $users['last_name'] = "Mccoy";
		// $users['first_name'] = "Joel";
		// $users['last_name'] = "Garboden";
		function keysandvalues($arr) //Complete failure at understanding for each loops, keys, and all associated with them.
		{
			echo('There are ' . count($arr) . ' keys in this array: ');
			foreach($arr as $key => $val)
			{
				if($key != 'last_name')
				{
					echo($key . ', ');
				}
				else
				{
					echo($key . '<br>');
				}
			}
			foreach($arr as $key1 => $val1)
			{
				echo("The value in the key '" . $key1 . "' is '" . $val1 . "<br>");
				// foreach($arr as $key2 => $val2)
				// {
				// 	echo("The value in the key '" . $key2 . "' is '" . $val2 . "<br>");
				// }
			}
		}
		keysandvalues($users);
		?>
	</ul>
</body>
</html>