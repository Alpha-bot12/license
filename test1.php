<?php
include 'test.php';
$afirst     = $_POST['afirst'];
$amiddle    = $_POST['amiddle'];
$alast      = $_POST['alast'];
$dob        = $_POST['dob'];
$gender     = $_POST['gender'];
$occup      = $_POST['occup'];
$education  = $_POST['education'];
$blood      = $_POST['blood'];
$citizen    = $_POST['citizen'];
$citizen_no = $_POST['citizen_no'];
$district   = $_POST['district'];
$m_witness  = $_POST['m_witness'];
$l_witness  = $_POST['l_witness'];
$witrltn    = $_POST['witrltn'];
$pzone      = $_POST['pzone'];
$pdistrict  = $_POST['pdistrict'];
$pvillage   = $_POST['pvillage'];
$pwardno    = $_POST['pwardno'];
$ptole      = $_POST['ptole'];
$pcontact   = $_POST['pcontact'];
$pemail     = $_POST['pemail'];
$tzone      = $_POST['tzone'];
$tdistrict  = $_POST['tdistrict'];
$tvillage   = $_POST['tvillage'];
$twardno    = $_POST['twardno'];
$ttole      = $_POST['ttole'];
$tcontact   = $_POST['tcontact'];
$temail     = $_POST['temail'];
$category   = $_POST['category'];
$lic_office = $_POST['lic_office'];
$sql        = "INSERT INTO lic(afirst, amiddle, alast, dob, age, gender, occup, education, blood, citizen, citizen_no, district, f_witness, m_witness, l_witness, witrltn, pzone, pdistrict, pvillage, pwardno, ptole, pcontact, pemail, tzone, tdistrict, tvillage, twardno, ttole, tcontact, temail, category, lic_office) VALUES ('$afirst','$amiddle','$alast','$dob','$age','$gender','$occup','$education','$blood','$citizen','$citizen_no','$district','$f_witness','$m_witness','$l_witness','$witrltn','$pzone','$pdistrict','$pvillage','$pwardno','$ptole','$pcontact','$pemail','$tzone','$tdistrict','$tvillage','$twardno','$ttole','$tcontact','$temail','$category', '$lic_office')";
if (mysqli_query($link, $sql)) {
	echo "<br><strong>".'New record entered successfully'."</strong";
} else {
	echo "error".$sql."<br>".mysqli_error($link);
}

?>

<?php
$time = $_POST['date'];
$now  = time();
$dob  = strtotime($time);
$diff = $now-$dob;
$age  = floor($diff/31556926);
$age  = floor((time()-strtotime($date))/31556926);

?>
