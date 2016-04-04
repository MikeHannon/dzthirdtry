<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<p style="font-family:monospace;"><?php 
	$i = 1;
	$junk = '';
	$break = 0;
	for($i = 5; $i < 1000001; $i += 5)
	{	
		$junk = strval($i);
		$junk = strlen($junk);
		++$break;
		while($junk < 8)
		{
			echo "&nbsp";
			++$junk;
		}
		echo "$i";
		if($break > 25)
		{
			echo "<br>";
			$break = 0;
		}
	}
	?>
	</p>
</body>
</html>