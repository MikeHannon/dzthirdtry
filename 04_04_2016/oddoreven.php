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
	$junk = 'odd';
	while($i < 2001)
	{
		echo "Number is $i.  This is an $junk number.<br>";
		++$i;
		if($junk == 'odd')
		{
			$junk = 'even';
		}
		else
		{
			$junk = 'odd';
		}
	}
	?>
	</p>
</body>
</html>