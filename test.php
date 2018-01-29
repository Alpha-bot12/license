 <!DOCTYPE html>     
 <html>
     <title>
         EDIT PAGE
     </title>
 </html>
<?php
define('DB_NAME','License');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

$link= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

if (!$link)
{
    die('could not connect'. $link->connect_error);
}
 else {
$afn = $_POST['afn'];
$amn = $_POST['amn'];
$aln = $_POST['aln'];
$date=$_POST['date'];
$age= floor((time()-strtotime($date))/31556926);
echo $age;
$sql="INSERT INTO lic(applicant_fname,applicant_mname,applicant_lname,dob_bs,age) VALUES('$afn','$amn','$aln','$date','$age')";
if (mysqli_query($link, $sql))
{
    echo "<br><strong>".'New record entered successfully'."</strong";
}
else
    {
    echo "error".$sql."<br>". mysqli_error($link);
}
 }
?>