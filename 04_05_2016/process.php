<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style media="screen">
			#left{
				width:30%;
				display:inline-block;
				vertical-align: top;
			}
			#right{
				width:40%;
				display:inline-block;
				vertical-align: top;
			}
		</style>
	</head>
	<body>
<p style="text-decoration: underline;font-weight:bold;">Submitted Information</p>
<p style="font-family:monospace;">
<?php
	$junk = formatfor25('Name:');
	$junk = $junk . $_POST['name'] . '<br>';
	echo $junk;
	$junk = formatfor25('Dojo Location:');
	$junk = $junk . $_POST['dojolocation'] . '<br>';
	echo $junk;
	$junk = formatfor25('Favorite Language:');
	$junk = $junk . $_POST['favlanguage'] . '<br>';
	echo $junk;
	$junk = formatfor25('Comment:');
	$junk = $junk . $_POST['comment'] . '<br>';
	echo $junk;

	function formatfor25($newstring)
	{
		$i = strlen($newstring);
		$returnstring = $newstring;
		while($i < 25)
		{
			$returnstring .= "&nbsp";
			++$i;
		}
		return $returnstring;
	}
?>
</p>
<!-- Not stylish but another strategy -->
<h3>Editted Survey Form</h3>
<div id = 'left'>
<p>Name:</p>
<p>Language:</p>
<p>Location:</p>
<p>Comment:</p>
</div>
<div id = 'right'>
	<p><?= $_POST['name']?></p>
	<p><?= $_POST['favlanguage']?></p>
	<p><?= $_POST['dojolocation']?></p>
	<p><?= $_POST['comment']?></p>
</div>

</body>
</html>
