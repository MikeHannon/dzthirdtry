<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<p style="font-family:monospace;"><?php 
	$i = 0;
	$numbers = array(1, 2, 5, 10, 255, 3);
	$sum = 0;
	while($i < count($numbers))
	{
		$sum += $numbers[$i];
		++$i;
	}
	$sum /= $i;
	echo "$sum";
	?>
	</p>
</body>
</html>