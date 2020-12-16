<?php
echo 'Current datetime: ' . date("F j, Y, g:i a") . '<br /><br />';
echo 'Apache and PHP running...';
echo 'Testing MySQL connection...';

$mysqli = new mysqli('172.20.0.4', 'root', 'password', 'mysql');

$query = 'SELECT User from user';

$users = array();
if ($stmt = $mysqli->prepare($query)) {
	$stmt->execute();
	$stmt->bind_result($user);

	while ($stmt->fetch()) {
		$users[] = $user;
	}

	$stmt->close();
}

echo '<ul>';
foreach ($users as $user) {
	echo '<li>' . $user . '</li>';
}
echo '</ul>';
