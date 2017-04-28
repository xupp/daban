<?php 


	$post = $_REQUEST;

	file_put_contents('./aa.php',var_export($post,true));