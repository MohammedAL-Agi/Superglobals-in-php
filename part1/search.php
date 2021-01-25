<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form method="POST">
<input type="text"name="url" >
<input type="submit" value="Go">
</form>

<?php
if(isset($_POST['url'])){
	header("location: http://". $_POST['url']);
	$url = $_POST['url'];
	echo $url;
}
?>
	
</body>
</html>