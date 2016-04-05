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
	$B = array(2,4,6,8,10);
	function multiply($A,$multiply)
	{
		$i = 0;
		$newarr = array();
		while($i < count($A))
		{
			$newarr[] = $A[$i] * $multiply;
			++$i;
		}
		return $newarr;
	}
	$C = multiply($B, 2);
	var_dump($B);
	var_dump($C);
	?>
	</p>
</body>
</html>