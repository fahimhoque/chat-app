<?php
require_once 'model/config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="login.php">Login</a>
	<?php
		$object = new database();
		$object->connect();
	?>
</body>
</html>