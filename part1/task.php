<?php

echo '==================Q5===============' . '<br>';
echo $_SERVER['SCRIPT_FILENAME'];
echo '<br>';
echo $_SERVER['SCRIPT_NAME'];

echo '<br>';
echo '================Q6=================';
echo '<br>';
echo $_SERVER['REQUEST_TIME'];

echo '<br>';
echo '================Q7=================';
echo '<br>';
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
 echo $_SESSION['count']++;
}
echo '<br>';
echo '================Q9=================';
echo '<br>';
setcookie('mohammed', 'alagi', time() + 3 * 24 * 60 * 60, '/', '', 0);
echo "<pre>";
print_r($_COOKIE);

session_start();