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