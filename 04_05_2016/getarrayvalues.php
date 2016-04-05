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
		$B = array(2,"four",6,8,10, true,"ye[p");
		function print_lists($arr)
		{
			foreach($arr as $val => $stuff) //inefficient noob way
			{
				echo("<li>" . $stuff . "</li>");
			}
			foreach($arr as $stuff) //more efficient way
			{
				echo("<li>" . $stuff . "</li>");
			}
		}
		print_lists($B);
		?>
	</ul>
</body>
</html>