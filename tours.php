<?php
$fn=$_POST['t1'];
$em=$_POST['t2'];
$ph=$_POST['t3'];
$ad=$_POST['t4'];
$fr=$_POST['t5'];
$to=$_POST['t6'];
$dd=$_POST['t7'];
$rd=$_POST['t8'];
$ad=$_POST['t9'];
$ch=$_POST['t10'];
$noc=$_POST['t11'];
$cno=$_POST['t12'];


$user ='root';
$pass ='';
$db ='collage_pr';

$db=mysqli_connect("localhost","root","","collage_pr") or die("connection failed: ".mysqli_connect_error());
$sql="insert into flight_reg values('$fn','$em',$ph,'$ad','$fr','$to','$dd','$rd',$ad,$ch,'$noc',$cno)";
mysqli_query($db,$sql) or die("insert failed:");
echo "YOUR REGISTRATION SUCCESSFULLY";
mysqli_close($db);
?>
