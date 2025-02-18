<?php
session_start();
include "connectdb.php";
$n=$_POST['name'];

$d=$_POST['detail'];
$w=$_POST['welfare'];
$s=$_POST['salary'];
$tj=$_POST['typejob'];
$tu=$_POST['typeuser'];
$id=$_SESSION['cpid'];
$sql="UPDATE job set job_name='$n',job_detail='$d',job_welfare='$w',job_salary='$s',job_wb='$tj',id_dst='$tu' where job_cpid='$id'";
mysqli_query($con,$sql);
mysqli_close($con);
echo "<meta http-equiv='refresh' content='0;job.php'>";
?>