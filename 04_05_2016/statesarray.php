<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="statesarray.css">
	<title></title>
</head>
<body>
	<nav>
    <ul>
        <li><a href="#">First 5 For Loop</a>
            <!-- First Tier Drop Down -->
            <ul>
            	<?php
            		$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
            		for($i = 0;$i<count($states);++$i)
            		{
            			echo ('<li><a href="#">' . $states[$i] . '</a></li>');
            		}
            	?>
            </ul>

<!--             <ul>
                <li><a href="#">Themes</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Tutorials</a></li>
            </ul> -->
        </li>
        <li><a href="#">Second 5 For Each</a>
            <ul>
            	<?php
            		foreach($states as $val)
            		{
            			echo ('<li><a href="#">' . $val . '</a></li>');
            		}
            	?>
            </ul>
        </li>
        <li><a href="#">Third 8 for each</a>
			<ul>
            	<?php
            		$states[] = 'NJ';
            		$states[] = 'NY';
            		$states[] = 'DE';
            		foreach($states as $val)
            		{
            			echo ('<li><a href="#">' . $val . '</a></li>');
            		}
            	?>
            </ul>
        </li>
    </ul>
	</nav>
</body>
</html>