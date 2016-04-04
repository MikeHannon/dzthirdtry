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
	$x = array(1,3,5,7);
	foreach($x as $key => $value)
	{
	  echo $key . " - " . $value ."<br />";
	}

	$x = array(1,3,5,7);
	foreach($x as $value)
	{
	  echo $value ."<br />";
	}
	$x = array("hi" => "Dojo", "awesome" => "game");
	foreach($x as $key => $value)
	{
	  echo $key . " - " . $value ."<br />";
	}
	$x = array("hi" => "Dojo", "awesome" => "game");
	foreach($x as $key => $value)
	{
	  echo $value ."<br />";
	}
	$x = array("hi" => "Dojo", "awesome" => "game");
	foreach($x as $key => $value)
	{
	  echo $key ."<br />";
	}
	$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
	foreach($x as $key => $value)
	{
	  echo "Key is {$key}<br />";
	  echo "var_dumping value";
	  var_dump($value);
	}
	$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
	foreach($x as $value)
	{
	  echo "var_dumping value";
	  var_dump($value);
	}
	$x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
	foreach($x as $key => $value)
	{
	  echo "key is {$key}<br />";
	  foreach($value as $key2=>$value2)
	  {
	    echo $key2 ." - " . $value2."<br />";
	  }
	}
	$x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
	foreach($x as $y)
	{
	  foreach($y as $key=>$value)
	  {
	    echo $key ." - " . $value."<br />";
	  }
	}
	?>
	</p>
</body>
</html>