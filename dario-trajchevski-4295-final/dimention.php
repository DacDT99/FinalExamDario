<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

</head>
<body>
<?php

$w = $h = 0;

if (isset($_GET['w'])){
	$w = $_GET['w'];
}
if (isset($_GET['h'])){
	$h = $_GET['h'];
}

$width = $w;
$height = $h;



?>

<form action="dimension.php" method="GET">
				width: <input type="Text" name="w" id="w" value="<?php echo $w;?>" > <br>
				height: <input type="Text" name="h" id="h" value="<?php echo $h;?>" > <br>
				<input type="submit" value="Draw">
</form>


<div style="width: <?php echo $width; ?>; height: <?php echo $height; ?>; background-color: black">


	
</body>
</html>