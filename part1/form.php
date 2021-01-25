<html>
<body>
<form method="POST">
  Email: <input type="text" name="email">
  Password: <input type="password" name="password">
  <input type="submit">
</form>

<?php

if (isset($_POST['email'], $_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
  if (empty($email) || empty($password)) {
		echo "Fill all inputs";
  } else {
		echo $email . "<br>" . $password;
  }
}
?>
</body>
</html>

