<?php
$time=$_POST['date'];
$now= time();
$dob= strtotime($time);
$diff=$now-$dob;
$age=floor($diff/31556926);
echo $age;


?>
