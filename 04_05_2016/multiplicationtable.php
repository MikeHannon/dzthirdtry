<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<p>
		<?php
			$A = 1;
			$B = 1;
			while($A < 10)
			{
				echo "<div styles='height:30px;display:inline-block;'>";
				echo "<div styles='border: 1px solid black;height:30px;width:30px;display:inline-block;'>";
				echo ($A . '</div>');
				$B = 1;
				while($B < 10)
				{
					echo "<div styles='border: 1px solid black;height:30px;width:30px;display:inline-block;'>";
					echo (($A*$B) . '</div>');
					++$B;
				}
				++$A;
			}
		?>
	</p>
</body>
</html>