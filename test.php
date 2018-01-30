
<?php
$link = mysqli_connect("localhost", "root", "", "License");

if (!$link) {
	die('could not connect'.mysqli_connect_error());
}
?>