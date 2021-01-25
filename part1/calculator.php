<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
</head>
<body>

<form method="GET">
<input type="text" placeholder="Number 1" name="n1">
<input type="text" placeholder="Number 2" name="n2">
<select name="operator">
<option>None</option>
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_GET['submit'])) {
	$res1 = $_GET['n1'];
	$res2 = $_GET['n2'];
	$operator = $_GET['operator'];
	switch ($operator) {
		case 'None' :
			echo 'You did not select a method' ;
			break;
		case '+' :
			echo $res1 + $res2;
			break;
		case '-':
			echo$res1 - $res2;
			break;
		case '*':
			echo $res1 * $res2;
			break;
		case '/':
			echo $res1 / $res2;
			break;
	}
}


?>
	
</body>
</html>