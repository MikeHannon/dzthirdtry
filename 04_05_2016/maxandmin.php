<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<p>
		<?php
			$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02);
			function get_max_and_min($arr)
			{
				$max = $arr[0];
				$min = $arr[0];
				foreach($arr as $val)
				{
					if($val > $max)
					{
						$max = $val;
					}
					else if($val < $min)
					{
						$min = $val;
					}
				}
				$output['max'] = $max;
				$output['min'] = $min;
				return $output;
			}
			$maxnmin = get_max_and_min($sample);
			var_dump($maxnmin);
		?>
	</p>
</body>
</html>