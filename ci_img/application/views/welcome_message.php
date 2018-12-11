<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
	
</head>
<body>

<div id="container">
	<form action="index.php/welcome/do_upload" method="post" encrypt="multipart/form-data">
	 <input type="file" name="userFile"/>
	 <input type="submit"/>
	</form>
</div>

</body>
</html>