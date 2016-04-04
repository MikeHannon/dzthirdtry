<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<p style="font-family:monospace;">
	<?php 
	ini_set('xdebug.var_display_max_depth', 5);
	ini_set('xdebug.var_display_max_children', 10000);
	ini_set('xdebug.var_display_max_data', 1024);
	$i = 1;
	$oddnumbers = array();
	while($i < 20001)
	{
		$oddnumbers[] = $i;
		$i+=2;
	}
	var_dump($oddnumbers);
	?>
	</p>
</body>
</html>